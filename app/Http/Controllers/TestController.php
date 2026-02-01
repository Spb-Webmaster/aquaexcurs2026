<?php

namespace App\Http\Controllers;


use App\PDF\PdfService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use YooKassa\Model\Notification\NotificationEventType;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;
class TestController extends Controller
{
    public function test()
    {
        return view('test');

    }
    public function test_send(Request $request)
    {
        return view('test_send', [
            'request' => $request->all()
        ]);

    }



}
