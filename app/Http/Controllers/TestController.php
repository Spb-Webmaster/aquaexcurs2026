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
        $order_id = 5;
        $client = new \YooKassa\Client();
        $client->setAuth('1263476', 'test_Z1CzV3biXUEW9fIUyboI3YosIbRrOlO5lwjMYGzqq00');
        try {
            $idempotenceKey = uniqid('', true);
            $response = $client->createPayment(
                [
                    'amount' => [
                        'value' => '1000.00',
                        'currency' => 'RUB',
                    ],
                    'confirmation' => [
                        'type' => 'redirect',
                        'locale' => 'ru_RU',
                        'return_url' => 'https://aquaexcurs2026.test/success',
                    ],
                    'capture' => true,
                    'description' => "Заказ №{$order_id}",
                    'metadata' => [
                        'orderNumber' => $order_id,
                    ],
                    'receipt' => [
                        'customer' => [
                            'full_name' => 'Ivanov Ivan Ivanovich',
                            'email' => 'email@email.ru',
                            'phone' => '79211234567',
                            'inn' => '6321341814'
                        ],
                        'items' => [
                            [
                                'description' => 'Переносное зарядное устройство Хувей',
                                'quantity' => '1.00',
                                'vat_code' => '2',
                                'amount' => [
                                    'value' => 1000,
                                    'currency' => 'RUB'
                                ],

                            ],
                        ]
                    ],
                    'statements' => [
                        [
                            'type' => 'payment_overview',
                            'delivery_method' => [
                                'type' => 'email',
                                'email' => 'john.doe@mail.ru',
                            ],
                        ],
                    ],
                ],
                $idempotenceKey
            );

            //получаем confirmationUrl для дальнейшего редиректа
            $confirmationUrl = $response->getConfirmation()->getConfirmationUrl();
        } catch (\Exception $e) {
            $response = $e;
        }

     //   dd($response, $confirmationUrl);

        return redirect($confirmationUrl);

    }

    public function success(){
        return view('test2-success', [
            ]
        );
    }
    public function paymentSucceeded(){
        //payment.succeeded

        $source = file_get_contents('php://input');
        $requestBody = json_decode($source, true);
        Log::info($requestBody); // в логи

        try {
            $notification = ($requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED)
                ? new NotificationSucceeded($requestBody)
                : new NotificationWaitingForCapture($requestBody);
        } catch (\Exception $e) {
            // Обработка ошибок при неверных данных
        }


        return view('test3-paymentSucceeded', [
            'requestBody' => $requestBody,
            ]
        );
    }



}
