<?php

namespace App\Http\Controllers;


use App\PDF\PdfService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function test()
    {



        return view('test', [
            ]
        );
    }




}
