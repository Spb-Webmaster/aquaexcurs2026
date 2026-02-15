<div class="modal-form-container mini  app_form_modal">
    <x-form.form-loader/>
    <x-form.form-response2 />
    <div class="modal_padding relative app_modal ">
        <div class="form_title">
            <div class="form_title__h1">Текущая информация</div>
            <div class="form_title__h2">Изменение текущей информации. Заголовок меняется только в админке.</div>
        </div>
        <div class="form_data app_form_data pad_b16">

            <x-form.form-textarea
                name="info"
                :value="$text"
            />

        </div>
        <div class="input-button ">
            <x-form.form-button class="w_265_px_important"  url="edit_info" >Изменить</x-form.form-button>
        </div>
    </div>
</div>

