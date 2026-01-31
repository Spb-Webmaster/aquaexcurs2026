<?php

namespace App\Send1C;

use Support\Traits\Makeable;

class OrderProcessing
{
    use Makeable;


    /**
     * @return array
     * Процесс отправки данных на сервер 1С
     */
    public function sendingProcess($order): array // процессОтправки
    {

        $men = [];
        $child = [];
        foreach ($order['order']['items'] as $item) {

            if ($item['human_id'] == 1) { /* Это взрослый билет */

                $men = [
                    'quantity' => $item['count'], // количество билетов
                    'price' => $item['price'], // цена взрослого одного билета
                    'total_price' => $item['total_price'], // общая взрослая сумма
                    'category' => '18adf7be-eda7-11ee-82d1-2cfda1e0f18b', // это код из 1С для взрослых

                ];

            }

            if ($item['human_id'] == 2) { /* Это детский билет */

                $child = [
                    'quantity' => $item['count'], // количество билетов
                    'price' => $item['price'], // цена детского одного билета
                    'total_price' => $item['total_price'], // общая детская сумма
                    'category' => 'fc5768e7-a541-11e4-ab3d-000c29399726', // это код из 1С для детей

                ];

            }

        }

        $route = trim($order['order']['sku']); // получаем данные об экскурсии - номер для 1С // название экскурсии

        $order_date = date("d.m.Y", strtotime($order['excursion_date'])); // дата
        $order_fio = $order['username']; // fio
        $now_date = date("d.m.Y");

        $username = "Администратор";
        $password = "";

        if (count($child)) {
            $request = array(
                'result' => true,
                'action' => "sendticketrequest",
                'data' => array(
                    'Code' => $order['number'], ///////////////////////////////////
                    'Contragent' => 'АКВА-ЭКСКУРС САЙТ',
                    'Date' => $now_date,
                    'FIO' => $order_fio,
                    'PlanDate' => $order_date,
                    'Paid' => true,
                    'Composition' => array(
                        array(
                            "Route" => $route,
                            "Category" => $men['category'],
                            "Number" => $men['quantity'],
                            "Price" => $men['price'],
                            "Sum" => $men['total_price']
                        ),
                        array(
                            "Route" => $route,
                            "Category" => $child['category'],
                            "Number" => $child['quantity'],
                            "Price" => $child['price'],
                            "Sum" => $child['total_price']
                        )
                    )
                )
            );

            $mm = 'взрослый и детский';

        } else {

            $request = array(
                'result' => true,
                'action' => "sendticketrequest",
                'data' => array(
                    'Code' => $order['number'],
                    'Contragent' => 'АКВА-ЭКСКУРС САЙТ',
                    'Date' => $now_date,
                    'FIO' => $order_fio,
                    'PlanDate' => $order_date,
                    'Paid' => true,
                    'Composition' => array(
                        array(
                            "Route" => $route,
                            "Category" => $men['category'],
                            "Number" => $men['quantity'],
                            "Price" => $men['price'],
                            "Sum" => $men['total_price']
                        )
                    )
                )
            );

            $mm = 'только взрослый';
        }


        // авторизация
        $curl = curl_init('http://89.104.109.202/Aqua-main/hs/ex?appid=Aqua&action=sendticketrequest');
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($request));
        //  запрос

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = [
            'curl' => curl_exec($curl),
            'http_code' => curl_getinfo($curl, CURLINFO_HTTP_CODE)
        ];

        curl_close($curl);
        return $result;


    }


}
