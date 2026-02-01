@extends('layouts.layout')
<x-seo.meta
        title=""
        description=""
        keywords=""
/>
@section('content')

    <main class="order">

        {{--
                <section>
                    <div class="block relative item_customer_info">
                        <x-current-information.info-component/>
                    </div>
                </section>
        --}}

        <section class="relative">
            <div class="block">
                <div class="page__title pad_t50_important pad_b40_important">
                    <h1 class="h1">{{ config2('moonshine.setting.order_label') }}</h1>
                    <div class="subtitle">{{ config2('moonshine.setting.order_sublabel') }}</div>
                </div>

            </div>
        </section>

        <section class="relative">
            <div class="block">
                <div class="alert-warning">{{ config2('moonshine.setting.order_warning1') }}</div>
            </div>
        </section>

        <section class="relative">
            <div class="block">

                <div class="order__flex">
                    <div class="order__left">
                        <div class="form_data  pad_b16">
                            <x-form
                                    :action="route('final_request')"
                            >
                                <x-form.form-input
                                        name="username"
                                        type="text"
                                        :label="config('site.mail.username')"
                                        value="{{ old('username')?:'' }}"
                                        required="{{ true }}"

                                />
                                <x-form.form-input
                                        name="phone"
                                        type="tel"
                                        :label="config('site.mail.phone')"
                                        class="imask"
                                        value="{{ old('phone')?:'' }}"
                                        required="{{ true }}"
                                />
                                <x-form.form-input
                                        name="email"
                                        type="email"
                                        :label="config('site.mail.email')"
                                        class=""
                                        value="{{ old('email')?:'' }}"
                                />

                                <x-form.form-input-datepicker
                                        name="excursion_date"
                                        :label="config('site.mail.excursion_date')"
                                        value="{{ (old('excursion_date'))?: '' }}"
                                />

                                <x-form.form-checkbox
                                    name="offer"
                                    value="1"
                                        class="offer-agreement"
                                        :checked="false"
                                        title="{!! config2('moonshine.setting.offer') !!}"

                                />


                                <div class="input-button pad_t20_important ">
                                    <x-form.form-button class="w_265_px_important" type="submit">
                                        Оплатить {{ price($order['total_price']) }} {{ config('currency.currency.RUB') }}
                                    </x-form.form-button>
                                </div>
                            </x-form>
                        </div>

                    </div>
                    <div class="order__right">
                        <div class="cart_items py-2">
                            <div class="cart_cart-result-sum hidden  active">
                                @foreach($order['items'] as $item)
                                    <div class="new-block-result-cart" data-key="{{ $item['human_id'] }}">
                                        <div class="cart_item">
                                            <div class="flex flex_exh">
                                                <div class="cart_item__left">
                                                    <div class="cart_item__human ">{{ $item['human'] }}</div>
                                                </div>

                                                <div class="cart_item__right flex">
                                                    <div class="cart_item__options">
                                                        <div class="cart_item__title"><a target="_blank"
                                                                                         href="{{ route('site_excursion', ['slug' => $order['slug']]) }}">{{ $order['title'] }}</a>
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
                                                <span class="">{{ price($order['total_price']) }}</span>
                                                <i class="not-italic">{{ config('currency.currency.RUB') }}</i>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection

