@extends('layouts.layout')
<x-seo.meta
    title=""
    description=""
    keywords=""
/>
@section('content')
    <main class="page-new id-main">
        <section>
            <div class="block relative item_customer_info">
                <x-current-information.info-component/>
            </div>
        </section>
        <section>
            <div class="block relative">
                <x-content.teaser-component :items="$items" />
            </div>
        </section>
    </main>
@endsection

