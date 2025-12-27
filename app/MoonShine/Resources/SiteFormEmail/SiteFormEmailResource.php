<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SiteFormEmail;

use Illuminate\Database\Eloquent\Model;
use App\Models\SiteFormEmail;
use App\MoonShine\Resources\SiteFormEmail\Pages\SiteFormEmailIndexPage;
use App\MoonShine\Resources\SiteFormEmail\Pages\SiteFormEmailFormPage;
use App\MoonShine\Resources\SiteFormEmail\Pages\SiteFormEmailDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<SiteFormEmail, SiteFormEmailIndexPage, SiteFormEmailFormPage, SiteFormEmailDetailPage>
 */
class SiteFormEmailResource extends ModelResource
{
    protected string $model = SiteFormEmail::class;


    protected string $title = 'Заявки с формы отправки';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            SiteFormEmailIndexPage::class,
            SiteFormEmailFormPage::class,
            SiteFormEmailDetailPage::class,
        ];
    }
}
