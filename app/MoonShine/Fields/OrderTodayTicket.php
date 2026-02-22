<?php


namespace App\MoonShine\Fields;


use Domain\ExcursionOrder\ViewModels\ExcursionOrderViewModels;
use MoonShine\UI\Fields\Field;


class OrderTodayTicket extends Field
{


    protected string $view = 'moonshine.fields.order_today_ticket';

    protected function tickets()
    {
        $id = $this->getData()->getKey();
        return (is_null($id))?[]:ExcursionOrderViewModels::make()->quantityTicketsForToday($id);

    }
    protected function calculation()
    {

        $id = $this->getData()->getKey();
        return (is_null($id))?[]:ExcursionOrderViewModels::make()->quantityTicketsCalculation($id);

    }


    protected function viewData(): array
    {
        return [
            'tickets' => $this->tickets(),
            'calculation' => $this->calculation(),
        ];
    }


}
