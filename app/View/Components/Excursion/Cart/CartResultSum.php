<?php

namespace App\View\Components\Excursion\Cart;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CartResultSum extends Component
{
    public   int $id;
    public   string | null $excursion = '';

    public function __construct(int  $id,  string $excursion = '')
    {
        // Присваиваем переданные значения соответствующим полям
        $this->id = $id;
        $this->excursion  = $excursion;


    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.excursion.cart.cart-result-sum');
    }
}
