<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\FleetShip;

use Illuminate\Database\Eloquent\Model;
use App\Models\FleetShip;
use App\MoonShine\Resources\FleetShip\Pages\FleetShipIndexPage;
use App\MoonShine\Resources\FleetShip\Pages\FleetShipFormPage;
use App\MoonShine\Resources\FleetShip\Pages\FleetShipDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<FleetShip, FleetShipIndexPage, FleetShipFormPage, FleetShipDetailPage>
 */
class FleetShipResource extends ModelResource
{
    protected string $model = FleetShip::class;

    protected string $title = 'FleetShips';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            FleetShipIndexPage::class,
            FleetShipFormPage::class,
            FleetShipDetailPage::class,
        ];
    }
}
