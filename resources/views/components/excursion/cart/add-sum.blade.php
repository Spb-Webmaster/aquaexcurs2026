<div class="cart-cart app_cart-cart"  data-key="{{ $key }}">
    <div class="flex app_parent_cart">
        <div class="cart-cart__human">
            {{ $human }}
        </div>

        <div class="cart-cart__aqua_counter">

            <div class="aqua_counter">
                <div class="aqua_minus app_aqua_minus">-</div>
                <div class="digit-container"><span>1</span></div>
                <div class="aqua_plus app_aqua_plus">+</div>
            </div>

        </div>

        <div class="cart-cart__result ">

            <div class="flex items-center">
                <div class="app_cart_price cart_price ">
                    <span>{{ price($price) }}</span> <i class="not-italic">{{ config('currency.currency.RUB') }}</i>
                </div>
                <div
                    class="btn btn_add_sum cursor-pointer  app_add-human add-human user-select"
                    data-price="{{ $price }}" data-human="{{ $human }}" data-key="{{ $key }}">Добавить</div>

            </div>

        </div>
    </div>
    @if($desc)
        <div class="well__wrap">
            <div class="well">
                {!! $desc !!}
            </div>
        </div>
    @endif

</div>
