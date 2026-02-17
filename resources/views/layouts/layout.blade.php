<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  {{--  {!!   config('google.google_tag.head') !!}--}}
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    ])
    <link rel="apple-touch-icon" sizes="180x180" href="{{ config('app.app_url') }}/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ config('app.app_url') }}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ config('app.app_url') }}/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ config('app.app_url') }}/favicon/site.webmanifest">
    <meta name="yandex-verification" content="7065b2341e042350" />
    <title>@yield('title', config('seo.seo.title'))</title>
    <meta name="description" content="@yield('description',  config('seo.seo.description'))"/>
    <meta name="keywords" content="@yield('keywords',  config('seo.seo.keywords'))"/>
</head>
<body @if(auth()->user()) class="auth_user" @endif>
<div id="back-to-top"></div>
{{--  {!!  config('google.google_tag.body') !!}  --}}
    <div class="content_  @yield('class')  {{ route_name() }}" >
        <x-message.message/>
        <x-message.message_error/>

 @include('templates.axeld.header')
 @yield('content')
</div><!--.content_-->
 @include('templates.axeld.footer')
<x-mobile.mobile-menu />
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=106871364', 'ym');

    ym(106871364, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/106871364" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>

