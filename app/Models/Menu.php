<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = [
        'title',
        'published',
        'sorting',
        'submenu',
        'url'
        ];

    protected $casts = [
        'submenu' => 'collection',
    ];

    public function Excursion(): BelongsToMany
    {
        return $this->belongsToMany(Excursion::class)->where('published', 1)->orderBy('sorting', 'desc')
            ->withPivot(['custom_title', 'custom_url']);

    }
    public function Page(): BelongsToMany
    {
        return $this->belongsToMany(Page::class)
            ->where('published', 1)->orderBy('sorting', 'desc')
            ->withPivot(['custom_title', 'custom_url']);

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
