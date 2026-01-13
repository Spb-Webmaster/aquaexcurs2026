<?php

namespace Domain\SiteNew\ViewModels;

use App\Models\SiteNew;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class SiteNewViewModel
{
    use Makeable;

    public function site_news(): Collection | null
    {
        return Cache::rememberForever('site_news', function () {

            return SiteNew::query()
                ->where('published', 1)
                ->orderBy('created_at', 'desc')
                ->get();
        });
    }


    public function site_new($slug): Model | null
    {
        return SiteNew::query()
            ->where('published', 1)
            ->where('slug', $slug)
            ->firstOrFail();
    }
}
