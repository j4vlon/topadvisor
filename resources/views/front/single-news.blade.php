@extends('layouts._layout')
@section('meta_title', $news->meta_title)
@section('meta_title', $news->meta_descr)
@section('content')
    <header class="header main-nav-header">
        <nav class="container header-navigation">
            <a href="/" class="top">
                <img src="{{ asset('assets/images/logos/advisor-black.svg') }}" alt=""/>
            </a>
            <button class="burger hamburger hamburger--collapse" onclick="$('.burger').toggleClass('active un-active');" id="nav-btn"></button>
            <x-front.header-component></x-front.header-component>
        </nav>
    </header>
    <div class="container">
        <div class="wrapper-info-img page-info-img">
            <img src="{{ $news->file_url }}" alt=""/>
        </div>
        <div class="author-dateails">
            <span class="date">{{ \Jenssegers\Date\Date::parse($news->created_at)->format('j F Y') }}</span>
        </div>
        <div class="info-box news-container">
            <div class="news block-header">
                <h2>{{ $news->title }}</h2>
            </div>
{{--            <div class="author-wrapper">--}}
{{--                <div class="author">--}}
{{--                    <div class="author-img">--}}
{{--                        <img alt="" class="img-fluid move-animation" src="{{ $news->member->file_url }}"/>--}}
{{--                    </div>--}}
{{--                    <div class="author-dateails">--}}
{{--                        <p class="">{{ $article->member->name }}</p>--}}
{{--                        <span class="date">{{ \Jenssegers\Date\Date::parse($news->created_at)->format('j F Y') }}</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="gray-txt"><span>время чтения: {{ $news->read_time }}</span></div>--}}
{{--            </div>--}}

            <p>{!! $news->descr !!}</p>
        </div>
    </div>

    <div class="articles-block external-indentation">
        <div class="container">
            <section id="articles">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            <div class="business-info-title">
                                <h3>Похожие новости</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news testimonial-box">
                    <div class="articles-slider owl-carousel">
                        @foreach($slider_news as $new)
                        <div class="single-box">
                            <div class="author">
                            </div>
                            <div class="article-img">
                                <img src="{{ $new->file_url }}" alt="" />
                            </div>
                            <div class="author-dateails">
                                <span class="date">{{ \Jenssegers\Date\Date::parse($new->created_at)->format('j F Y') }}</span>
                            </div>
                            <div class="article-info">
                                <div class="article-header">
                                    <h2>{{ $new->title }}</h2>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <div class="view-all">
                <a href="{{ route('news') }}" class="more">Посмотреть все
                    <span>
              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"></path>
              </svg>
            </span>
                </a>
            </div>
        </div>
    </div>
@endsection
