<div class="block breadcrumbs">
<ul>
    @foreach ($breadcrumbs as $breadcrumb)
        @if (!is_null($breadcrumb->url) && !$loop->last)
            <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li><li class="li_span"><span class="triangle"></span></li>
        @else
            <li class="active"><span>{{ $breadcrumb->title }}</span></li>
        @endif
    @endforeach
</ul>
</div>
