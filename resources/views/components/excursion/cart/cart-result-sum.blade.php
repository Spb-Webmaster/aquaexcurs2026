<div class="cart_cart-result-sum hidden app_cart_cart-result ">

</div>


<div class="app-cart-total cart-total hidden">

    <div class="flex">
        <div class="cart-total__left"></div>
        <div class="cart-total__right cart-t">
            <hr class="">
            <div class="cart-total__result flex">
                <div class="app-cart-t mr-20 cart-total_sum_currency">
                    <span class="app-cart-sum"></span>
                    <i class="not-italic">{{ config('currency.currency.RUB') }}</i>
                </div>
                {{--{{ route('order') }}--}}
                <a href="#" data-url="{{ route('interim_request') }}" data-id="{{$id}}"
                    class="btn  font-normal send_to_basket app_send_to_basket">
                    <span class="mr-2">Купить        <i class="w-[20px] min-h-[5px] relative top-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                                                                         stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/></svg></i></span>


                </a>
            </div>
            <div class="app-type_ticket type_ticket">Детский билет продается только со взрослым</div>

        </div>
    </div>
</div>

<div class="app_temp_cart hidden">
    <div class="cart_item">
        <div class="flex flex_exh">
            <div class="cart_item__left">
                <div class="cart_item__human app_set_human"></div>
            </div>

            <div class="cart_item__right flex">
                <div class="cart_item__options">
                    <div class="cart_item__title">{{ $excursion }}</div>
                    <div class="py-1"></div>
                    <div class="ci_item_1"><span class="app_set_price"></span> {{ config('currency.currency.RUB') }} x <span
                            class="app_set_count"></span> чел.
                    </div>
                    <div class="ci_item_2"><span class="app_set_sum"></span> {{ config('currency.currency.RUB') }}</div>

                </div>
                <div class="">
                <span class="app_cart_item_del cart_item_del">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                          </svg>
                </span>
                </div>
            </div>
        </div>

    </div>
</div>
