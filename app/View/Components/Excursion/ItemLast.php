<?php

namespace App\View\Components\Excursion;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemLast extends Component
{
    /**
     * Create a new component instance.
     */
    public object $item;
    public function __construct(object $item)
    {
        $this->item = $item;

    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.excursion.item-last');
    }
}
