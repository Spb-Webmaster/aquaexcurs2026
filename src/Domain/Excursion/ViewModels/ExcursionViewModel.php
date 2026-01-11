<?php

namespace Domain\Excursion\ViewModels;


use App\Models\Excursion;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ExcursionViewModel
{
    use Makeable;

    public function excursions():Collection  | null
    {
       return Cache::rememberForever('excursions', function ()  {

           return Excursion::query()
                ->where('published', 1)
                ->orderBy('sorting', 'desc')
                ->get();
        });

    }

    public function excursion($slug = null):Model  | null
    {

        $q =  Excursion::query();

        if($slug) {
            $q->where('slug', $slug);
        }

        $q->where('published', 1);

        return $q->first();

    }





}
