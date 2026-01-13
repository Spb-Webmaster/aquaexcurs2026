<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SiteNew\Pages;

use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\SiteNew\SiteNewResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Date;
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
 * @extends FormPage<SiteNewResource>
 */
class SiteNewFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [

            Box::make([
                ID::make(),
                Divider::make('Материал'),
                Grid::make([
                    Column::make([

                        Collapse::make('Заголовок/Алиас', [
                            Text::make('Заголовок', 'title')->required()->unescape(),
                            Slug::make('Алиас', 'slug')
                                ->from('title')->unique(),
                            Text::make('Подзаголовок', 'subtitle')->unescape(),

                        ]),
                        Collapse::make('Изображение', [
                            Image::make( '','img')
                                ->dir('images/news')
                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg', 'webp'])
                                ->removable(),
                        ]),

                    ])->columnSpan(6),
                    Column::make([

                        Collapse::make('Метаданные', [

                            Text::make('Мета тэг (title) ', 'metatitle')->unescape(),
                            Text::make('Мета тэг (description) ', 'description')->unescape(),
                            Text::make('Мета тэг (keywords) ', 'keywords')->unescape(),
                        ]),


                        Collapse::make('Детали вывода', [

                            Switcher::make('Публикация', 'published')->default(1),
                            Date::make(__('Дата создания'), 'created_at')
                                ->format("d.m.Y")
                                ->default(now()->toDateTimeString())
                                ->sortable()->locked(),


                        ]),

                    ])->columnSpan(6),


                ]),
                Grid::make([
                    Column::make([


                        Textarea::make('HTML', 'html'),
                        TinyMce::make('Описание', 'text'),
                        Textarea::make('HTML', 'html2'),
                        TinyMce::make('Описание', 'text2'),

                        Tabs::make([
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
                                    ])->columnSpan(8),
                                ]),

                            ]),
                            Tab::make(__('FAQ'), [

                                Grid::make([
                                    Column::make([
                                        Collapse::make('Вопрос/Ответ', [
                                            Text::make('Заголовок', 'faq_title')->unescape(),

                                            Json::make('Вопрос-ответ', 'faq')->fields([
                                                Textarea::make('Вопрос', 'faq_question'),
                                                TinyMce::make('Ответ', 'faq_answer')

                                            ])->vertical()->creatable(limit: 50)
                                                ->removable(),

                                        ]),
                                    ])->columnSpan(8),
                                ]),

                            ]),
                        ]),

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
