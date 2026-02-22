<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Excursion\Pages;

use App\Models\FleetShip;
use App\MoonShine\Fields\OrderTodayTicket;
use App\MoonShine\Resources\FleetSchoolboy\FleetSchoolboyResource;
use App\MoonShine\Resources\FleetShip\FleetShipResource;
use App\MoonShine\Resources\FleetSpeedboat\FleetSpeedboatResource;
use Illuminate\Contracts\Database\Eloquent\Builder;
use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Excursion\ExcursionResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Field;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;


/**
 * @extends FormPage<ExcursionResource>
 */
class ExcursionFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [

            Box::make([
                ID::make(),
                Divider::make('Экскурсия'),
                Grid::make([
                    Column::make([

                        Collapse::make('Заголовок/Алиас', [
                            Text::make('Заголовок', 'title')->required(),
                            Slug::make('Алиас', 'slug')
                                ->from('title')->unique(),
                            Text::make('Подзаголовок', 'subtitle'),

                        ]),

                        Collapse::make('Анонс', [
                            Image::make(__('Изображение'), 'img')
                                ->dir('excursion')
                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                ->removable(),
                            TinyMce::make('Краткое описание', 'short_desc'),
                            Textarea::make('Карта яндекс', 'yandex_map')->nullable()   ->unescape(),

                        ]),

                    ])->columnSpan(6),
                    Column::make([
                        Collapse::make('Метаданные', [

                            Text::make('Мета тэг (title) ', 'metatitle')->unescape(),
                            Text::make('Мета тэг (description) ', 'description')->unescape(),
                            Text::make('Мета тэг (keywords) ', 'keywords')->unescape(),
                        ]),
                        Collapse::make('Настройки', [

                            Text::make('Серия', 'series')->required()->hint('Обращайте внимание на эту опцию! Внимательно проверьте, что серия не повторяется с другими экскурсиями! Изменение серии влияет на сортировку и анализ ранее проданных билетов')->locked(),
                            Switcher::make('Публикация', 'published')->default(1),
                            Text::make('Индивидуальный номер', 'sku')->required(),
                            Number::make('Сортировка','sorting')->buttons()->default(0),

                            Date::make(__('Дата создания'), 'created_at')
                                ->format("d.m.Y")
                                ->default(now()->toDateTimeString())
                                ->sortable(),
                        ]),
                        Collapse::make('Продажа билетов', [
                            Switcher::make('Продажа включена', 'price_hide')->default(1)->hint('(Выключая эту опцию, продажа билетов прекращается)'),

                            Number::make('Количество МЕСТ', 'count_ticket')->default(100)->locked()->hint('Количество мест на экскурсию. Это не билеты, а места!'),
                            OrderTodayTicket::make('', 'order_today_ticket')

                        ]),
                        Collapse::make('Макет - отправить заявку', [
                            Switcher::make('Только заявка', 'dont_register')->default(0)->hint('(Выключая эту опцию, экскурсия не оформляется и не оплачивается. Происходит только оформление заявки на email)'),
                            Text::make('Цена от', 'dont_register_prefix_price')->default('От'),
                            Number::make('Цена', 'dont_register_price')->nullable(),
                            Text::make('Подпись под ценой', 'dont_register_desc')->nullable(),
                            Text::make('Надпись на кнопке', 'dont_register_button')->unescape(),
                            Text::make('Шаблон формы', 'dont_register_form')->unescape(),


                        ]),
                    ])->columnSpan(6),


                ]),
                Grid::make([
                    Column::make([

                        Tabs::make([
                            Tab::make(__('Анонс'), [
                                Grid::make([
                                    Column::make([

                                        Collapse::make('Тизер на главной', [
                                            Json::make('', 'teaser')->fields([

                                                Text::make('', 'json_teaser_text')->hint('Опция')->unescape(),

                                            ])->vertical()->creatable(limit: 100)
                                                ->removable(),
                                        ]),
                                    ])->columnSpan(6),
                                ]),

                            ]),
                            Tab::make(__('Данные экскурсии'), [
                                Grid::make([
                                    Column::make([

                                        Collapse::make('Причал', [
                                            Textarea::make('Причал', 'pier')->unescape(),
                                            Textarea::make('Преимущества', 'privilege')->unescape(),
                                            Text::make('Время отправления', 'departure_time')->unescape(),
                                            Textarea::make('Время отправления (подробнее)', 'departure_time_desc')->unescape(),
                                            Textarea::make('Время в пути', 'time_route')->unescape(),
                                        ]),
                                    ])->columnSpan(6),
                                ]),

                            ]),

                            Tab::make(__('Цена'), [
                                Grid::make([
                                    Column::make([

                                        Collapse::make('Взрослый', [
                                            Number::make('Стоимость', 'price')->nullable(),
                                            Textarea::make('Описание', 'price_desc')->escape(),
                                        ]),

                                        Collapse::make('Детский', [
                                            Number::make('Стоимость', 'price_child')->nullable(),
                                            Textarea::make('Описание', 'price_child_desc')->escape(),
                                        ]),

                                        Collapse::make('Льготный', [
                                            Number::make('Стоимость', 'price_advantage')->nullable(),
                                            Textarea::make('Описание', 'price_advantage_desc')->escape(),
                                        ]),


                                    ])->columnSpan(6),
                                    Column::make([

                                        Collapse::make('Цена на причале', [
                                            Number::make('Стоимость', 'price_pier')->nullable(),

                                        ]),



                                    ])->columnSpan(6),
                                ]),

                            ]),
                            Tab::make(__('Описание'), [
                                Grid::make([
                                    Column::make([

                                        Collapse::make('Описание', [
                                            TinyMce::make('Описание', 'desc'),
                                            TinyMce::make('Описание', 'desc2'),
                                        ]),

                                    ])->columnSpan(12),
                                ]),

                            ]),

                            Tab::make(__('Галерея'), [
                                Grid::make([
                                    Column::make([

                                        Collapse::make('Галерея', [
                                            Json::make('', 'gallery')->fields([

                                                Text::make('', 'json_gallery_label')->hint('Заголовок изображения'),
                                                Image::make(__('Изображение'), 'json_gallery_text')
                                                    ->dir('excursion')
                                                    ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                                    ->removable(),
                                            ])->vertical()->creatable(limit: 100)
                                                ->removable(),
                                        ]),
                                    ])->columnSpan(6),
                                ]),

                            ]),

                            Tab::make(__('Маршрут'), [
                                Grid::make([
                                    Column::make([

                                        Collapse::make('Маршрут', [
                                            Json::make('', 'route')->fields([

                                                Text::make('', 'json_route_text')->hint('Название'),

                                            ])->vertical()->creatable(limit: 100)
                                                ->removable(),
                                        ]),
                                    ])->columnSpan(6),
                                ]),

                            ]),

                            Tab::make(__('Вы увидите'), [
                                Grid::make([
                                    Column::make([

                                        Collapse::make('Вы увидите', [
                                            Json::make('', 'list_points')->fields([

                                                Text::make('', 'json_list_points_text')->hint('Название'),

                                            ])->vertical()->creatable(limit: 100)
                                                ->removable(),
                                        ]),
                                    ])->columnSpan(6),
                                ]),
                            ]),
                            Tab::make(__('Для Аренды'), [
                                Grid::make([
                                    Column::make([

                                    TinyMce::make('Описание аренды', 'rent_text')->hint('Выводится с правой стороны в самом низу')
                                    ])->columnSpan(6),
                                ]),
                            ]),

                        ]),

                    ])->columnSpan(12),

                ]),
                Grid::make([
                    Column::make([

                        BelongsToMany::make('Катера', 'FleetSpeedboat', 'title', resource: FleetSpeedboatResource::class)
                            ->valuesQuery(fn(Builder $query, Field $field) => $query->orderBy('sorting', 'DESC'))
                            ->selectMode()
                            ->nullable(),
                        BelongsToMany::make('Теплоходы', 'FleetShip', 'title', resource: FleetShipResource::class)
                            ->valuesQuery(fn(Builder $query, Field $field) => $query->orderBy('sorting', 'DESC'))
                            ->selectMode()
                            ->nullable(),
                        BelongsToMany::make('Школьные экскурсии', 'FleetSchoolboy', 'title', resource: FleetSchoolboyResource::class)
                            ->valuesQuery(fn(Builder $query, Field $field) => $query->orderBy('sorting', 'DESC'))
                            ->selectMode()
                            ->nullable(),
                        Textarea::make('Код html', 'html')->unescape(),

                    ])->columnSpan(12),
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
