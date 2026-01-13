<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeaserComponent extends Component
{

    public object $items;
    public function __construct($items)
    {
        $this->items = (isset($items)) ? $items : [];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.teaser-component');
    }
}
