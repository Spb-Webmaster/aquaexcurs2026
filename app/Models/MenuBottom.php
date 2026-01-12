<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuBottom extends Model
{

    protected $table = 'menu_bottoms';
    protected $fillable = [
        'title',
        'published',
        'sorting',
        'submenu',
        'url'
    ];
    protected static function boot(): void
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
