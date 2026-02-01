<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderExcursionRequest;
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


        /** Создадим PDF */
        ReplaceText::make()->replaceText($order);

        /** Отправим в 1С */
      //  $order_request  = OrderProcessing::make()->sendingProcess($order);


        /** Оплатим заказ */
        if($confirmationUrl = YooKassaPayment::make()->getRedirect($order)) {
            return redirect($confirmationUrl);
        }

        // тут необходимо записать код ответа (200) или (500) для отправки в БД!!!!! order_request['http_code']
        /** Отправим на почту  */


        /** Если дошли до сюда, то оплата не прошла !!! */
        return view('orders.order_result', [
            'order' => $order,
          //  'http_code' => $order_request['http_code'],
        ]);

    }


    public function paymentSucceeded()
    {
        $source = file_get_contents('php://input');
        $requestBody = json_decode($source, true);
        Log::info('Жду сюда сообщение'); // в логи
        Log::info($requestBody); // в логи
        /** ничего не получаю ***/

        try {
            $notification = ($requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED)
                ? new NotificationSucceeded($requestBody)
                : new NotificationWaitingForCapture($requestBody);
        } catch (\Exception $e) {
            // Обработка ошибок при неверных данных
        }
        return true;

    }

    public function paymentResult()
    {

        return view('orders.order_result_payment', [
            //  'http_code' => $order_request['http_code'],
        ]);

    }

}
