<?php


namespace App\MoonShine\Fields;

use MoonShine\UI\Fields\Field;


class OrderTodayTicket extends Field
{


    protected string $view = 'moonshine.fields.order_today_ticket';

    protected function count_tickets()
    {

        $tickets = 99;
        return $tickets;

    }


    protected function viewData(): array
    {
        return [
            'count_tickets' => $this->count_tickets(),
        ];
    }


}
