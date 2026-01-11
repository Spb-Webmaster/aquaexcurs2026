<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use Illuminate\Support\Facades\Storage;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Support\Enums\FormMethod;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;


class ContactPage extends Page
{
    /**
     * @return array<string, string>
     */
    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function setting()
    {

        if (Storage::disk('config')->exists('moonshine/contact.php')) {
            $result = include(storage_path('app/public/config/moonshine/contact.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Контакты сайта';
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
    {
        if (!is_null($this->setting())) {
            extract($this->setting());
        }

        return [
            FormBuilder::make('/moonshine/contact', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Настройки'), [


                            Grid::make([


                                Column::make([
                                    Divider::make('Константы'),

                                    Box::make([

                                        Text::make('Название', 'title')->default((isset($title)) ? $title : '')->escape(),
                                        Text::make('Алиас', 'slug')->default((isset($slug)) ? $slug : 'contacts')->locked(),
                                        Text::make('Подзаголовок', 'subtitle')->default((isset($subtitle)) ? $subtitle : '')->escape(),

                                        TinyMce::make('Описание на странице', 'text')->default((isset($text)) ? $text : ''),

                                        TinyMce::make('Описание на странице', 'text2')->default((isset($text2)) ? $text2 : ''),


                                    ]),


                                ])->columnSpan(6),


                                Column::make([
                                    Divider::make('Метаданные'),

                                    Box::make([
                                        Text::make('Мета тэг (title) ', 'metatitle')->unescape()->default((isset($metatitle)) ? $metatitle : ''),
                                        Text::make('Мета тэг (description) ', 'description')->unescape()->default((isset($description)) ? $description : ''),
                                        Text::make('Мета тэг (keywords) ', 'keywords')->unescape()->default((isset($keywords)) ? $keywords : ''),
                                    ]),

                                ])->columnSpan(6),
                            ]),
                        ]),

                        Tab::make(__('Причалы'), [

                            Grid::make([
                                Column::make([

                                    Box::make([
                                        Json::make('Причал', 'json_piers')->fields([
                                            Text::make('Заголовок', 'json_title'),
                                            Number::make('Основной телефон', 'json_phone')->placeholder('Только цифры'),
                                            Text::make('Email', 'json_email'),
                                            Text::make('Координаты', 'json_coordinates'),
                                            Textarea::make('Краткое описание', 'json_text'),

                                        ])->vertical()->creatable(limit: 30)
                                            ->removable()->default((isset($json_piers)) ? $json_piers : ''),


                                    ]),

                                ])->columnSpan(6),
                                Column::make([

                                ])->columnSpan(6),

                            ]),
                        ]),



                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}
