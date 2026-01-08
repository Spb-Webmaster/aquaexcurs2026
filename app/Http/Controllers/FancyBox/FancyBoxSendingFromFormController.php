<?php

namespace App\Http\Controllers\FancyBox;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderExcursionRequest;
use Domain\ExcursionEmail\ViewModels\ExcursionEmailViewModel;
use Domain\SavedFormData\ViewModel\SavedFormDataViewModel;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class FancyBoxSendingFromFormController extends Controller
{


    /** перезвоните мне  */
    public function fancyboxCallMe(Request $request) {

      SavedFormDataViewModel::make()->save($request);
        $data = $request->except('url');
     //   FancyBoxSendingFromFormEvent::dispatch($data);

     return response()->json([
            'response' => $request->all(),
        ], 200);

    }

    /** Заказ экскурсии */
    public function fancyboxOrderExcursion(OrderExcursionRequest $request) {


        ExcursionEmailViewModel::make()->save($request->validated());

     //FancyBoxSendingFromFormEvent::dispatch($data);


     return response()->json([
            'response' => $request->all(),
        ], 200);

    }


}
