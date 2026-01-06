<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExcursionOrder extends Model
{
    protected $table = 'excursion_orders';
    protected $fillable = [
        'username',
        'email',
        'phone',
        'price',
        'order',
        'excursion_id'
    ];
    protected $casts = [
        'order' => 'collection'
    ];

    protected static function boot()
    {
        parent::boot();

        # Проверка данных  перед сохранением
        #  static::saving(function ($Moonshine) {   });


        static::created(function () {
            cache_clear();
        });

        static::updated(function () {
            cache_clear();
        });

        static::deleted(function () {
            cache_clear();
        });


    }
}
