<div class="excursion_item excursion_item__card">
    <div class="excursion_item__one">
        <a href="{{ route('site_excursion', ['slug' => $item->slug ]) }}">
            <span
                @if($item->img) style="background-image: url({{ $item->teaser_img }}) @endif"
                class="excursion_item__img"></span>
        </a>
    </div>
    <div class="excursion_item__two flex-direction__column">
        <div class="__column_1">
            <div class="excursion_item__title">
                <div class="relative">
                    <h2 class="">
                        <a class="up"
                           href="{{ route('site_excursion', ['slug' => $item->slug ]) }}">{{ $item->title }}</a>
                    </h2>
                    @if(count($item->teaser))
                        <ul class="excursion_item__teaser">
                            @foreach($item->teaser as $teaser)
                                <li>{!! $teaser['json_teaser_text'] !!}</li>
                            @endforeach
                        </ul>
                    @endif

                </div>

            </div>
        </div>
        <div class="__column_2">

            @if($item->dont_register)
                {{--Не продаем--}}
                <div class="excursion_item__price">

                    @if($item->dont_register_price)
                        <div class="__price">
                            <span><i>{{ ($item->dont_register_prefix_price)??'' }}</i>{{ price($item->dont_register_price) }}</span>
                            <span
                                class="__current">{{ config('currency.currency.RUB') }}</span>
                            <div class="display_1024">{!! $item->dont_register_desc !!}</div>
                        </div>

                        <div class="__buy"><a class="btn open-fancybox" data-form="{{ $item->dont_register_form }}" data-transfer='{"excursion_id": {{$item->id}}}'
                                              href="#"><span>{{ $item->dont_register_button }}</span></a>
                        </div>
                    @else
                        <div class="__buy_100"><a class="btn open-fancybox" data-form="{{ $item->dont_register_form }}" data-transfer='{"excursion_id": {{$item->id}}}'
                                              href="#"><span>{{ $item->dont_register_button }}</span></a>
                        </div>
                    @endif

                </div>
                <div class="excursion_item__pier {{ (!$item->dont_register_price)? '__center' : ''  }}">
                    {!! $item->dont_register_desc !!}
                </div>

                {{--Не продаем--}}
            @else
                {{--Продаем--}}
                <div class="excursion_item__price">
                    <div class="__price">
                        <span>{{ price($item->price) }}</span> <span
                            class="__current">{{ config('currency.currency.RUB') }}</span>
                        <div class="display_1024">На причале
                            — {{ ($item->price_pier)?:$item->price }} {{ config('currency.currency.RUB') }}</div>
                    </div>
                    @if($item->price_hide)
                    <div class="__buy">
                            <a class="btn"
                               href="{{ route('site_excursion', ['slug' => $item->slug ]) }}">
                                <span>Купить</span>
                            </a>
                    </div>
                    @endif
                </div>
                <div class="excursion_item__pier">
                    На причале —
                    <span>{{ ($item->price_pier)?:$item->price }}</span> {{ config('currency.currency.RUB') }}
                </div>
                {{--Продаем--}}
            @endif

        </div>
    </div>
</div>
