<?php

namespace App\View\Components\Menu;

use Closure;
use Domain\Menu\ViewModels\MenuViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderMenuComponent extends Component
{

    public array $menu_rendered;

    public function __construct()
    {

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
                $k = 0;
                foreach ($item->Excursion as $excursion) {


                    // Получаем доступ к полю pivot (custom_title)
                    $customTitle = $excursion->pivot->custom_title ?? '';
                    $customUrl = $excursion->pivot->custom_url ?? '';
                    $modelUrl = route('site_excursion', ['slug' => $excursion->slug]);

                    $menu[$i]['child'][$k]['link'] = !empty($customUrl) ? $customUrl : $modelUrl;
                    $menu[$i]['child'][$k]['text'] = !empty($customTitle) ? $customTitle : $excursion->title;
                    $menu[$i]['child'][$k]['class'] = false;
                    $menu[$i]['child'][$k]['class_li'] = false;
                    $menu[$i]['child'][$k]['data'] = false;
                    $k++;
                }

            }

            if($item->Page->count()) {
                /** Работаем с моделью страниц (материалы)  */

                $menu[$i]['parent'] = true;
                $k = ($k)??0;
                foreach ($item->Page as $excursion) {

                    // Получаем доступ к полю pivot (custom_title)
                    $customTitle = $excursion->pivot->custom_title ?? '';
                    $customUrl = $excursion->pivot->custom_url ?? '';
                    $modelUrl = route('page', ['slug' => $excursion->slug]);



                    $menu[$i]['child'][$k]['link'] = !empty($customUrl) ? $customUrl : $modelUrl;
                    $menu[$i]['child'][$k]['text'] = !empty($customTitle) ? $customTitle : $excursion->title;
                    $menu[$i]['child'][$k]['class'] = false;
                    $menu[$i]['child'][$k]['class_li'] = false;
                    $menu[$i]['child'][$k]['data'] = false;
                    $k++;
                }

            }

            if (isset($item->submenu) && count($item->submenu)>0) {
                $k = ($k)??0;
                foreach ($item->submenu as $submenu) {

                    $menu[$i]['parent'] = true;
                    $menu[$i]['child'][$k]['link'] = $submenu['custom_url'];
                    $menu[$i]['child'][$k]['text'] = $submenu['custom_title'];
                    $menu[$i]['child'][$k]['class'] = false;
                    $menu[$i]['child'][$k]['class_li'] = false;
                    $menu[$i]['child'][$k]['data'] = false;
                    $k++;
                }
            }

         //

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
