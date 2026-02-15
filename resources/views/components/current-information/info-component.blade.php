@props([
    'class' => ''
])
<div
    @if(auth()->user())
     class="_info card app_update info_update open-fancybox   {{ $class }}" data-form="edit_info"
        @else
     class="_info card {{ $class }}"
        @endif >
                    <div class="h3_blue"><span>{{ $title }}</span></div>
                    <p>{!! $text !!}</p>
            </div>
