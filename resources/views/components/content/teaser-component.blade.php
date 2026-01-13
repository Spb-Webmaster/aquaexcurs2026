@if(count($items))
<div class="content_teaser-component">
    @foreach($items as $item)
        <div class="_teaser">
            <div class="_teaser__left">
                @if($item->img)
                    <div class="card ">
                        <a href="{{ route('site_new', $item->slug) }}"><img src="{{ $item->teaser_img }}" alt="{{ $item->title }}"></a>
                    </div>
                @endif
            </div>
            <div class="_teaser__right">
                <div class="page__title">

                <h2 class="h2"><a href="{{ route('site_new', $item->slug) }}">{!!  $item->title !!}</a></h2>
                @if($item->subtitle)
                    <div class="subtitle"> {!! $item->subtitle !!}</div>
                @endif
                </div>
                <div class="desc">
                    {!! $item->text !!}
                </div>

            </div>
        </div>
    @endforeach
</div>
@endif
