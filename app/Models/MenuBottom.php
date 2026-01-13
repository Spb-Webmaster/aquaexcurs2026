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
