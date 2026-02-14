<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderExcursionRequest;
use App\Models\ExcursionOrder;
use App\Send1C\OrderProcessing;
use App\YooKassa\YooKassaPayment;
use Domain\ExcursionOrder\ViewModels\ExcursionOrderViewModels;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Support\PDF\ReplaceText;
use YooKassa\Model\Notification\NotificationEventType;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;

class OrderController extends Controller
{
    public function interimRequest(Request $request)
    {
        /** тут логика сохранения данных */
        //tour_data
        $bool = ExcursionOrderViewModels::make()->setSession($request->all());
        /** //тут логика сохранения данных */

        $true = array('url' => route('order'));
        $false = array('errors' => 'error');

        return response()->json(($bool) ? $true : $false, 200);
    }

    public function order(): View|RedirectResponse
    {
        $order = ExcursionOrderViewModels::make()->getSession(config('site.constants.tour_data'));

        if (is_null($order)) {
            return redirect()->route('home');
        }

        return view('orders.order', [
            'order' => $order
        ]);

    }

    public function finalRequest(OrderExcursionRequest $request):View|RedirectResponse
    {
        /** Запишем данные в базу и вернем данные для отображения на странице */
        $order = ExcursionOrderViewModels::make()->saveOrder($request);
        /** Сохраним данные заказа в сессию */
        $bool =  ExcursionOrderViewModels::make()->setSessionExcursionOrder($order);
        /** Получим ссылку на страницу оплаты */
        $confirmationUrl = YooKassaPayment::make()->getRedirect($order);
        /** Оплатим заказ */
        if($confirmationUrl && $bool) {
            return redirect($confirmationUrl);
        }


        // тут необходимо записать код ответа (200) или (500) для отправки в БД!!!!! order_request['http_code']
        /** Отправим на почту  */

        /** Вернем на заданную страницу нужно добавить сообщение flash */
        return redirect()->back();
    }


    public function paymentSucceeded()
    {
        $source = file_get_contents('php://input');
        $requestBody = json_decode($source, true);
          Log::info('public function paymentSucceeded()'); // в логи
          Log::info($requestBody); // в логи

        try {

            if($requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED) {
                /** Вся логика будет тут */
                $order = ExcursionOrder::find($requestBody['object']['metadata']['orderId']);
                if(!is_null($order)) {

                    $order->amount = $requestBody['object']['amount']['value']; // сумма
                    $order->id_yoo_kassa = $requestBody['object']['id']; // id платежа yoo kassa
                    $order->notification_yoo_kassa = $requestBody; // уведомление
                    //'pending', 'waiting_for_capture', 'succeeded', 'canceled'
                    $order->status_yoo_kassa = $requestBody['object']['status']; //статус
                    /** Отправим в 1С */
                    $order_request  = OrderProcessing::make()->sendingProcess($order->toArray());
                    $order->status = $order_request['http_code'];
                    $order->save();

                    /** Обновим данные об экскурсии */

                    /** Создадим PDF */
                     ReplaceText::make()->replaceText($order->toArray());

                }

/*              Log::info($requestBody['object']['metadata']['orderId']); // в логи
                Log::info($requestBody['object']['id']); // в логи
                Log::info($requestBody['object']['status']); // в логи
                Log::info($requestBody['object']['amount']['value']); // в логи*/

            }


        } catch (\Exception $e) {
            // Обработка ошибок при неверных данных
            logErrors($e);
        }
        return true;

    }

    public function paymentResult():View
    {
        /** получить данные сессии по ключу из прошлого шага */
        $order_session = ExcursionOrderViewModels::make()->getSession(config('site.constants.excursion_order'));
        if($order_session) {
            /** получить данные из бд по id */
            $order = ExcursionOrder::find($order_session['id']);
            /** удалить сессии **/
            session()->forget([config('site.constants.tour_data'), config('site.constants.excursion_order')]);

            if($order->status_yoo_kassa !== 'succeeded') {
                /** Произошла ошибка */
                return view('orders.order_result_error', []);
            }

            /** Платеж прошел успешно */
            return view('orders.order_result_payment', [
                'order' => (isset($order))?$order->toArray():null,
            ]);

        }
        return view('orders.order_result_error', []);


        // получить данные из бд по id
        // удалить сессии
        // рассмотреть остальные сценарии неудачной покупки

    }

}
