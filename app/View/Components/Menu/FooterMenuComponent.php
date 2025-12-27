<?php

namespace App\View\Components\Menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterMenuComponent extends Component
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

        $i = 0;

        /**  Аренда катера**/

        $menu[$i]['text'] = 'Аренда катера';
        $menu[$i]['link'] = '#';
        $menu[$i]['class'] = false;
        $menu[$i]['class_li'] = false;
        $menu[$i]['data'] = false;
        $menu[$i]['parent'] = false;
        $i++;

        /**  ///Аренда катера **/

        /**  Аренда теплохода **/
        $menu[$i]['text'] = 'Аренда теплохода';
        $menu[$i]['link'] = '#';
        $menu[$i]['class'] = false;
        $menu[$i]['class_li'] = false;
        $menu[$i]['data'] = false;
        $menu[$i]['parent'] = false;
        $i++;
        /**  ///Аренда теплохода **/

        /**  Пассажирам **/
        $menu[$i]['text'] = 'Пассажирам';
        $menu[$i]['link'] = '#';
        $menu[$i]['class'] = false;
        $menu[$i]['class_li'] = false;
        $menu[$i]['data'] = false;
        $menu[$i]['parent'] = false;
            $i++;


        /**  ///Пассажирам **/
        /**  Причалы **/

        $menu[$i]['text'] = 'Причалы';
        $menu[$i]['link'] = '#';
        $menu[$i]['class'] = '';
        $menu[$i]['class_li'] = false;
        $menu[$i]['data'] = false;
        $menu[$i]['parent'] = false;
        $i++;

        /**  ///Причалы **/
        /**  О компании **/

        $menu[$i]['text'] = 'О компании';
        $menu[$i]['link'] = '#';
        $menu[$i]['class'] = '';
        $menu[$i]['class_li'] = false;
        $menu[$i]['data'] = false;
        $menu[$i]['parent'] = false;
        $i++;

        /**  ///О компании **/
        /**  Контакты **/

        $menu[$i]['text'] = 'Контакты';
        $menu[$i]['link'] = '#';
        $menu[$i]['class'] = '';
        $menu[$i]['class_li'] = false;
        $menu[$i]['data'] = false;
        $menu[$i]['parent'] = false;
        $i++;

        /**  ///Контакты **/


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
