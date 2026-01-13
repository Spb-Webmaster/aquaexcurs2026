@props([
    'class' => ''
])
<div class="current_information {{ $class }}">
    <div class="current_information__left">
        <h1 class="h1 up">{!! config2('moonshine.home.title_exc') !!}</h1>
        <div class="ci__title">{!! config2('moonshine.home.ci_title') !!}</div>
        <div class="ci__subtitle">{!! config2('moonshine.home.ci_subtitle') !!}</div>
    </div>
    <div class="current_information__right">
        <x-current-information.info-component />
    </div>

</div>
