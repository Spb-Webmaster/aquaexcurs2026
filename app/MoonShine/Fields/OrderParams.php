<?php

namespace App\MoonShine\Fields;

use MoonShine\UI\Fields\Field;
use MoonShine\UI\Traits\Fields\HasPlaceholder;
use MoonShine\UI\Traits\Fields\UpdateOnPreview;
use MoonShine\UI\Traits\Fields\WithDefaultValue;
use MoonShine\UI\Traits\Fields\WithEscapedValue;
use MoonShine\UI\Traits\Fields\WithInputExtensions;
use MoonShine\UI\Traits\Fields\WithMask;


class OrderParams extends Field
{

    use WithInputExtensions;
    use WithMask;
    use WithDefaultValue;
    use HasPlaceholder;
    use UpdateOnPreview;
    use WithEscapedValue;



    // params
    protected string $view = 'moonshine.fields.order_params';


    protected function fields()
    {
        $j = ($this->toValue())?->toArray();
        dump($j);
       // return $array;

    }


    protected function viewData(): array
    {
        return [
            'array' => $this->fields(),
        ];
    }



}
