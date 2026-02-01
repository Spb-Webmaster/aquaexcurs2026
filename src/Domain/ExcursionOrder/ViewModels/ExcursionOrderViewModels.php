<?php

namespace Domain\ExcursionOrder\ViewModels;

use App\Models\Excursion;
use App\Models\ExcursionNextTicketNumber;
use App\Models\ExcursionOrder;
use Domain\Excursion\ViewModels\ExcursionViewModel;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\Makeable;

class ExcursionOrderViewModels
{
    use Makeable;

    public function setSession($request): bool
    {

        $exc = ExcursionViewModel::make()->excursionId($request['id'])->toArray();


        if (is_null($exc)) {
            return false;
        }
        $human = [];
        $totalPrice = 0; // Сумма стоимости
        $totalCount = 0; // Количество пассажиров

        /** Перебираем массив с данными **/
        if (isset($request['items'])) {

            foreach ($request['items'] as $k => $value) {

                $key = match ($value['key']) {
                    '1' => 'Взрослый',
                    '2' => 'Детский',
                    '3' => 'Льготный',
                };

                $price = match ($value['key']) {
                    '1' => ($exc['price']) ?: 0,
                    '2' => ($exc['price_child']) ?: 0,
                    '3' => ($exc['price_advantage']) ?: 0,
                };

                $human[$k]['human'] = $key;
                $human[$k]['human_id'] = $value['key'];
                $human[$k]['count'] = $value['count'];
                $human[$k]['price'] = $price;
                $human[$k]['total_price'] = ceil($price*$value['count']);
            }

           foreach ($human as $item) {
                $totalPrice += $item['price'] * $item['count'];
                $totalCount += $item['count'];
            }

        }

        // Данные, request
        $data = [
            'id' => $request['id'],
            'title' => $exc['title'],
            'series' => $exc['series'],
            'slug' => $exc['slug'],
            'sku' => $exc['sku'],
            'price' => $exc['price'],
            'total_count' => $totalCount,
            'total_price' => $totalPrice,
            'items' => $human,
        ];


        /**config('site.constants.tour_data')  - название сессии **/
        /** Сохраняем данные в сессии **/
         session()->put(config('site.constants.tour_data'), $data);
         return session()->has(config('site.constants.tour_data'));



    }

    public function getSession($key):mixed
    {
        return session()->get($key);

    }


    public function saveOrder($request):model |null
    {

        try {
            /** запись в бд session и request */
            $session = $this->getSession(config('site.constants.tour_data'));
            $array = $request->only(['username', 'phone', 'email', 'excursion_date']);
            $array['excursion_id'] = $session['id'];
            $array['price'] = $session['total_price'];
            $array['order'] = $session;
            $array['series'] = $session['series'];
            $array['status'] = 0;
            $array['quantity'] =  $session['total_count'];
            // Генерируем номер (предварительно увеличенный в creating)
            $nextNumber = ExcursionNextTicketNumber::first()->next_value ?? '';
            $array['number'] = str_pad((string)$nextNumber, 5, '0', STR_PAD_LEFT);
            // Создаем объект ticket
          //   $array['ticket'] = ['series' => $session['series'], 'number' =>  $array['number']];
            return ExcursionOrder::create($array);

        } catch (\Throwable $th) {

            // Обрабатываем исключение
            logErrors($th);
            return null;

        }



    }

}
