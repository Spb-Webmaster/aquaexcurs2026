@props([
    'value' => $value,
])

<x-moonshine::layout.grid>

    <x-moonshine::layout.column adaptiveColSpan="12" colSpan="12">

        <x-moonshine::layout.box {{--:dark="true"--}} title="Продано билетов">

            @if(count($tickets))

                @foreach($tickets as $k => $ticket)

                    <div class="">{{ ++$k }}) {{ $ticket['number'] }} |
                        количество человек: {{ $ticket['quantity'] }} |
                        {{ $ticket['price'] }}
                    </div>
                @endforeach
                <hr>
                <div class=""><strong>Продано билетов:</strong> {{ count($tickets) }}</div>
                <div class=""><strong>Количество мест:</strong> {{ $calculation['total_places']  }}</div>
                <div class=""><strong>Осталось мест:</strong> {{ $calculation['remains']  }}</div>
            @endif

            </x-moonshine::layout.box>

        </x-moonshine::layout.column>


    </x-moonshine::layout.grid>




