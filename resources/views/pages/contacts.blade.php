@extends('layouts.layout')
<x-seo.meta
    title="{!!   (config2('moonshine.contact.metatitle'))? config2('moonshine.contact.metatitle') :'' !!}"
    description="{!!    (config2('moonshine.contact.description'))??'' !!}"
    keywords="{!! (config2('moonshine.contact.keywords'))??'' !!}"
/>
@section('content')


@endsection

