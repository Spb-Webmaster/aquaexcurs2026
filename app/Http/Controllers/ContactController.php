<?php

namespace App\Http\Controllers;

use Domain\Contact\ViewModels\ContactViewModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        $contacts = ContactViewModel::make()->listContacts();
        $coordinates = ContactViewModel::make()->activeCityCoordinates();



        return view('pages.contacts',
            [
                'contacts' => $contacts,
                'coordinates' => ($coordinates)??'',
            ]);
    }
}
