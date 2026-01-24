<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\FleetSpeedboat;

use Illuminate\Database\Eloquent\Model;
use App\Models\FleetSpeedboat;
use App\MoonShine\Resources\FleetSpeedboat\Pages\FleetSpeedboatIndexPage;
use App\MoonShine\Resources\FleetSpeedboat\Pages\FleetSpeedboatFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<FleetSpeedboat, FleetSpeedboatIndexPage, FleetSpeedboatFormPage>
 */
class FleetSpeedboatResource extends ModelResource
{
    protected string $model = FleetSpeedboat::class;

    protected string $title = 'Катера';

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
            FleetSpeedboatIndexPage::class,
            FleetSpeedboatFormPage::class,
        ];
    }
}
