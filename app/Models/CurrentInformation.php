<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrentInformation extends Model
{
    protected $table = 'current_informations';
    protected $guarded = [];

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
