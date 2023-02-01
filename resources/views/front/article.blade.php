@extends('layouts._layout')
@section('title', $article->title)
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
        <div class="wrapper-info-img page-info-img">
            <img src="{{ $article->file_url }}" alt=""/>
        </div>
        <div class="info-box">
            <div class="bread-crumbs">
                <span class="gray">статьи / {{ $article->title }}</span>
            </div>
            <div class="block-header">
                <h2>{{ $article->title }}</h2>
            </div>
            <div class="author-wrapper">
                <div class="author">
                    <div class="author-img">
                        <img alt="" class="img-fluid move-animation" src="{{ $article->member->file_url }}"/>
                    </div>
                    <div class="author-dateails">
                        <p class="">{{ $article->member->name }}</p>
                        <span class="date">{{ date('d F, Y', strtotime($article->created_at)) }}</span>
                    </div>
                </div>
                <div class="gray-txt"><span>время чтения: 10 минут</span></div>
            </div>

            <p>{!! $article->descr !!}</p>
            <div class="info-box-txt">
                <div class="business-info-title">
                    <h3>{{ $article->descr_title }}</h3>
                </div>

                {!! $article->descr2 !!}
                <div class="info-box-img">
                    <img src="{{ $article->descr_img }}" alt=""/>
                    <div class="gray-txt">
                        <span>Фотограф: Анвар Абдурахимов</span>
                    </div>
                </div>
               {!! nl2br(e($article->default_txt)) !!}
            </div>
        </div>
    </div>

    <div class="articles-block external-indentation">
        <div class="container">
            <section id="articles">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            <div class="business-info-title">
                                <h3>Статьи по теме</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box">
                    <div class="articles-slider owl-carousel">
                        <x-front.articles-theme></x-front.articles-theme>
                    </div>
                </div>
            </section>
            <div class="view-all">
                <a href="" class="more">Посмотреть все
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
