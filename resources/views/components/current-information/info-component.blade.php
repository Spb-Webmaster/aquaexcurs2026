@props([
    'class' => ''
])
<div class="_info card app_update info_update {{ $class }}">
    <div class="h3_blue"><span>{{ $title }}</span></div>
    <p>{!! $desc !!}</p>
</div>
