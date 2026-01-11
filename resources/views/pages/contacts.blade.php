@extends('layouts.layout')
<x-seo.meta
    title="{!!   (config2('moonshine.contact.metatitle'))? config2('moonshine.contact.metatitle') :'' !!}"
    description="{!!    (config2('moonshine.contact.description'))??'' !!}"
    keywords="{!! (config2('moonshine.contact.keywords'))??'' !!}"
/>
@section('content')

    <main class="constants">
        <section>
            <div class="block relative item_customer_info">
                <x-current-information.info-component/>
            </div>
        </section>

        <section class="block relative">
            <div class="page__title">
                <h1 class="h1">
                    {!! config2('moonshine.contact.title')!!}
                </h1>
                @if(config2('moonshine.contact.subtitle'))
                    <div class="subtitle"> {!! config2('moonshine.contact.subtitle') !!}</div>
                @endif
            </div>
            <div class="block_800">
                <div class="desc _desc_1">
                    {!! config2('moonshine.contact.text')!!}
                </div>
                <div class="desc  _desc_2">
                    {!! config2('moonshine.contact.text2')!!}
                </div>
            </div>
        </section>


        <div class="relative">
            <div style=" background: #f4f6ff" id="loader_wrapper" class="loader_wrapper active ">
                <div style="color:#ffffff" class="loader_map">Loading...</div>
            </div>

            <div class="JFormFieldMap_wrapper">
                <div id="JFormFieldMap" class="JFormFieldMap" style="width: 100%; height: 450px;"></div>
            </div>
        </div>
    </main>
    <script>
        var myMap;

        function getYaMap() {
            var myMap = new ymaps.Map("JFormFieldMap", {
                center: [59.935580, 30.322295],
                zoom: 16,
                controls: ['zoomControl', 'typeSelector', 'fullscreenControl']
            }, {searchControlProvider: 'yandex#search'});


            @foreach($contacts['json_piers'] as $k=>$contact)
                myPlacemark{{$k}} = new ymaps.Placemark([{{$contact['json_coordinates']}}], {balloonContent: '<h5>{{$contact['json_title']}}</h5><p class="jt_ph">{{format_phone($contact['json_phone'])}}</p><p class="jt_ph">{{$contact['json_email']}}</p> @if(isset($contact['json_text']))<p class="jt_ph2">{{$contact['json_text']}}</p>@endif'}, {
                iconLayout: 'default#image',
                iconImageHref: '{{ asset('/storage/contacts/myIcon_blue.png') }}',
                iconImageSize: [58, 55],
                iconImageOffset: [-28, -48]
            });
            @endforeach
            myMap.geoObjects
            @foreach($contacts['json_piers'] as $k=>$contact)
                .add(myPlacemark{{$k}})
            @endforeach ;
        }

    </script>
@endsection


