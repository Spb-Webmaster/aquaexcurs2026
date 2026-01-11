<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Support\Traits\EmailAddressCollector;

class ExcursionEmail extends Model
{
    use EmailAddressCollector;

    protected $table = 'excursion_emails';
    protected $fillable = [
        'username',
        'phone',
        'params',
        'excursion_id',
        'email',
        'emails',
        'quantity',
        'excursion_date'
    ];
    protected $casts = [
        'params' => 'collection'
    ];

    public function Excursion(): BelongsTo
    {
        return $this->belongsTo(Excursion::class, 'excursion_id');

    }
    /** Мутация атрибута для сохранения email-ов на которые была отправка **/
    public function setEmailsAttribute(): void
    {
       $this->attributes['emails'] = (count($this->emails()))? implode(", ", $this->emails()) : 'Ошибка!!! Не найти email для отправки';
       // logger()->info('Setting emails attribute:', ['emails' => $this->attributes['emails']]);

    }
    /** Мутация атрибута для изменения формата даты **/
    public function setExcursionDateAttribute($value): void
    {
        if (!empty($value)) {
            $this->attributes['excursion_date'] = Carbon::parse($value)->format('Y-m-d');


        }
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
