<?php

namespace Support\PDF;

use App\PDF\PdfService;
use Carbon\Carbon;
use Support\Traits\Makeable;

class ReplaceText
{

    use Makeable;

    public function replaceText($data)
    {

        $originalPdfPath = storage_path('app/public/orders/pdf/templates/input.pdf'); // Исходный PDF
        $modifiedPdfPath = storage_path('app/public/orders/pdf/files/output.pdf'); // Результирующий PDF

        $human_quantity = (isset($data['order']['items'][0])) ? $data['order']['items'][0]['count'] : '—'; // Получаем первый элемент массива (взрослый)
        $child_quantity = (isset($data['order']['items'][1])) ? $data['order']['items'][1]['count'] : '—'; // Получаем первый элемент массива (детский)

        $items = $data['order']['items'];
        /** Создаем экземпляр Carbon с актуальной датой и временем **/
        $carbonDateTime = Carbon::now();

        /** Форматируем дату и время в нужном формате **/
        $formatedDateTime = $carbonDateTime->format('d.m.Y H:i');

        //  Массив заменяемых выражений
        $replacements = [
            ['text' => $human_quantity, // Количество взрослых билетов
                'x' => 173,
                'y' => 56,
                'fontSize' => 9
            ],
            ['text' => $child_quantity, // Количество детских билетов
                'x' => 173,
                'y' => 61.5,
                'fontSize' => 9
            ],
            ['text' => $data['order']['id'], // Номер заказа
                'x' => 111,
                'y' => 77,
                'color' => [0, 48, 107]
            ],

            ['text' => $data['username'], // Имя покупателя
                'x' => 40,
                'y' => 94,
                'fontSize' => 8
            ],

            ['text' => $data['order']['title'], // Название экскурсии
                'x' => 120,
                'y' => 94,
                'fontSize' => 8
            ],

            ['text' => $data['order']['id'], // Номер заказа
                'x' => 46,
                'y' => 103.5,
                'fontSize' => 8

            ],
            ['text' => $formatedDateTime, // Дата и время заказа
                'x' => 126,
                'y' => 103.5,
                'fontSize' => 8

            ],

            ['text' => $data['order']['total_price']. 'Руб.', // Сумма заказа
                'x' => 50,
                'y' => 113,
                'fontSize' => 8
            ],
            ['text' => rusdate3($data['excursion_date']), // Дата экскурсии
                'x' => 133,
                'y' => 113,
                'fontSize' => 8
            ],

        ];


        // Выполняем замену текста
        PdfService::replaceTextInPdf(
            $originalPdfPath,
            $replacements,
            $modifiedPdfPath
        );

        return true;

    }
}
