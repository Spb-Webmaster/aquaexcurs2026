@if($faq)
<div class="content_content-faq">
    @if($faq_title)
        <h3 class="h3">{{ $faq_title }}</h3>
    @endif
    <div class="faq__products">

    @foreach($faq as $item)
            <div class="faq_t_r app_tr">
                <div class="faq_spb_title"><span>{{ (is_array($item))? $item['faq_question'] : $item->faq_question }}</span> <span class="faq_close app_close">+</span></div>
                <div class="faq_spb_request_wrap app_answer">
                    <div class="faq_spb_request desc">{!! (is_array($item))? $item['faq_answer'] : $item->faq_answer  !!}</div>
                </div>
            </div>
    @endforeach

    </div>
</div>
@endif
