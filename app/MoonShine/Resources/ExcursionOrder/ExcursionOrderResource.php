<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ExcursionOrder;

use Illuminate\Database\Eloquent\Model;
use App\Models\ExcursionOrder;
use App\MoonShine\Resources\ExcursionOrder\Pages\ExcursionOrderIndexPage;
use App\MoonShine\Resources\ExcursionOrder\Pages\ExcursionOrderFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<ExcursionOrder, ExcursionOrderIndexPage, ExcursionOrderFormPage>
 */
class ExcursionOrderResource extends ModelResource
{
    protected string $model = ExcursionOrder::class;

    protected string $title = 'ExcursionOrders';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ExcursionOrderIndexPage::class,
            ExcursionOrderFormPage::class,
        ];
    }
}
