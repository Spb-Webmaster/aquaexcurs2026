@extends('layouts.layout')
<x-seo.meta
    title="{!!  (config2('moonshine.home.metatitle')) !!}"
    description="{!!  (config2('moonshine.home.description')) !!}"
    keywords="{!!  (config2('moonshine.home.keywords'))  !!}"
/>
@section('content')

    <section class="">
        <div class="block relative">
            <x-current-information.current-information-component />
        </div>
    </section>
    <section class="home_excursion">
        <div class="block relative">
          <x-excursion.items-component />
        </div>
    </section>
    <section class="home_content">
        <div class="block relative">
          <x-content.one-column-component route="home" />
        </div>
    </section>

@endsection
{{-- test запись }}
{{-- test запись }}
{{-- test запись }}
{{-- test запись }}
{{-- test запись }}
{{-- test запись }}
{{-- test запись }}
{{-- test запись }}
{{-- test запись }}
