<?php

namespace App\View\Components\Menu;

use Closure;
use Domain\Menu\ViewModels\MenuViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterMenuComponent extends Component
{
    public array $menu_rendered;

    public function __construct()
    {

        $this->menu_rendered = $this->setMenu();


    }


    public function setMenu():array
    {

        $Menu_items = MenuViewModel::make()->MenuBottomItems();
        $menu = [];

        foreach ($Menu_items as $i => $item) {

            $menu[$i]['text'] = $item->title;
            $menu[$i]['link'] = ($item->url)?:'#';
            $menu[$i]['class'] = false;
            $menu[$i]['data'] = false;
            $menu[$i]['class_li'] = false;
            $menu[$i]['parent'] = false;

        }


        return $menu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu.menu-footer-component');
    }
}
