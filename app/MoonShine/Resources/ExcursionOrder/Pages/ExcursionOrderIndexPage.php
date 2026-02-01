<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ExcursionOrder\Pages;

use App\MoonShine\Resources\Excursion\ExcursionResource;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\QueryTags\QueryTag;
use MoonShine\UI\Components\Metrics\Wrapped\Metric;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Field;
use MoonShine\UI\Fields\ID;
use App\MoonShine\Resources\ExcursionOrder\ExcursionOrderResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\Preview;
use MoonShine\UI\Fields\Text;
use Throwable;


/**
 * @extends IndexPage<ExcursionOrderResource>
 */
class ExcursionOrderIndexPage extends IndexPage
{
    protected bool $isLazy = true;

    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make(),
            Text::make('Серия', 'series'),
            Text::make('Номер', 'number'),
            Preview::make('Статус', 'status')
                ->badge(fn($status, Field $field) => ($status == 200) ? 'green' : (($status == 500) ? 'error' : 'gray')),
            Text::make('ФИО', 'username'),
            Text::make('Телефон', 'phone'),
            Text::make('Email', 'email'),
            Date::make(__('Необходимая дата'), 'excursion_date')
                ->format("d.m.Y"),
            Text::make('Общая сумма', 'amount'),
            BelongsTo::make('Экскурсия', 'Excursion', 'title', resource: ExcursionResource::class)->nullable(),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @return list<FieldContract>
     */
    protected function filters(): iterable
    {
        return [];
    }

    /**
     * @return list<QueryTag>
     */
    protected function queryTags(): array
    {
        return [];
    }

    /**
     * @return list<Metric>
     */
    protected function metrics(): array
    {
        return [];
    }

    /**
     * @param  TableBuilder  $component
     *
     * @return TableBuilder
     */
    protected function modifyListComponent(ComponentContract $component): ComponentContract
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
       //     ...parent::topLayer()
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
