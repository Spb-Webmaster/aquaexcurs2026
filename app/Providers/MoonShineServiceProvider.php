<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Pages\ContactPage;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUser\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRole\MoonShineUserRoleResource;
use App\MoonShine\Pages\HomePage;
use App\MoonShine\Pages\SettingPage;
use App\MoonShine\Resources\Excursion\ExcursionResource;
use App\MoonShine\Resources\ExcursionOrder\ExcursionOrderResource;
use App\MoonShine\Resources\ExcursionEmail\ExcursionEmailResource;
use App\MoonShine\Resources\Menu\MenuResource;
use App\MoonShine\Resources\Page\PageResource;
use App\MoonShine\Resources\MenuBottom\MenuBottomResource;
use App\MoonShine\Resources\SiteNew\SiteNewResource;
use App\MoonShine\Resources\FleetSpeedboat\FleetSpeedboatResource;
use App\MoonShine\Resources\FleetShip\FleetShipResource;
use App\MoonShine\Pages\FleetSpeedBoatPage;
use App\MoonShine\Pages\FleetShipPage;
use App\MoonShine\Resources\FleetSchoolboy\FleetSchoolboyResource;
use App\MoonShine\Pages\FleetSchoolBoyPage;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  CoreContract<MoonShineConfigurator>  $core
     */
    public function boot(CoreContract $core): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                ExcursionResource::class,
                ExcursionOrderResource::class,
                ExcursionEmailResource::class,
                MenuResource::class,
                PageResource::class,
                MenuBottomResource::class,
                SiteNewResource::class,
                FleetSpeedboatResource::class,
                FleetShipResource::class,
                FleetSchoolboyResource::class,
            ])
            ->pages([
                ...$core->getConfig()->getPages(),
                HomePage::class,
                SettingPage::class,
                ContactPage::class,
                FleetSpeedBoatPage::class,
                FleetShipPage::class,
                FleetSchoolBoyPage::class,
            ])
        ;
    }
}
