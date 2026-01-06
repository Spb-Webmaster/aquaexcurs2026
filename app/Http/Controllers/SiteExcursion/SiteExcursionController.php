<?php

namespace App\Http\Controllers\SiteExcursion;

use App\Http\Controllers\Controller;
use Domain\Excursion\ViewModels\ExcursionViewModel;

class SiteExcursionController extends Controller
{

    public function site_excursion($slug) {

        $item = ExcursionViewModel::make()->excursion($slug);
        if(!$item) {
            abort(404);
        }


        return view('pages.site_excursions.site_excursion', [
            'item' => $item
            ]);
    }

}
