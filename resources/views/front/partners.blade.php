@extends('layouts._layout')
@section('content')
    <header class="header main-nav-header">
        <nav class="container header-navigation">
            <a href="/" class="top">
                <img src="{{ asset('assets/images/logos/advisor-black.svg') }}" alt=""/>
            </a>
            @include('front.header')
        </nav>
    </header>

    <div class="container">
        <div class="block-header">
            <h2 style="margin-bottom: 67px">Партнеры</h2>
        </div>
        <div class="partners-grid" style="margin-bottom: 90px">
            @foreach($partners as $partner)
                <div class="grid-item">
                    <div class="partner-image-area">
                        <img src="{{ $partner->file_url }}" alt="">
                    </div>
                    <div class="company-title">
                        <h4>{{ $partner->title }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
