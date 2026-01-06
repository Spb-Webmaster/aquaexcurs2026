<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{

    protected $table = 'excursions';

    protected $fillable = [
        'sku',
        'title',
        'slug',
        'subtitle',
        'short_desc',
        'desc',
        'desc2',
        'img',
        'gallery',
        'yandex_map',
        'route',
        'price',
        'price_desc',

        'price_pier',
        'price_advantage',
        'price_advantage_desc',
        'price_child',
        'price_child_desc',

        'place',
        'list_points',

        'pier',
        'departure_time',
        'departure_time_desc',
        'privilege',
        'count_ticket',

        'metatitle',
        'description',
        'keywords',
        'params',

        'price_hide',
        'time_route',

        'published',
        'sorting',
        'teaser',
        'dont_register',
        'dont_register_prefix_price',
        'dont_register_price',
        'dont_register_desc',
        'dont_register_button',
        'dont_register_form',
    ];


    protected $casts = [
        'params' => 'collection',
        'teaser' => 'collection',
        'gallery' => 'collection',
        'list_points' => 'collection',
        'route' => 'collection',
    ];

    public function getTeaserImgAttribute(): string
    {
        if ($this->img) {

            return asset(intervention('384x238', $this->img, 'excursion/intervention'));
        }

        return '';
    }

    public function getFullImgAttribute(): string
    {
        if ($this->img) {

            return asset(intervention('580x359', $this->img, 'excursion/intervention'));
        }

        return '';
    }

    public function getFancyImgAttribute(): string
    {
        if ($this->img) {

            return asset(intervention('1000x619', $this->img, 'excursion/intervention'));
        }

        return '';
    }

    public function get_gallery(): array
    {
        if (count($this->gallery)) {

            $img = [];
            foreach ($this->gallery as $k => $gallery) {
                $img[$k]['url'] = asset(intervention('1000x619', $gallery['json_gallery_text'], 'excursion/intervention'));
                $img[$k]['alt'] = $gallery['json_gallery_label'];
            }

            return $img;

        }

        return [];
    }


    //            $intervention =  asset(intervention('160x160', $avatar, 'users/' . $user->id . '/avatar/intervention'));


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
