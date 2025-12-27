<?php

namespace App\View\Components\Excursion\Cart;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddSum extends Component
{
    public   int $id;
    public   float $price = 0;
    public   string | null $desc = '';
    public   string | null $human = '';
    public   string $key;

    public function __construct(int  $id, float $price,  $desc = '', string $human = '', $key)
    {
        // Присваиваем переданные значения соответствующим полям
        $this->id = $id;
        $this->price = $price;
        $this->desc  = $desc;
        $this->human  = $human;
        $this->key  = $key;


    }


    public function render(): View|Closure|string
    {
        return view('components.excursion.cart.add-sum', [

        ]);
    }
}
