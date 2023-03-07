<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta itemprop="name" content="@yield('meta_title')">
    <meta itemprop="description" content="@yield('meta_descr')">
    <meta name="keywords" content="">
    <title>Topadvisor - @yield('title')</title>
    <!-- Обязательный (и достаточный) тег для браузеров -->
    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <meta property="og:image" content="{{ asset('assets/images/favicon.ico') }}"/>

    <!-- Дополнительные иконки для десктопных браузеров -->
{{--    <link type="image/png" sizes="16x16" rel="icon" href="{{ asset('assets/images/icons/favicon-16x16.png') }}">--}}
{{--    <link type="image/png" sizes="32x32" rel="icon" href="{{ asset('assets/images/icons/favicon-32x32.png') }}">--}}
{{--    <link type="image/png" sizes="96x96" rel="icon" href="{{ asset('assets/images/icons/favicon-96x96.png') }}">--}}
{{--    <link type="image/png" sizes="120x120" rel="icon" href="{{ asset('assets/images/icons/favicon-120x120.png') }}">--}}

{{--    <!-- Иконки для Android -->--}}
{{--    <link type="image/png" sizes="72x72" rel="icon" href="{{ asset('assets/images/icons/android-icon-72x72.png') }}">--}}
{{--    <link type="image/png" sizes="96x96" rel="icon" href="{{ asset('assets/images/icons/android-icon-96x96.png') }}">--}}
{{--    <link type="image/png" sizes="192x192" rel="icon" href="{{ asset('assets/images/icons/android-icon-192x192.png') }}">--}}
{{--    <link type="image/png" sizes="512x512" rel="icon" href="{{ asset('assets/images/icons/android-icon-512x512.png') }}">--}}
{{--    <link rel="manifest" href="{{ asset('assets/images/manifest.json') }}">--}}

    <!-- Иконки для iOS (Apple) -->
{{--    <link sizes="57x57" rel="apple-touch-icon" href="{{ asset('assets/images/icons/apple-touch-icon-57x57.png') }}">--}}
{{--    <link sizes="60x60" rel="apple-touch-icon" href="{{ asset('assets/images/icons/apple-touch-icon-60x60.png') }}">--}}
{{--    <link sizes="72x72" rel="apple-touch-icon" href="{{ asset('assets/images/icons/apple-touch-icon-72x72.png') }}">--}}
{{--    <link sizes="76x76" rel="apple-touch-icon" href="{{ asset('assets/images/icons/apple-touch-icon-76x76.png') }}">--}}
{{--    <link sizes="114x114" rel="apple-touch-icon" href="{{ asset('assets/images/icons/apple-touch-icon-114x114.png') }}">--}}
{{--    <link sizes="120x120" rel="apple-touch-icon" href="{{ asset('assets/images/icons/apple-touch-icon-120x120.png') }}">--}}
{{--    <link sizes="144x144" rel="apple-touch-icon" href="{{ asset('assets/images/icons/apple-touch-icon-144x144.png') }}">--}}
{{--    <link sizes="152x152" rel="apple-touch-icon" href="{{ asset('assets/images/icons/apple-touch-icon-152x152.png') }}">--}}
{{--    <link sizes="180x180" rel="apple-touch-icon" href="{{ asset('assets/images/icons/apple-touch-icon-180x180.png') }}">--}}

    <!-- Иконки для MacOS (Apple) -->
    <link color="#e52037" rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg') }}">

    <!-- Иконки и цвета для плиток Windows -->
{{--    <meta name="msapplication-TileColor" content="#2b5797">--}}
{{--    <meta name="msapplication-TileImage" content="{{ asset('assets/images/icons/mstile-144x144.png') }}">--}}
{{--    <meta name="msapplication-square70x70logo" content="{{ asset('assets/images/icons/mstile-70x70.png') }}">--}}
{{--    <meta name="msapplication-square150x150logo" content="{{ asset('assets/images/icons/mstile-150x150.png') }}">--}}
{{--    <meta name="msapplication-wide310x150logo" content="{{ asset('assets/images/icons/mstile-310x310.png') }}">--}}
{{--    <meta name="msapplication-square310x310logo" content="{{ asset('assets/images/icons/mstile-310x150.png') }}">--}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logos/advisor-black.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-table.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('manifest.json') }}"></script>
    <script src="{{ asset('push-worker.js') }}"></script>
    <script src="https://cdn.gravitec.net/storage/2c6f2ef71e9ac5784e9b6de8255b09b3/client.js" async></script>
</head>
<body>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <div class="container">
        Сайт находится в стадии доработки и заполнения. Для консультации вы можете связаться с нашими специалистами по телефону +998 91 009 39 00
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@yield('content')
@include('layouts.footer')
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V78HWZKNQS"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-V78HWZKNQS');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(90567729, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90567729" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>

