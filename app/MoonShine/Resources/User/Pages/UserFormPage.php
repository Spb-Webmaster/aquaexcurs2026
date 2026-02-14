<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\User\Pages;

use Illuminate\Validation\Rule;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\User\UserResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Password;
use MoonShine\UI\Fields\PasswordRepeat;
use MoonShine\UI\Fields\Text;
use Throwable;


/**
 * @extends FormPage<UserResource>
 */
class UserFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make(),
            Grid::make([
                Column::make([
                    Collapse::make('Личный данные', [
                        Image::make(__('Аватар'), 'avatar'),
                        Text::make(__('Имя'), 'name'),
                        Text::make(__('ФИО'), 'username'),
                        Text::make(__('Email'), 'email'),
                        Text::make(__('Телефон (ТОЛЬКО цифры)'), 'phone'),
                    ]),
                ])->columnSpan(6),
                Column::make([
                    Collapse::make('Пароль', [
                        Password::make(__('moonshine::ui.resource.password'), 'password')
                            ->customAttributes(['autocomplete' => 'new-password'])
                            ->eye(),

                        PasswordRepeat::make(__('moonshine::ui.resource.repeat_password'), 'password_repeat')
                            ->customAttributes(['autocomplete' => 'confirm-password'])
                            ->eye(),
                    ]),
                ])->columnSpan(6),
            ]),


        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function formButtons(): ListOf
    {
        return parent::formButtons();
    }

    protected function rules(mixed $item): array
    {

        return [
            'username' => 'max:90',
            'email' => [
                'sometimes',
                'bail',
                'required',
                'email',
                Rule::unique('users')->ignore($item->email, 'email'),
            ],
            'password' => $item->exists
                ? 'sometimes|nullable|min:5|required_with:password_repeat|same:password_repeat'
                : 'required|min:5|required_with:password_repeat|same:password_repeat',
        ];
    }

    /**
     * @param FormBuilder $component
     *
     * @return FormBuilder
     */
    protected function modifyFormComponent(FormBuilderContract $component): FormBuilderContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
