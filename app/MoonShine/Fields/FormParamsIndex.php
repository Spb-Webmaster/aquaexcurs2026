<?php

namespace App\MoonShine\Fields;

use MoonShine\UI\Fields\Field;
use MoonShine\UI\Traits\Fields\HasPlaceholder;
use MoonShine\UI\Traits\Fields\UpdateOnPreview;
use MoonShine\UI\Traits\Fields\WithDefaultValue;
use MoonShine\UI\Traits\Fields\WithEscapedValue;
use MoonShine\UI\Traits\Fields\WithInputExtensions;
use MoonShine\UI\Traits\Fields\WithMask;


class FormParamsIndex extends Field
{

    use WithInputExtensions;
    use WithMask;
    use WithDefaultValue;
    use HasPlaceholder;
    use UpdateOnPreview;
    use WithEscapedValue;


    // params
    protected string $view = 'moonshine.fields.form_params_index';


    protected function user_name(): string
    {
        $j = $this->toValue()->toArray();
        $jd = (json_decode($j[0]));
        if($jd->form->name[1]) {

               return $jd->form->name[1];
        }


        return ' - ';

    }


    protected function viewData(): array
    {
        return [
            'user_name' => $this->user_name(),
        ];
    }



}
