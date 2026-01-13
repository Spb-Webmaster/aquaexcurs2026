@if(!is_null($item))
<div class="content_one-column-page-component">
    <div class="page__title">
        <h1 class="h1">
            {!! $item->title !!}
        </h1>
        @if($item->subtitle)
            <div class="subtitle"> {!! $item->subtitle !!}</div>
        @endif
    </div>
    <div class="html">{!! $item->html !!}
    </div>
    <div class="desc">
        {!! $item->text !!}
    </div>
    <div class="html">{!! $item->html2 !!}</div>
        <div class="desc">
        {!! $item->text2 !!}
    </div>


    <div class="_gallery"><x-content.gallery-component :gallery="$item->gallery" /></div>

    </div>
@endif
