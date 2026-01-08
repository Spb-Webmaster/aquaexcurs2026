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

        return ExcursionEmail::query()->create(
            [
                'username' => $validate['username'],
                'phone' => $validate['phone'],
                'email' => $validate['email'],
                'quantity' => $validate['quantity'],
                'excursion_date' => $validate['excursion_date'],
                'excursion_id' => $validate['excursion_id'],
                'emails' => (count($this->emails()))? implode(", ", $this->emails()) : 'Ошибка!!! Не найти email для отправки'
            ]
        );

    }
}
