<?php

namespace App\Http\Controllers\Cabinet;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class CabinetController extends Controller
{

    public function cabinetUser():View
    {
        return view('cabinet.cabinet');

    }
}
