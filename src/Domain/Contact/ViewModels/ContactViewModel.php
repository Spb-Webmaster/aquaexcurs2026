<?php

namespace Domain\Contact\ViewModels;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Support\Traits\Makeable;

class ContactViewModel
{
    use Makeable;

    public function listContacts(): array|null
    {

        $list_contacts = Cache::rememberForever('list_contacts', function () {

            return config2_array('moonshine.contact');

        });

        return $list_contacts;

    }




}
