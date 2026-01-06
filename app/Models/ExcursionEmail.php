<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExcursionEmail extends Model
{
    protected $table = 'excursion_emails';
    protected $fillable = [
        'username',
        'phone',
        'params',
        'excursion_id'
    ];
    protected $casts = [
        'params' => 'collection'
    ];

    public function Excursion(): BelongsTo
    {
        return $this->belongsTo(Excursion::class, 'excursion_id');

    }


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
