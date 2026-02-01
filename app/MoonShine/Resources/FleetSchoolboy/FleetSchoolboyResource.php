<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\FleetSchoolboy;

use Illuminate\Database\Eloquent\Model;
use App\Models\FleetSchoolboy;
use App\MoonShine\Resources\FleetSchoolboy\Pages\FleetSchoolboyIndexPage;
use App\MoonShine\Resources\FleetSchoolboy\Pages\FleetSchoolboyFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<FleetSchoolboy, FleetSchoolboyIndexPage, FleetSchoolboyFormPage>
 */
class FleetSchoolboyResource extends ModelResource
{
    protected string $model = FleetSchoolboy::class;

    protected string $title = 'Школьные экскурсии';

    protected string $column = 'title';

    protected string $sortColumn = 'sorting';
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            FleetSchoolboyIndexPage::class,
            FleetSchoolboyFormPage::class,
        ];
    }
}
