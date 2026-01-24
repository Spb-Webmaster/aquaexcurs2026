@if(isset($item))
    <div class="excursion_speed-boat card no_padding">
        <div class="speed-boat__flex">
            <div class="speed-boat__left">

                <img src="{{ asset(intervention('488x237', $item->img, 'fleet/intervention')) }}" alt="{{ $item->title }}" width="488" height="237" />

            </div>
            <div class="speed-boat__right">

                <div class="speed-boat__content">
                    @if($item->title)
                        <h2 class="sb_title">{{ $item->title }}</h2>
                    @endif

                    @if($item->subtitle)
                        <div class="sb_subtitle">
                            {!!  $item->subtitle !!}
                        </div>
                    @endif

                    @if($item->desc)
                        <div class="desc sb_desc">
                            {!!  $item->desc !!}
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

@endif
