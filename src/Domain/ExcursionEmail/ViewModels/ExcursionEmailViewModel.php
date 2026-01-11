<?php

namespace Domain\ExcursionEmail\ViewModels;

use App\Models\ExcursionEmail;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\EmailAddressCollector;
use Support\Traits\Makeable;

class ExcursionEmailViewModel
{
use Makeable;
    use EmailAddressCollector;

    public function save($validate):Model | null
    {
        return ExcursionEmail::query()->create($validate);
    }
}
