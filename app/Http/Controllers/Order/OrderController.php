<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderExcursionRequest;
use Domain\ExcursionOrder\ViewModels\ExcursionOrderViewModels;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class OrderController extends Controller
{
    public function interimRequest(Request $request)
    {
        /** тут логика сохранения данных */
        //tour_data
       $bool = ExcursionOrderViewModels::make()->getSession($request->all());
        /** //тут логика сохранения данных */

       $true =  array('url' => route('order'));
       $false = array('errors' => 'error');

        return response()->json(($bool)?$true:$false, 200);
    }


    public function order():View | RedirectResponse
    {
        $order = ExcursionOrderViewModels::make()->setSession(config('site.constants.tour_data'));

        if(is_null($order)) {
            return redirect()->route('home');
        }

       return view('orders.order', [
           'order' => $order
       ]);

    }

    public function finalRequest(OrderExcursionRequest $request):mixed
    {
        dd($request->all());

    }
}
