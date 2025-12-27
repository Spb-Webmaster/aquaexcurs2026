<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        //flash()->info('Hello');
        if(auth()->check()) {
            $user = auth()->user();
        } else {
            $user = false;
        }


       return view('home', [
           'user' => $user,
           ]
       );
    }


}
