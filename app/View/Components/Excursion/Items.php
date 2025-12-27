<?php

namespace App\View\Components\Excursion;

use Closure;
use Domain\Excursion\ViewModels\ExcursionViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Items extends Component
{
    public object $items;


    public function __construct()
    {
        $this->items = ExcursionViewModel::make()->excursions();

    }


    public function render(): View|Closure|string
    {

        return view('components.excursion.items');
    }
}
