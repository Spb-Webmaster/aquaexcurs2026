<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\MenuBottom;

use Illuminate\Database\Eloquent\Model;
use App\Models\MenuBottom;
use App\MoonShine\Resources\MenuBottom\Pages\MenuBottomIndexPage;
use App\MoonShine\Resources\MenuBottom\Pages\MenuBottomFormPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<MenuBottom, MenuBottomIndexPage, MenuBottomFormPage>
 */
class MenuBottomResource extends ModelResource
{
    protected string $model = MenuBottom::class;


    protected string $title = 'Меню';

    protected string $column = 'title';
    protected string $sortColumn = 'sorting';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            MenuBottomIndexPage::class,
            MenuBottomFormPage::class,
        ];
    }
}
