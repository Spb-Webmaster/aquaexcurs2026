<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ExcursionEmail;

use Illuminate\Database\Eloquent\Model;
use App\Models\ExcursionEmail;
use App\MoonShine\Resources\ExcursionEmail\Pages\ExcursionEmailIndexPage;
use App\MoonShine\Resources\ExcursionEmail\Pages\ExcursionEmailFormPage;
use App\MoonShine\Resources\ExcursionEmail\Pages\ExcursionEmailDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<ExcursionEmail, ExcursionEmailIndexPage, ExcursionEmailFormPage, ExcursionEmailDetailPage>
 */
class ExcursionEmailResource extends ModelResource
{
    protected string $model = ExcursionEmail::class;


    protected string $title = 'Заявки с формы обратной связи';

    protected string $column = 'created_at';

    protected string $sortColumn = 'created_at';

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
            ExcursionEmailIndexPage::class,
            ExcursionEmailFormPage::class,
            ExcursionEmailDetailPage::class,
        ];
    }
}
