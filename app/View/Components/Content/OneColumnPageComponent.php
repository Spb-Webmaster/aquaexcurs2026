<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OneColumnPageComponent extends Component
{
     public object  $item;
    public function __construct($content)
    {
        $this->item = $content;


    }

    public function render(): View|Closure|string
    {
        return view('components.content.one-column-page-component');
    }
}
