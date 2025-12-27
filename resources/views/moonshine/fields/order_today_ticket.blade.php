@props([
    'value' => $value,
])


    <x-moonshine::layout.grid>

        <x-moonshine::layout.column adaptiveColSpan="12" colSpan="12">

            <x-moonshine::layout.box :dark="true" title="Продано билетов">
                <br>
                {{ $count_tickets }}


            </x-moonshine::layout.box>

        </x-moonshine::layout.column>


    </x-moonshine::layout.grid>




