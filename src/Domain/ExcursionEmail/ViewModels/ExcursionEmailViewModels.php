<?php

namespace Domain\ExcursionEmail\ViewModels;

use App\Models\ExcursionEmail;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\EmailAddressCollector;
use Support\Traits\Makeable;

class ExcursionEmailViewModels
{
use Makeable;
    use EmailAddressCollector;

    public function save($request):Model | null
    {
        return ExcursionEmail::query()->create(
            [
                'params' => $request->all(),
                'email' => (count($this->emails()))? implode(", ", $this->emails()) : 'Ошибка!!! Не найти email для отправки'
            ]
        );

    }
}
