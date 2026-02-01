<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FleetSchoolboy extends Model
{
    protected $table = 'fleet_schoolboys';
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
