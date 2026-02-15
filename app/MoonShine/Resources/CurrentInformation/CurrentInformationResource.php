<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\CurrentInformation;

use Illuminate\Database\Eloquent\Model;
use App\Models\CurrentInformation;
use App\MoonShine\Resources\CurrentInformation\Pages\CurrentInformationIndexPage;
use App\MoonShine\Resources\CurrentInformation\Pages\CurrentInformationFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<CurrentInformation, CurrentInformationIndexPage, CurrentInformationFormPage>
 */
class CurrentInformationResource extends ModelResource
{
    protected string $model = CurrentInformation::class;

    protected string $title = 'Текущая информация';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            CurrentInformationIndexPage::class,
            CurrentInformationFormPage::class,
        ];
    }
}
