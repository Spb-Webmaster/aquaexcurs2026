<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ExcursionOrder\Pages;

use App\MoonShine\Fields\OrderParams;
use App\MoonShine\Resources\Excursion\ExcursionResource;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\ExcursionOrder\ExcursionOrderResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use Throwable;


/**
 * @extends FormPage<ExcursionOrderResource>
 */
class ExcursionOrderFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [

            Box::make([
                ID::make(),
                Divider::make('Заказ'),
                Grid::make([
                    Column::make([

                        Collapse::make('Данные пользователя', [
                            Text::make('ФИО', 'username')->required()->locked(),
                            Text::make('Телефон', 'phone')->locked(),
                            Text::make('Email', 'email')->locked(),
                            Date::make(__('Необходимая дата'), 'excursion_date')
                                ->format("d.m.Y")->locked(),
                        ]),


                    ])->columnSpan(6),
                    Column::make([
                        Collapse::make('Билет', [


                            Text::make('Серия', 'series')->locked(),
                            Text::make('Номер', 'number')->locked(),

                        ]),

                        Collapse::make('Данные заказа', [

                            Date::make(__('Дата создания'), 'created_at')
                                ->format("d.m.Y")
                                ->default(now()->toDateTimeString())
                                ->sortable()->locked(),


                            BelongsTo::make('Экскурсия', 'Excursion', 'title', resource: ExcursionResource::class)->nullable(),

                        ]),


                    ])->columnSpan(6),
                ]),
                    Grid::make([
                        Column::make([

                            Collapse::make('Полные данные', [
                                OrderParams::make('', 'order'),
                            ]),

                        ])->columnSpan(6),
                        Column::make([

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
