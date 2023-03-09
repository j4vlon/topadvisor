@extends('layouts._layout')
@section('title', 'Полезная информация')

@section('content')
    <header class="header main-nav-header">
        <nav class="container header-navigation">
            <a href="/" class="top">
                <img src="{{ asset('assets/images/logos/advisor-black.svg') }}" alt="" />
            </a>
            <button class="burger hamburger hamburger--collapse" onclick="$('.burger').toggleClass('active un-active');"
                    id="nav-btn"></button>
            <x-front.header-component></x-front.header-component>
        </nav>
    </header>
    <div class="container">
        <div class="informations block-header">
            <h2>Полезная информация</h2>
        </div>

        @foreach($directions as $direction)
            <div class="row direction-wrapper">

                <div class="col-xl-12">
                    <h4 class="info-direction">{{ $direction->title }}</h4>
                </div>
                @foreach($direction->informations as $information)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="informations-wrapper">
                            <div class="info">
                    <span class="date">
                        {{ \Jenssegers\Date\Date::parse($direction->created_at)->format('j F, Y') }}
                    </span>
                            </div>
                            <div class="info-title">
                                <h5>{{ $information->title }}</h5>
                            </div>
                            <div class="files">
                                @foreach(json_decode($information->file_url) as $file)
                                    <a href="{{ $file }}" class="file-link" download>
                                        скачать &nbsp;&nbsp;<span><svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                                                       xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0209 7.07136L6.36407 12.7282M6.36407 12.7282L0.707212 7.07136M6.36407 12.7282V0.000296891"
                                    stroke="#6B99C3" stroke-width="1.5" />
                            </svg></span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
{{--        @if($information->count() > 1)--}}
{{--            <div class="informations load-more">--}}
{{--                <a class="load-more" data-load="load-more">Загрузить еще--}}
{{--                    <span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M2 1H10M10 1V9M10 1L1 10" stroke="#6B99C3" stroke-width="1.5" />--}}
{{--                    </svg> </span></a>--}}
{{--            </div>--}}
{{--        @endif--}}
    </div>
@endsection
