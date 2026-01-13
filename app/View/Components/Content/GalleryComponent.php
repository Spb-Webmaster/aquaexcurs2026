<?php

namespace App\View\Components\Content;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GalleryComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public object|array $gallery)
    {
        $img = [];
        foreach ($gallery as $k => $image) {

            if ($image['json_gallery_text']) {
              $img[$k]['src'] = asset(intervention('384x238', $image['json_gallery_text'], 'images/news'));
              $img[$k]['link'] = asset(intervention('1000x619', $image['json_gallery_text'], 'images/news'));
            } else {
                break;
             }

                $img[$k]['alt'] = ($image['json_gallery_label'])??'';

        }
        $this->gallery = $img;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content.gallery-component');
    }
}
