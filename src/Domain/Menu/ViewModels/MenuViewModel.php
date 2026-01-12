<?php

namespace Domain\Menu\ViewModels;

use App\Models\Menu;
use App\Models\MenuBottom;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class MenuViewModel
{
    use Makeable;

    public function MenuItems():Collection | null
    {

        return Cache::rememberForever('menu', function () {

           return Menu::query()
                ->where('published', 1)
               ->with(['Excursion','Page'])
                ->orderBy('sorting', 'desc')
                ->get();
        });

    }
    public function MenuBottomItems():Collection | null
    {

        return Cache::rememberForever('menu_bottom', function () {

           return MenuBottom::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->get();
        });

    }
}
