<?php

namespace App\View\Components\CurrentInformation;

use Closure;
use Domain\CurrentInformation\ViewModels\CurrentInformationViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InfoComponent extends Component
{

   public ?string $title;
   public ?string $text;
       public function __construct()
    {
        $ci = CurrentInformationViewModel::make()->show();
        $this->title = $ci['title'];
        $this->text = $ci['text'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.current-information.info-component');
    }
}
