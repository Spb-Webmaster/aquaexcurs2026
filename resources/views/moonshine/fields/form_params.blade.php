@props([
    'value' => $value,
])
@if(count($array))


        <x-moonshine::layout.grid>

            <x-moonshine::layout.column adaptiveColSpan="12" colSpan="12">

                <x-moonshine::layout.box :dark="true" title="Форма">
                    @foreach($array as $item)
                        <br>
                        {{ $item['name'] }} - {{ $item['value'] }}

                        <x-moonshine::layout.divider/>

                    @endforeach

                </x-moonshine::layout.box>

            </x-moonshine::layout.column>


        </x-moonshine::layout.grid>








@endif
