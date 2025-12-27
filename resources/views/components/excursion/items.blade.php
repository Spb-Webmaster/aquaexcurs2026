<div class="excursion_items">
    @if(count($items))
        <div class="custom-block">
            <div class="excursion_items__flex">
                @foreach($items as $item)

                                   <x-excursion.item :item="$item"/>

                @endforeach
            </div>
        </div>
    @endif
</div>
