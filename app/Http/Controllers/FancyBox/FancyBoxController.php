<?php

namespace App\Http\Controllers\FancyBox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FancyBoxController extends Controller
{
    public function fancybox(Request $request) {

        //dd($request->all());


        if($request->template == 'call_me') {
            return view('fancybox.forms.call_me');
        }



        return view('fancybox.forms.error.error_form');

    }

}
