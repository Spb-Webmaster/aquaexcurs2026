<?php

namespace App\YooKassa;

use Illuminate\Http\RedirectResponse;
use Support\Traits\Makeable;
use YooKassa\Client;

class YooKassaPayment
{
    use Makeable;
    protected $shopId = '1263585';
    protected $apiKey = 'test_jA7wPSbj7qZQs96QLuvgLVDCkqDBZ2e94zWS33gfoSc';

    public function getRedirect($order) :string|bool
    {

        $series_number = $order['series'] .' '. $order['number'];
        $client = new Client();
        $client->setAuth($this->shopId, $this->apiKey);
        try {
            $idempotenceKey = uniqid('', true);
            $response = $client->createPayment(
                array(
                    'amount' => array(
                        'value' => trim($order['order']['total_price']),
                        'currency' => 'RUB',
                    ),
                    'confirmation' => array(
                        'type' => 'redirect',
                        'return_url' => route('payment_result'),
                    ),
                    'capture' => true,
                    'description' => 'Заказ' . $series_number,
                ),
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
}
