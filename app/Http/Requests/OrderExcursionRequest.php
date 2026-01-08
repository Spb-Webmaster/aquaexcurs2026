<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class OrderExcursionRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation():void
    {
        $this->merge([
            'email' => str(request('email'))
                ->squish()
                ->lower()
                ->value(),
            'phone' => phone($this->input('phone')),
            'excursion_date' => ($this->input('excursion_date')) ? Carbon::createFromFormat('d.m.Y', $this->input('excursion_date'))->format('Y-m-d') : null,
        ]);
    }

    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'min:2', 'max:100'], // Новые ключи
            'phone' => ['required', 'string', 'min:6', 'max:100'],
            'email' => ['string', 'email', 'max:100', 'nullable'],
            'excursion_id' => ['required'],
            'quantity' => ['required', 'min:1', 'max:50'],
            'excursion_date' => ['date', 'nullable'],
        ];
    }



    /**
     * Метод для замены стандартных сообщений об ошибках
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'username.required' => 'Необходимо ввести ФИО.',
            'username.min' => 'Мин. длина ФИО :min символов.',
            'username.max' => 'Макс. длина ФИО :max символов.',
            'phone.required' => 'Необходим номер телефона.',
            'phone.min' => 'Мин. длина  - :min',
            'phone.max' => 'Макс. длина номера  - :max',
            'email.max' => 'Длина email -  :max',
            'quantity.min' => 'Мин. количество - :min',
            'quantity.max' => 'Макс. количество -  :max',
        ];
    }
}
