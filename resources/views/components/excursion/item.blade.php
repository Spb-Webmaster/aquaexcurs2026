<div class="excursion_item excursion_item__card">
    <div class="excursion_item__one">
        <a href="{{ route('site_excursion', ['slug' => $item->slug ]) }}">
            <span
                @if($item->img) style="background-image: url({{ Storage::url($item->img) }}) @endif"
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
        <div class="excursion_item__price">
            <div class="__price">
                <span>{{ price($item->price) }}</span> <span class="__current">{{ config('currency.currency.RUB') }}</span>
            <div class="display_1024">На причале — {{ ($item->price_pier)?:$item->price }} {{ config('currency.currency.RUB') }}</div>
            </div>
            <div class="__buy"><a class="btn" href="{{ route('site_excursion', ['slug' => $item->slug ]) }}"><span>Купить</span></a></div>

        </div>
        <div class="excursion_item__pier">
            На причале — <span>{{ ($item->price_pier)?:$item->price }}</span> {{ config('currency.currency.RUB') }}
        </div>
        </div>
    </div>
</div>
