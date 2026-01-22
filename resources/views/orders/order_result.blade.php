@extends('layouts.layout')
<x-seo.meta
    title=""
    description=""
    keywords=""
/>
@section('content')

    <main class="order_result">
        @dump($order->toArray())
        {{--
                <section>
                    <div class="block relative item_customer_info">
                        <x-current-information.info-component/>
                    </div>
                </section>
        --}}
        <section class="relative">
            <div class="block">
                <div class="page__title pad_t50_important ">
                    <h1 class="h1">{{ config2('moonshine.setting.order_result_label') }}</h1>
                    <div class="subtitle">{{ config2('moonshine.setting.order_result_sublabel') }}</div>
                </div>

            </div>
        </section>

        <section class="relative">
            <div class="block relative item_customer_info ">
                <div class="_info card ">

                    <div class="h3_blue"><span>Ваучер: 9234 </span></div>

                    <div class="cart_items py-2">
                        <div class="cart_cart-result-sum hidden  active">
                            @foreach($order['order']['items'] as $item)

                                <div class="new-block-result-cart" data-key="{{ $item['human_id'] }}">
                                    <div class="cart_item">
                                        <div class="flex flex_exh">
                                            <div class="cart_item__left">
                                                <div class="cart_item__human ">{{ $item['human'] }}</div>
                                            </div>

                                            <div class="cart_item__right flex">
                                                <div class="cart_item__options">
                                                    <div class="cart_item__title"><a target="_blank"
                                                                                     href="{{ route('site_excursion', ['slug' => $order['order']['slug']]) }}">{{ $order['order']['title'] }}</a>
                                                    </div>
                                                    <div class="py-1"></div>
                                                    <div class="ci_item_1"><span
                                                            class="">{{ $item['price'] }}</span> {{ config('currency.currency.RUB') }}
                                                        x <span class="">{{ $item['count'] }}</span> чел.
                                                    </div>
                                                    <div class="ci_item_2"><span
                                                            class="">{{ $item['total_price'] }}</span> {{ config('currency.currency.RUB') }}
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class=" cart-total hidden active">

                            <div class="flex">
                                <div class="cart-total__left"></div>
                                <div class="cart-total__right cart-t">
                                    <hr class="">
                                    <div class="cart-total__result flex">
                                        <div class="mr-20 cart-total_sum_currency">
                                            <span class="">{{ price($order['order']['total_price']) }}</span>
                                            <i class="not-italic">{{ config('currency.currency.RUB') }}</i>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="relative">
            <div class="block">

                <div class="order__flex">
                    <div class="order__left">

                    </div>
                    <div class="order__right">

                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection


