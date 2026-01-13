@props([
    'class' => ''
])
<div class="current_information {{ $class }}">
    <div class="current_information__left">
        <h1 class="h1 up">Наши <span>экскурсии</span></h1>
        <div class="ci__title">Выберите идеальный маршрут для вашего путешествия.</div>
        <div class="ci__subtitle">Судоходная компания «Аква-экскурс» проводит регулярные дневные теплоходные экскурсии и ночные прогулки на разводку мостов.</div>
    </div>
    <div class="current_information__right">

        <x-current-information.info-component />

    </div>

</div>
