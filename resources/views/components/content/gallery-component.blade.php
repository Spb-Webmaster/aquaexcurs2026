@if(count($gallery))
    <div class="content_gallery_component relative block">

        <div class="gallery__flex">
        @foreach($gallery as $image)

            <div class="">
                <a href="{{ $image['link'] }}" data-caption="{{$image['alt']}}" data-fancybox="gallery">
                    <img src="{{$image['src']}}" alt="{{$image['alt']}}" />
                </a>
            </div>

        @endforeach
        </div>
    </div>
@endif
