<?php

namespace App\Http\Controllers\FancyBox;

use App\Events\Form\ExcursionEmailEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderExcursionRequest;
use Domain\ExcursionEmail\ViewModels\ExcursionEmailViewModel;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class FancyBoxSendingFromFormController extends Controller
{


    /** перезвоните мне  */
    public function fancyboxCallMe(Request $request) {


     return response()->json([
            'response' => $request->all(),
        ], 200);

    }

    /** Заказ экскурсии */
    public function fancyboxOrderExcursion(OrderExcursionRequest $request) {


         ExcursionEmailViewModel::make()->save($request->validated());

         ExcursionEmailEvent::dispatch($request->validated());

     return response()->json([
            'response' => $request->all(),
        ], 200);

    }


}
