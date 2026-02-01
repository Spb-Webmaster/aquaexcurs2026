<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Pages\ContactPage;
use App\MoonShine\Pages\FleetShipPage;
use App\MoonShine\Pages\FleetSpeedBoatPage;
use App\MoonShine\Pages\HomePage;
use App\MoonShine\Pages\SettingPage;
use App\MoonShine\Resources\MoonShineUser\MoonShineUserResource;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\Palettes\PurplePalette;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Contracts\ColorManager\PaletteContract;
use MoonShine\MenuManager\MenuDivider;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\Excursion\ExcursionResource;
use App\MoonShine\Resources\ExcursionOrder\ExcursionOrderResource;
use App\MoonShine\Resources\ExcursionEmail\ExcursionEmailResource;
use App\MoonShine\Resources\Menu\MenuResource;
use App\MoonShine\Resources\Page\PageResource;
use App\MoonShine\Resources\MenuBottom\MenuBottomResource;
use App\MoonShine\Resources\SiteNew\SiteNewResource;
use App\MoonShine\Resources\FleetSpeedboat\FleetSpeedboatResource;
use App\MoonShine\Resources\FleetShip\FleetShipResource;
use YuriZoom\MoonShineMediaManager\Pages\MediaManagerPage;
use App\MoonShine\Resources\FleetSchoolboy\FleetSchoolboyResource;

final class AxeldLayout extends AppLayout
{
    /**
     * @var null|class-string<PaletteContract>
     */
    protected ?string $palette = PurplePalette::class;

    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make('Пользователи', [
                MenuItem::make( MoonShineUserResource::class, 'Админ', 'user'),
                MenuDivider::make(),
            ]),

            MenuGroup::make(static fn() => __('Страницы'), [

                MenuItem::make( HomePage::class, 'Главная', 'building-library'),
                MenuItem::make( ContactPage::class, 'Контакты', 'flag'),
                MenuItem::make(PageResource::class, 'Материалы', 'book-open'),
                MenuItem::make(SiteNewResource::class, 'Новости', 'newspaper'),
                MenuItem::make(FleetSpeedBoatPage::class, 'Катера', 'arrow-right-circle'),
                MenuItem::make(FleetShipPage::class, 'Теплоходы', 'arrow-right-circle'),

            ]),

            MenuGroup::make(static fn() => __('Экскурсии'), [

                MenuItem::make( ExcursionResource::class, 'Экскурсии', 'banknotes'),

            ]),

            MenuGroup::make(static fn() => __('Наш флот'), [

                MenuItem::make(FleetSpeedboatResource::class, 'Катера', 'arrow-right-circle'),
                MenuItem::make(FleetShipResource::class, 'Теплоходы', 'arrow-right-circle'),
                MenuItem::make(FleetSchoolboyResource::class, 'Школьные экскурсии', 'arrow-right-circle'),

            ]),

            MenuGroup::make(static fn() => __('Заказы'), [

                MenuItem::make(ExcursionEmailResource::class, 'Заявки с формы', 'envelope'),
                MenuItem::make(ExcursionOrderResource::class, 'Заказы билетов' , 'currency-dollar'),
            ]),

            MenuGroup::make(static fn() => __('Меню сайта'), [

                MenuItem::make( MenuResource::class, 'Верхнее меню', 'bars-arrow-down'),
                MenuItem::make(MenuBottomResource::class, 'Нижние меню', 'bars-arrow-down'),

            ]),

            MenuGroup::make(static fn() => __('Настройки'), [

                MenuItem::make( SettingPage::class, 'Настройки', 'adjustments-vertical'),
                MenuItem::make(MediaManagerPage::class, 'Медиа' , 'film'),

            ]),


        ];
    }
    protected function getFooterCopyright(): string
    {
        return \sprintf(
            <<<'HTML'
                &copy; %d Made  by
                <a href="https://t.me/AxeldMaster"
                    class="font-semibold text-primary"
                    target="_blank"
                >
                    @AxeldMaster
                </a>
                HTML,
            now()->year,
        );
    }

    protected function getFooterMenu(): array
    {
        return [
            config('app.app_url') => 'WebSite',
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }
}
