<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\MoonShine\Fields\Home1;
use Illuminate\Support\Facades\Storage;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Support\Enums\FormMethod;
use MoonShine\TinyMce\Fields\TinyMce;
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


class FleetSpeedBoatPage extends Page
{

    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function setting()
    {

        if (Storage::disk('config')->exists('moonshine/fleet_speedboat.php')) {
            $result = include(storage_path('app/public/config/moonshine/fleet_speedboat.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Катера';
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
            FormBuilder::make('/moonshine/fleet_speedboat', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Настройки'), [

                            Home1::make(),

                            Grid::make([

                                Column::make([
                                    Divider::make('Катера компании'),



                                    Box::make([
                                        Text::make('Заголовок', 'title')->default((isset($title)) ? $title : '')->unescape(),
                                        Text::make('Алиас', 'slug')->default((isset($slug)) ? $slug : 'speedboats')->locked(),
                                        Text::make('Подзаголовок', 'subtitle')->default((isset($subtitle)) ? $subtitle : '')->unescape(),

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
                            Grid::make([

                                Column::make([

                                    Divider::make('Параметры'),
                                    Box::make([
                                    Textarea::make('HTML', 'html')->unescape()
                                        ->default((isset($html)) ? $html : ''),


                                    Json::make('Параметры цены', 'json_price')->fields([
                                        Text::make('Заголовок', 'json_title')->unescape(),
                                        Text::make('Цена', 'json_price'),
                                        Textarea::make('Описание', 'json_text')->unescape()->placeholder('HTML'),

                                    ])->vertical()->creatable(limit: 30)
                                        ->removable()->default((isset($json_price)) ? $json_price : ''),

                                    ]),


                                ])->columnSpan(6),
                                Column::make([
                                    Divider::make('Описание'),

                                    Box::make([
                                        TinyMce::make('Описание', 'desc')->default((isset($desc)) ? $desc : ''),
                                    ]),

                                ])->columnSpan(6),
                            ]),
                        ]),



                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}
