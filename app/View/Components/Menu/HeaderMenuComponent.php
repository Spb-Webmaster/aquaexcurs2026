<?php

namespace App\View\Components\Menu;

use Closure;
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

        $i = 0;

        /**  Аренда **/

        $menu[$i]['text'] = 'Аренда';
        $menu[$i]['link'] = '#';
        $menu[$i]['class'] = false;
        $menu[$i]['class_li'] = false;
        $menu[$i]['data'] = false;
        $menu[$i]['parent'] = true;


        $menu[$i]['child'][0]['link'] = '#';
        $menu[$i]['child'][0]['text'] = 'Аренда катера';
        $menu[$i]['child'][0]['class'] = false;
        $menu[$i]['child'][0]['class_li'] = false;
        $menu[$i]['child'][0]['data'] = false;

        $menu[$i]['child'][1]['link'] = '#';
        $menu[$i]['child'][1]['text'] = 'Аренда теплохода';
        $menu[$i]['child'][1]['class'] = false;
        $menu[$i]['child'][1]['class_li'] = false;
        $menu[$i]['child'][1]['data'] = false;

        $i++;


        /**  ///Аренда **/
        /**  Пассажирам **/
        $menu[$i]['text'] = 'Пассажирам';
        $menu[$i]['link'] = '#';
        $menu[$i]['class'] = false;
        $menu[$i]['class_li'] = false;
        $menu[$i]['data'] = false;
        $menu[$i]['parent'] = true;


        $menu[$i]['child'][0]['link'] = '#';
        $menu[$i]['child'][0]['text'] = 'Оплата и возврат билетов';
        $menu[$i]['child'][0]['class'] = false;
        $menu[$i]['child'][0]['class_li'] = false;
        $menu[$i]['child'][0]['data'] = false;


        $menu[$i]['child'][1]['link'] = '#';
        $menu[$i]['child'][1]['text'] = 'Часто задаваемые вопросы';
        $menu[$i]['child'][1]['class'] = false;
        $menu[$i]['child'][1]['class_li'] = false;
        $menu[$i]['child'][1]['data'] = false;
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
        return view('components.menu.menu-header-component');
    }
}
