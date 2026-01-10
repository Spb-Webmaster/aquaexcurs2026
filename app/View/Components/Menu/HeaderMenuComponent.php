<?php

namespace App\View\Components\Menu;

use Closure;
use Domain\Menu\ViewModels\MenuViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderMenuComponent extends Component
{

    public string $menu;
    public $menu_rendered;

    public function __construct($menu = 1)
    {
        $this->menu = $menu;

        $this->menu_rendered = $this->setMenu();


    }


    public function setMenu():array
    {

        $Menu_items = MenuViewModel::make()->MenuItems();
        $menu = [];
        foreach ($Menu_items as $i => $item) {


            $menu[$i]['text'] = $item->title;
            $menu[$i]['link'] = ($item->url)?:'#';
            $menu[$i]['class'] = false;
            $menu[$i]['data'] = false;
            $menu[$i]['class_li'] = false;
            $menu[$i]['parent'] = false;


            if($item->Excursion->count()) {
                /** Работаем с моделью экскурсии */

                $menu[$i]['parent'] = true;

                foreach ($item->Excursion as $k => $excursion) {

                    // Получаем доступ к полю pivot (custom_title)
                    $customTitle = $excursion->pivot->custom_title ?? '';
                    $customUrl = $excursion->pivot->custom_url ?? '';
                    $modelUrl = route('site_excursion', ['slug' => $excursion->slug]);

                    $menu[$i]['child'][$k]['link'] = !empty($customUrl) ? $customUrl : $modelUrl;
                    $menu[$i]['child'][$k]['text'] = !empty($customTitle) ? $customTitle : $excursion->title;
                    $menu[$i]['child'][$k]['class'] = false;
                    $menu[$i]['child'][$k]['class_li'] = false;
                    $menu[$i]['child'][$k]['data'] = false;
                }

            }

            if($item->Page->count()) {
                /** Работаем с моделью страниц (материалы)  */

                $menu[$i]['parent'] = true;

                foreach ($item->Page as $k => $excursion) {

                    // Получаем доступ к полю pivot (custom_title)
                    $customTitle = $excursion->pivot->custom_title ?? '';
                    $customUrl = $excursion->pivot->custom_url ?? '';
                    $modelUrl = route('page', ['slug' => $excursion->slug]);

                    $menu[$i]['child'][$k]['link'] = !empty($customUrl) ? $customUrl : $modelUrl;
                    $menu[$i]['child'][$k]['text'] = !empty($customTitle) ? $customTitle : $excursion->title;
                    $menu[$i]['child'][$k]['class'] = false;
                    $menu[$i]['child'][$k]['class_li'] = false;
                    $menu[$i]['child'][$k]['data'] = false;
                }

            }

      }

        return $menu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu.menu-header-component');
    }
}
