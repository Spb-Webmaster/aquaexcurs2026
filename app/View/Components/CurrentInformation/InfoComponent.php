<?php

namespace App\View\Components\CurrentInformation;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InfoComponent extends Component
{

   public ?string $title;
   public ?string $desc;
       public function __construct()
    {
        $this->title = config2('moonshine.setting.info');
        $this->desc = config2('moonshine.setting.info_desc');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.current-information.info-component');
    }
}
