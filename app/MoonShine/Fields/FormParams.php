<?php

namespace App\MoonShine\Fields;

use MoonShine\UI\Fields\Field;
use MoonShine\UI\Traits\Fields\HasPlaceholder;
use MoonShine\UI\Traits\Fields\UpdateOnPreview;
use MoonShine\UI\Traits\Fields\WithDefaultValue;
use MoonShine\UI\Traits\Fields\WithEscapedValue;
use MoonShine\UI\Traits\Fields\WithInputExtensions;
use MoonShine\UI\Traits\Fields\WithMask;


class FormParams extends Field
{

    use WithInputExtensions;
    use WithMask;
    use WithDefaultValue;
    use HasPlaceholder;
    use UpdateOnPreview;
    use WithEscapedValue;



    // params
    protected string $view = 'moonshine.fields.form_params';


    protected function fields()
    {
        $j = $this->toValue()->toArray();
        $jd = (json_decode($j[0]));
        $array = [];
        foreach ($jd->form as $key => $value) {

            $array[$key]['name'] = $value[0];
            $array[$key]['value'] = $value[1];

        }


        return $array;

    }


    protected function viewData(): array
    {
        return [
            'array' => $this->fields(),
        ];
    }



}
