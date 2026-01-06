<?php

namespace App\Http\Controllers\FancyBox;

use App\Http\Controllers\Controller;
use App\Models\Excursion;
use Illuminate\Http\Request;

class FancyBoxController extends Controller
{
    public function fancybox(Request $request) {

        //dd($request->all());


        if($request->template == 'call_me') {
            return view('fancybox.forms.call_me');
        }


        if($request->template == 'order_excursion') {

            $jsonData = json_decode($request->data);
            $item  = null;
            if ($jsonData && isset($jsonData->excursion_id)) {
                /** Ключ существует, получаем значение **/
                $excursion_id = $jsonData->excursion_id;
                /** Получим экскурсию **/
                $item = Excursion::find($excursion_id);
            }

            return view('fancybox.forms.order_excursion', [
                'item' => $item
            ]);
        }



        return view('fancybox.forms.error.error_form');

    }

}
