<?php

namespace Domain\CurrentInformation\ViewModels;

use App\Models\CurrentInformation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class CurrentInformationViewModel
{
    use Makeable;

    public function save($request):bool
    {
        //id = 1 - всегда только 1 (одна) запись
        return CurrentInformation::query()->find(1)->update([
            'text' => $request['info'],
        ]);
    }
    public function show():?array
    {
        return Cache::rememberForever('custom_information', function () {

            //id = 1 - всегда только 1 (одна) запись
            return CurrentInformation::query()->find(1)->toArray();
        });
    }
}


