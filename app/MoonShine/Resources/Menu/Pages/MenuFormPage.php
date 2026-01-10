<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Menu\Pages;

use App\MoonShine\Resources\Excursion\ExcursionResource;
use App\MoonShine\Resources\Page\PageResource;
use Illuminate\Contracts\Database\Eloquent\Builder;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Menu\MenuResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Field;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;
use Throwable;


/**
 * @extends FormPage<MenuResource>
 */
class MenuFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [

            Box::make([
                ID::make(),
                Divider::make('Пункт меню'),
                Grid::make([
                    Column::make([

                        Collapse::make('Данные пользователя', [
                            Text::make('Наименование', 'title')->required(),
                            Text::make('Url адрес', 'url')->locked(),

                        ]),



                    ])->columnSpan(6),
                    Column::make([
                        Collapse::make('Дополнительно', [

                            Number::make('Сортировка','sorting')->buttons()->default(999),
                            Switcher::make('Публикация', 'published')->default(1),

                            Collapse::make('Выпадающие меню', [


                                BelongsToMany::make('Экскурсии', 'Excursion', 'title', resource: ExcursionResource::class)
                                    ->valuesQuery(fn(Builder $query, Field $field) => $query->orderBy('sorting', 'DESC'))
                                    ->fields([
                                        Text::make('Наименование', 'custom_title'),
                                        Text::make('Url адрес', 'custom_url'),

                                    ])
                                    ->nullable(),

                                BelongsToMany::make('Страницы', 'Page', 'title', resource: PageResource::class)
                                    ->valuesQuery(fn(Builder $query, Field $field) => $query->orderBy('sorting', 'DESC'))
                                    ->fields([
                                        Text::make('Наименование', 'custom_title'),
                                        Text::make('Url адрес', 'custom_url'),

                                    ])
                                    ->nullable()
                            ]),



                        ]),

                    ])->columnSpan(6),


                ]),


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

    protected function rules(DataWrapperContract $item): array
    {
        return [];
    }

    /**
     * @param  FormBuilder  $component
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
