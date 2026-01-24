<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\FleetShip;

use Illuminate\Database\Eloquent\Model;
use App\Models\FleetShip;
use App\MoonShine\Resources\FleetShip\Pages\FleetShipIndexPage;
use App\MoonShine\Resources\FleetShip\Pages\FleetShipFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<FleetShip, FleetShipIndexPage, FleetShipFormPage>
 */
class FleetShipResource extends ModelResource
{
    protected string $model = FleetShip::class;

    protected string $title = 'Теплоходы';

    protected string $column = 'title';

    protected string $sortColumn = 'sorting';

    public function search(): array
    {
        return ['title'];
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            FleetShipIndexPage::class,
            FleetShipFormPage::class,
        ];
    }
}
