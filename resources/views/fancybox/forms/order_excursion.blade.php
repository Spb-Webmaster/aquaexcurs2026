<div class="modal-form-container mini  app_form_modal">
    @if($item)
    <x-form.form-loader/>
    <x-form.form-response />
    <div class="modal_padding relative app_modal ">
        <div class="form_title">
            <div class="form_title__h1">{{ $item->title }}</div>
            <div class="form_title__h2">Укажите свой номер телефона, мы перезвоним вам в ближайшее
                время.</div>
        </div>
        <div class="form_data app_form_data pad_b16">

            <x-form.form-input
                name="excursion_id"
                type="hidden"
                :disabled="true"
                value="{{ $item->id }}"

            />
            <x-form.form-input
                name="username"
                type="text"
                :label="config('site.mail.username')"
                value="{{ old('username')?:'' }}"
      {{--          autofocus="{{ true }}"--}}
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
            <x-form.form-input
                name="quantity"
                type="number"
                :label="config('site.mail.quantity')"
                class=""
                min="1"
                max="50"
                value="{{ old('quantity')?:'' }}"
            />

            <x-form.form-input-datepicker
                name="excursion_date"
                :label="config('site.mail.excursion_date')"
                value="{{ (old('excursion_date'))?: '' }}"
            />


        </div>
        <div class="input-button ">
            <x-form.form-button class="w_265_px_important"  url="order_excursion" >Отправить</x-form.form-button>
        </div>
    </div>
    @endif
</div>

