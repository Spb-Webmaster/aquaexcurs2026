<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use TicketCast;

class ExcursionOrder extends Model
{
    protected $table = 'excursion_orders';
    protected $fillable = [
        'username',
        'email',
        'phone',
        'price',
        'order',
        'excursion_id',
        'excursion_date',
        'status',
        'number',
        'series',
        'ticket'
    ];
    protected $casts = [
        'order' => 'collection',
        'ticket' => TicketCast::class,
    ];

    /** Мутация атрибута для изменения формата даты **/
    public function setExcursionDateAttribute($value): void
    {
        if (!empty($value)) {
            $this->attributes['excursion_date'] = Carbon::parse($value)->format('Y-m-d');
        }
    }

    public function getTitleAttribute(): string
    {
        $exc = Excursion::find($this->excursion_id);
        if (!is_null($exc)) {
            return $exc->title;
        }
        return '';
    }

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {

            // Сначала увеличиваем значение
            ExcursionNextTicketNumber::first()->increment('next_value');
            // Потом достаем последнее значение из таблицы
            $nextNumber = ExcursionNextTicketNumber::first()->next_value;
            // Применяем форматирование с ведущими нулями
            $model->number = str_pad((string)$nextNumber, 5, '0', STR_PAD_LEFT);
        });

        static::deleted(function () {
            cache_clear();
        });

        # Выполняем действия после сохранения
        static::saved(function () {
            cache_clear();

        });


    }
}
