@extends('layouts.layout')
<x-seo.meta
    title="{{ ($item->metatitle) ?: $item->title }}"
    description="{{ $item->description }}"
    keywords="{{ $item->keywords }}"
/>
@section('content')
    <main class="page id-{{ $item->id }}">
        <section>
        <div class="block relative item_customer_info">
            <x-current-information.info-component/>
        </div>
        </section>
        <section>
        <div class="block relative">
            <div class="page__title">
                <h1 class="h1">
                    {!! $item->title !!}
                </h1>
                @if($item->subtitle)
                    <div class="subtitle"> {!! $item->subtitle !!}</div>
                @endif
            </div>
            <div class="desc">
                {!! $item->text !!}
            </div>
            <div class="desc">
                {!! $item->text2 !!}
            </div>
            <x-content.content-faq-component :content="$item" />


        </div>
        </section>
    </main>
@endsection


