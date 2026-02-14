@props([
    'value' => $value,
])

<x-moonshine::layout.grid>

    <x-moonshine::layout.column adaptiveColSpan="12" colSpan="12">

        <x-moonshine::layout.box {{--:dark="true"--}} title="Продано билетов">

            @if(count($tickets))
                @foreach($tickets as $k => $ticket)
                    <div class="">{{ ++$k }}) {{ $ticket['series'] . ' '. $ticket['number'] }} | {{ price($ticket['price']) }} {{ config('currency.currency.RUB') }}</div>
                @endforeach
                <hr>
                <div class=""><strong>Продано билетов:</strong> {{ count($tickets) }}</div>
            @endif

            </x-moonshine::layout.box>

        </x-moonshine::layout.column>


    </x-moonshine::layout.grid>




