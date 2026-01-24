<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Excursion;

use Illuminate\Database\Eloquent\Model;
use App\Models\Excursion;
use App\MoonShine\Resources\Excursion\Pages\ExcursionIndexPage;
use App\MoonShine\Resources\Excursion\Pages\ExcursionFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Excursion, ExcursionIndexPage, ExcursionFormPage>
 */
class ExcursionResource extends ModelResource
{
    protected string $model = Excursion::class;

    protected string $title = 'Экскурсии';

    protected string $column = 'title';

    protected string $sortColumn = 'sorting';

    public function search(): array
    {
        return ['username', 'phone'];
    }
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ExcursionIndexPage::class,
            ExcursionFormPage::class,
        ];
    }
}
