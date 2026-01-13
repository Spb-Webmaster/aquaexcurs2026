<?php

namespace App\Http\Controllers\SiteNew;

use App\Http\Controllers\Controller;
use App\Models\SiteNew;
use Domain\SiteNew\ViewModels\SiteNewViewModel;

class SiteNewController extends Controller
{

    public function items()
    {
        $items = SiteNewViewModel::make()->site_news();
        return view('pages.site_news.site_news', [
            'items' => $items
        ]);

    }
    public function item($slug)
    {
        $item = SiteNewViewModel::make()->site_new($slug);
        return view('pages.site_news.site_new', [
            'item' => $item
        ]);

    }

}
