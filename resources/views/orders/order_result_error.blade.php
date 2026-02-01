@extends('layouts.layout')
<x-seo.meta
    title=""
    description=""
    keywords=""
/>
@section('content')

    <main class="order_result">

        {{--      @dump($order->toArray())
                  @dump($http_code)--}}
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
                    <h1 class="h1">{{ config2('moonshine.setting.order_error_label') }}</h1>
                    <div class="subtitle">{{ config2('moonshine.setting.order_error_sublabel') }}</div>
                </div>

            </div>
        </section>

        <section class="relative">
            <div class="block relative item_customer_info ">
                <div class="_info card ">

                    <div class="h3_blue"><span style="color: red">Ошибка</span></div>
                    <div class="desc">{!!  config2('moonshine.setting.order_error_desc') !!}</div>

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


