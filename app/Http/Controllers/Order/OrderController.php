<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderExcursionRequest;
use Domain\ExcursionOrder\ViewModels\ExcursionOrderViewModels;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Support\PDF\ReplaceText;

class OrderController extends Controller
{
    public function interimRequest(Request $request)
    {
        /** тут логика сохранения данных */
        //tour_data
       $bool = ExcursionOrderViewModels::make()->setSession($request->all());
        /** //тут логика сохранения данных */

       $true =  array('url' => route('order'));
       $false = array('errors' => 'error');

        return response()->json(($bool)?$true:$false, 200);
    }


    public function order():View | RedirectResponse
    {
        $order = ExcursionOrderViewModels::make()->getSession(config('site.constants.tour_data'));

        if(is_null($order)) {
            return redirect()->route('home');
        }

       return view('orders.order', [
           'order' => $order
       ]);

    }

    public function finalRequest(OrderExcursionRequest $request):View
    {
        /** запишем данные в базу и вернем данные для отображения на странице */
        $order = ExcursionOrderViewModels::make()->saveOrder($request);


        /** создадим PDF и отправим на почту */
        ReplaceText::make()->replaceText($order);

        return view('orders.order_result', [
            'order' => $order
        ]);

    }
}
