<div class="menu_footer-menu-component">
    <nav>
        <ul class="top_menu app_top_menu">

            @if($menu_rendered)
                @foreach($menu_rendered as $item)

                    <li class="{{ $item['class_li'] }}  @if($item['parent']) parent @endif {{ active_linkMenu(asset($item['link']), 'find')  }}">
                        <a class="{{ $item['class'] }}" {{ $item['data'] }}  href="{{ asset($item['link']) }}">{{ $item['text'] }} @if($item['parent'])<em class="arrow"></em>@endif</a>

                    </li>

                @endforeach
            @endif

        </ul>
    </nav>
</div>
