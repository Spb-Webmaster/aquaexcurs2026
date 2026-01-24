<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FleetSpeedboat extends Model
{
    protected $table = 'fleet_speedboats';
    protected $fillable = [
        'title',
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
