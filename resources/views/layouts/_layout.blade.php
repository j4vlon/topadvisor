<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta itemprop="name" content="@yield('meta_title')">
    <meta itemprop="description" content="@yield('meta_descr')">
    <meta name="keywords" content="">
    <meta itemprop="image" content="https://lorempixel.com/400/200/">
    <title>Topadvisor - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-table.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

</body>
</html>

