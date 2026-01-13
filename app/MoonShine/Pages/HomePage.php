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
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;


class HomePage extends Page
{

    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function setting()
    {

        if (Storage::disk('config')->exists('moonshine/home.php')) {
            $result = include(storage_path('app/public/config/moonshine/home.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Главная';
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
            FormBuilder::make('/moonshine/home', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Главная'), [


                            Grid::make([


                                Column::make([
                                    Divider::make('Заголовок/Алиас'),

                                    Box::make([
                                        Text::make('Заголовок', 'title')->unescape()->default((isset($title)) ? $title : ''),
                                        Text::make('Подзаголовок', 'subtitle')->unescape()->default((isset($subtitle)) ? $subtitle : ''),
                                    ]),
                                    Box::make([
                                        Text::make('Наши экскурсии', 'title_exc')->unescape()->default((isset($title_exc)) ? $title_exc : ''),
                                        Text::make('Выберите маршрут', 'ci_title')->unescape()->default((isset($ci_title)) ? $ci_title : ''),
                                        Text::make('Судоходная компания «Аква-экскурс»', 'ci_subtitle')->unescape()->default((isset($ci_subtitle)) ? $ci_subtitle : ''),
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
                                    Divider::make('Описание'),

                                    Box::make([
                                        TinyMce::make('Описание', 'desc')->default((isset($desc)) ? $desc : ''),
                                    ]),


                                ])->columnSpan(12),
                            ]),

                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}
