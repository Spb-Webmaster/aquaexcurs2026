<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OneColumnComponent extends Component
{
     public array  $home = [];
    public function __construct($route = null)
    {
        if(!is_null($route) and $route == 'home') {

            $this->home['title'] = (config2('moonshine.home.title'))??'';
            $this->home['subtitle'] = (config2('moonshine.home.subtitle'))??'';
            $this->home['desc'] = (config2('moonshine.home.desc'))??'';

        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.one-column-component');
    }
}
