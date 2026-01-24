<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FleetShip extends Model
{
    protected $table = 'fleet_ships';
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'desc',
        'desc2',
        'params',
        'img',
        'img2',
        'gallery',
        'published',
        'sorting',
        'price',
        'sorting',
        'metatitle',
        'description',
        'keywords',
    ];


   protected $casts = [
       'params' => 'collection',
       'gallery' => 'collection',
   ];

    protected static function boot():void
    {
        parent::boot();

        static::deleted(function () {
            cache_clear();
        });

        # Выполняем действия после сохранения
        static::saved(function()
        {
            cache_clear();

        });

    }


}
