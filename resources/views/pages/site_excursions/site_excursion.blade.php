@extends('layouts.layout')
<x-seo.meta
    title="{{ ($item->metatitle) ? : $item->title }}"
    description="{{ ($item->description) ? : '' }}"
    keywords="{{ ($item->keywords) ? : '' }}"
/>
@section('content')

<main class="excursion">
<section>
    <div class="block relative item_customer_info">
        <x-current-information.info-component/>
    </div>
</section>

<section class="relative">
    <div class="block relative">
        <div class="excursion__title">
        <h1 class="h1">
            {{ $item->title }}
        </h1>
        @if($item->subtitle)
            <div class="subtitle">{!! $item->subtitle  !!}</div>
        @endif
        </div>
        <x-excursion.item :item="$item" />
    </div>
</section>

{{ Breadcrumbs::render('site_excursion', $item) }}

</main>
@endsection

