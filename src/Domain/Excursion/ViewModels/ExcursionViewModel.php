<?php

namespace Domain\Excursion\ViewModels;


use App\Models\Excursion;
use Support\Traits\Makeable;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ExcursionViewModel
{
    use Makeable;

    public function excursions($limit = null):Collection | array | null
    {

        $limit = ($limit)??100;
        $q =  Excursion::query();
        $q->where('published', 1)
            ->orderBy('sorting', 'desc')
            ->limit($limit);
        $items = $q->get();


        if($items) {
            return $items;
        }
        return [];

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
