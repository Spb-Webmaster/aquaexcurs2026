<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUser\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRole\MoonShineUserRoleResource;
use App\MoonShine\Pages\HomePage;
use App\MoonShine\Pages\SettingPage;
use App\MoonShine\Resources\Excursion\ExcursionResource;
use App\MoonShine\Resources\SiteFormEmail\SiteFormEmailResource;
use App\MoonShine\Resources\ExcursionOrder\ExcursionOrderResource;
use App\MoonShine\Resources\ExcursionEmail\ExcursionEmailResource;

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
                SiteFormEmailResource::class,
                ExcursionOrderResource::class,
                ExcursionEmailResource::class,
            ])
            ->pages([
                ...$core->getConfig()->getPages(),
                HomePage::class,
                SettingPage::class,
            ])
        ;
    }
}
