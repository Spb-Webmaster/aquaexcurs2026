<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteNew extends Model
{
    protected $table = 'site_news';
    protected $guarded = [];

    protected $casts = [
        'gallery' => 'collection',
        'faq' => 'collection',
    ];

    public function getTeaserImgAttribute(): string
    {
        if ($this->img) {

            return asset(intervention('384x238', $this->img, 'images/news'));
        }

        return '';
    }

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
