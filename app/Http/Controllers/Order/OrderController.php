<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class OrderController extends Controller
{
    public function order():View
    {

        return view('orders.order');

    }
}
