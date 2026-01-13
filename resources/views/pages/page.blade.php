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
            <x-content.one-column-page-component :content="$item" />
            <x-content.content-faq-component :content="$item" />
        </div>
        </section>
    </main>
@endsection


