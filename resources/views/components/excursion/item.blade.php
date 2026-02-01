<div class="excursion_item">
    <div class="relative excursion_item__flex">
        <div class="excursion_item__left">
            <div class="card no_padding margin-bottom-40">
                <a href="{{ $item->fancy_img }}" data-caption="{{ $item->title }}" data-fancybox="gallery"

                   @if($item->img) style="background-image: url({{ $item->full_img }}) @endif"

                   class="excursion_item__img"></a>
                @if(count($item->get_gallery()))
                    @foreach($item->get_gallery() as $gallery)
                        <a href="{{ $gallery['url'] }}" data-caption="{{($gallery['alt']?:$item->title)}}"
                           class="display_none" data-fancybox="gallery"></a>

                    @endforeach

                @endif

                @if($item->dont_register)
                    {{--Не продаем--}}
                    <div class="excursion_item__info-no-price">
                        <div class="excursion_item__card">
                            <div class="excursion_item__price">

                                @if($item->dont_register_price)
                                    <div class="__price">
                                        <span><i>{{ ($item->dont_register_prefix_price)??'' }}</i>{{ price($item->dont_register_price) }}</span>
                                        <span
                                            class="__current">{{ config('currency.currency.RUB') }}</span>
                                    </div>

                                    <div class="__buy">
                                        <a class="btn open-fancybox"
                                           data-form="{{ $item->dont_register_form }}"
                                           data-transfer='{"excursion_id": {{$item->id}}}'
                                           href="#"><span>{{ $item->dont_register_button }}</span>
                                        </a>
                                    </div>
                                @else
                                    <div class="__buy_100">
                                        <a class="btn open-fancybox"
                                           data-transfer='{"excursion_id": {{$item->id}}}'
                                           data-form="{{ $item->dont_register_form }}"
                                           href="#"><span>{{ $item->dont_register_button }}</span>
                                        </a>
                                    </div>
                                @endif

                            </div>
                            <div
                                class="excursion_item__full excursion_item__pier {{ (!$item->dont_register_price)? '__center' : ''  }}">
                                {!! $item->dont_register_desc !!}
                            </div>
                        </div>
                    </div>

                    {{--Не продаем--}}
                @else
                    {{--Продаем--}}
                    <div class="excursion_item__info-price">

                        <div class="ex_time">
                            <div class="ex_time__time-label"><span>Время отправления</span><span class="display_none">Время</span>
                            </div>
                            <div class="ex_time__time">{{ $item->departure_time }}</div>
                        </div>

                        <div class="ex_places">
                            <div class="ex_place__place-label">Осталось мест</div>
                            <div class="ex_place">90</div>
                        </div>

                        <div class="ex_price">
                            <div
                                class="ex_price__price">{{ price($item->price) }} {{ config('currency.currency.RUB') }}</div>
                            <div class="ex_price__pier">На
                                причале {{ ($item->price_pier)? price($item->price_pier) : price($item->price) }} {{ config('currency.currency.RUB') }}</div>

                        </div>


                    </div>
                    {{--Продаем--}}
                @endif
            </div>
            @if($item->dont_register)
                {{--Не продаем--}}

                {{--Не продаем--}}
            @else
                {{--Продаем--}}
                <div class="card no_padding">
                    <div class="excursion_cart-add-sum__wrapper">
                        @if($item->departure_time_desc )
                            <div class="departure_time">
                                {!!  $item->departure_time_desc !!}
                            </div>
                        @endif

                        <div class="excursion_wrap">
                            @if($item->price)
                                <x-excursion.cart.add-sum
                                    :id="$item->id"
                                    :price="$item->price"
                                    :desc="$item->price_desc"
                                    human="Взрослый"
                                    key="1"
                                />

                            @endif

                            @if($item->price_child)
                                <x-excursion.cart.add-sum
                                    :id="$item->id"
                                    :price="$item->price_child"
                                    :desc="$item->price_child_desc"
                                    human="Детский"
                                    key="2"
                                />
                            @endif

                            @if($item->price_advantage)
                                <x-excursion.cart.add-sum
                                    :id="$item->id"
                                    :price="$item->price_advantage"
                                    :desc="$item->price_advantage_desc"
                                    human="Льготный"
                                    key="3"
                                />
                            @endif
                        </div>


                        <div class="cart_items py-2" id="scroll-cart">
                            <x-excursion.cart.cart-result-sum
                                :id="$item->id"
                                :excursion="$item->title"
                            />
                        </div>
                    </div>
                </div>
                {{--Продаем--}}
            @endif
        </div>

        <div class="excursion_item__right">
            <div class="card no_padding ">

                <div
                    class="route_bg_blue">
                    @if($item->route)
                        @foreach($item->route as $route)
                            {{ trim($route['json_route_text']) }}
                            @if(!$loop->last)
                                {{ __(' - ') }}
                            @endif
                        @endforeach
                    @endif
                </div>

                <div class="relative excursion_item__right_padding">
                    @if($item->pier)
                        <div class="relative pb-7">
                            <h3 class="h3-rubik">Причал:</h3>
                            <p>{!!   $item->pier !!}</p>
                        </div>
                    @endif

                    @if($item->privilege)
                        <div class="relative pb-7">
                            <h3 class="h3-rubik">Преимущества:</h3>
                            <p>{!!  $item->privilege !!}</p>
                        </div>
                    @endif

                    @if($item->departure_time)
                        <div class="relative pb-7">
                            <h3 class="h3-rubik">Время отправления:</h3>
                            <p>{!!   $item->departure_time !!}</p>
                        </div>
                    @endif

                    @if($item->list_points->count())
                        <div class="relative pb-7">
                            <h3 class="h3-rubik">Вы увидите:</h3>
                            <ul>
                                @foreach($item->list_points as $point)
                                    <li class="relative">{{ $point['json_list_points_text']  }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($item->rent_text)
                        <div class="relative pb-7">
                            {!!   $item->rent_text !!}
                        </div>
                    @endif

                </div>

            </div>
        </div>

    </div>

    @if($item->yandex_map)
        <div class="item_yandex_map">
            {!! $item->yandex_map  !!}
        </div>
    @endif



    @if($item->FleetSpeedBoat->isNotEmpty())
        <div class="FleetSpeedBoat">
            @if(config2('moonshine.fleet_speedboat.json_price'))
                <div class="fleet_flex">
                    @foreach(config2('moonshine.fleet_speedboat.json_price') as $json_price)
                        <div class="fleet_item card">
                            <div class="fleet_item__flex">
                                <div class="json_title"><span class="h3_blue">{{ $json_price['json_title'] }}</span>
                                </div>
                                <div class="json_price"><span class="h3_blue">{{ $json_price['json_price'] }}</span>
                                </div>
                            </div>
                            @if($json_price['json_text'])
                                <div class="json_text">
                                    {!! $json_price['json_text'] !!}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
            @foreach($item->FleetSpeedBoat as $it)
                <x-excursion.fleet.speed-boat :item="$it"/>
            @endforeach
        </div>
    @endif

    @if($item->FleetShip->isNotEmpty())
        <div class="FleetShip">

            @if(config2('moonshine.fleet_ship.json_price'))
                <div class="fleet_flex">
                    @foreach(config2('moonshine.fleet_ship.json_price') as $json_price)
                        <div class="fleet_item card">
                            <div class="fleet_item__flex">
                                <div class="json_title"><span class="h3_blue">{{ $json_price['json_title'] }}</span>
                                </div>
                                <div class="json_price"><span class="h3_blue">{{ $json_price['json_price'] }}</span>
                                </div>
                            </div>
                            @if($json_price['json_text'])
                                <div class="json_text">
                                    {!! $json_price['json_text'] !!}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif

            @foreach($item->FleetShip as $it)
                <x-excursion.fleet.ship :item="$it"/>
            @endforeach
        </div>
    @endif


    @if($item->FleetSchoolboy->isNotEmpty())
        <div class="FleetShip">
            @if(config2('moonshine.fleet_school_boy.json_price'))
                <div class="fleet_flex">
                    @foreach(config2('moonshine.fleet_school_boy.json_price') as $json_price)
                        <div class="fleet_item card">
                            <div class="fleet_item__flex">
                                <div class="json_title"><span class="h3_blue">{{ $json_price['json_title'] }}</span>
                                </div>
                                <div class="json_price"><span class="h3_blue">{{ $json_price['json_price'] }}</span>
                                </div>
                            </div>
                            @if($json_price['json_text'])
                                <div class="json_text">
                                    {!! $json_price['json_text'] !!}
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
            @foreach($item->FleetSchoolboy as $it)
                <x-excursion.fleet.ship :item="$it"/>
            @endforeach
        </div>
    @endif

    @if($item->html)
        <div class="fleet__html">
            <div class="fl_pad">{!!  $item->html !!}</div>
        </div>
    @endif

    @if($item->desc )
        <div class="excursion_item__desc">
            <div class="desc desc_1">
                {!! $item->desc !!}
            </div>
            @if( $item->desc2 )
                <div class="desc desc_2">
                    {!! $item->desc2 !!}
                </div>
            @endif
        </div>
    @endif



</div>
















