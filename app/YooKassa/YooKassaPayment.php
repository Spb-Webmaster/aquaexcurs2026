<?php

namespace App\YooKassa;

use Illuminate\Http\RedirectResponse;
use Support\Traits\Makeable;
use YooKassa\Client;

class YooKassaPayment
{
    use Makeable;
    protected $shopId = '1282712';
    protected $apiKey = 'test_tTs8kil8G_rrbUuDqfRY_ug5QMIVARPI6nYIzqkNUJw';

    public function getRedirect($order) :string|bool
    {

        $series_number = $order['series'] .' '. $order['number'];
        $client = new Client();
        $client->setAuth($this->shopId, $this->apiKey);

        try {
            $idempotenceKey = uniqid('', true);
            $response = $client->createPayment(
                [
                    'amount' => [
                        'value' => trim($order['order']['total_price']),
                        'currency' => 'RUB',
                    ],
                    'confirmation' => [
                        'type' => 'redirect',
                        'locale' => 'ru_RU',
                        'return_url' => route('payment_result'),
                    ],
                    'capture' => true,
                    'description' => "Заказ {$series_number}",
                    'metadata' => [
                        'orderNumber' => $series_number,
                        'orderId' => $order['id'],
                    ],
                    'receipt' => [
                        'customer' => [
                            'full_name' => ($order['username'])?? '',
                            'email' => ($order['email'])??'',
                            'phone' => ($order['phone'])??'',
                        ],

                    ],
                ],
                $idempotenceKey
            );

            //получаем confirmationUrl для дальнейшего редиректа
            $confirmationUrl = $response->getConfirmation()->getConfirmationUrl();

            if (!empty($confirmationUrl)) { // проверяем существование confirmationUrl
                return $confirmationUrl; // выполняем редирект сразу же после успешного получения подтверждения
            }

        } catch (\Exception $e) {
            logErrors($e); // сохраняем ошибку в лог

        }

          return false;


    }

    public function getInfo(string $paymentId):object|null {
        $client = new Client();
        $client->setAuth($this->shopId, $this->apiKey);
      //  $paymentId = '215d8da0-000f-50be-b000-0003308c89be';
        return $client->getPaymentInfo($paymentId);
    }
}
