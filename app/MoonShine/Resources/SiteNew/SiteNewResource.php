<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SiteNew;

use Illuminate\Database\Eloquent\Model;
use App\Models\SiteNew;
use App\MoonShine\Resources\SiteNew\Pages\SiteNewIndexPage;
use App\MoonShine\Resources\SiteNew\Pages\SiteNewFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<SiteNew, SiteNewIndexPage, SiteNewFormPage>
 */
class SiteNewResource extends ModelResource
{
    protected string $model = SiteNew::class;

    protected string $title = 'Новости сайта';

    protected string $sortColumn = 'created_at';


    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            SiteNewIndexPage::class,
            SiteNewFormPage::class,
        ];
    }
}
