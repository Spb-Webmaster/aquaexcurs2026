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
                name="Экскурсия"
                type="hidden"
                label="Экскурсия"
                :disabled="true"

                value="{{ $item->title }}"

            />
            <x-form.form-input
                name="ФИО"
                type="text"
                label="ФИО"
                value="{{ old('ФИО')?:'' }}"
                autofocus="{{ true }}"
                required="{{ true }}"

            />
            <x-form.form-input
                name="Телефон"
                type="tel"
                label="Телефон"
                class="imask"
                value="{{ old('Телефон')?:'' }}"
                required="{{ true }}"


            />


        </div>
        <div class="input-button ">
            <x-form.form-button class="w_265_px_important"  url="order_excursion" >Отправить</x-form.form-button>
        </div>
    </div>
    @endif
</div>

