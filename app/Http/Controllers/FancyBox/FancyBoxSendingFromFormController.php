<?php

namespace App\Http\Controllers\FancyBox;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCallMeRequest;
use Domain\SavedFormData\ViewModel\SavedFormDataViewModel;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class FancyBoxSendingFromFormController extends Controller
{


    /** перезвоните мне  */
    public function fancyboxCallMe(RequestCallMeRequest $request) {

      SavedFormDataViewModel::make()->save($request);
        $data = $request->except('url');
     //   FancyBoxSendingFromFormEvent::dispatch($data);

     return response()->json([
            'response' => $request->all(),
        ], 200);

    }
    /** Заказ экскурсии */
    public function fancyboxOrderExcursion(RequestCallMeRequest $request) {

      SavedFormDataViewModel::make()->save($request);
        $data = $request->except('url');
     //FancyBoxSendingFromFormEvent::dispatch($data);

        dd($data);
     return response()->json([
            'response' => $request->all(),
        ], 200);

    }


}
