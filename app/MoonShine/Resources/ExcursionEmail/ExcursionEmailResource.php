<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ExcursionEmail;

use Illuminate\Database\Eloquent\Model;
use App\Models\ExcursionEmail;
use App\MoonShine\Resources\ExcursionEmail\Pages\ExcursionEmailIndexPage;
use App\MoonShine\Resources\ExcursionEmail\Pages\ExcursionEmailFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<ExcursionEmail, ExcursionEmailIndexPage, ExcursionEmailFormPage>
 */
class ExcursionEmailResource extends ModelResource
{
    protected string $model = ExcursionEmail::class;


    protected string $title = 'Заявки с формы обратной связи';

    protected string $column = 'username';
    protected string $sortColumn = 'created_at';

    public function search(): array
    {
        return ['username', 'email', 'phone',  'Excursion.title'];
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ExcursionEmailIndexPage::class,
            ExcursionEmailFormPage::class,
         //   ExcursionEmailDetailPage::class,
        ];
    }
}
