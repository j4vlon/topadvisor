@extends('layouts._layout')
@section('title', 'Статьи')
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
        <!-- PROJECTS BLOCK START -->
        <div class="project-block">
            <div class="container">
                <div class="accordion-box">
                    <div class="block-header">
                        <h2>Статьи</h2>
                    </div>
                    <div class="article-accordion accordion-body">
                        <div class="accordion-container">
                            <button type="button" class="accordion" id="accordion">
                            <span class="accordion-title">
                                Отрасль
                            </span>
                            </button>
                            <div class="panel">
                                <ul class="accordion-list">
                                    <ul class="accordion-list">
                                        @foreach($industries as $industry)
                                            <a class="accordion-list-item btn-accordion industries"
                                               data-direction="{{ $industry->id }}">
                                                {{ $industry->title }}
                                            </a>
                                        @endforeach
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <button type='button' class="accordion" id="accordion">
                            <span class="accordion-title">
                                Тип
                            </span>
                            </button>
                            <div class="panel">
                                <ul class="accordion-list">
                                    @foreach($subservices as $subservice)
                                        <a class="accordion-list-item btn-accordion subservice" data-id="{{ $subservice->id }}">{{
                                    $subservice->title }}</a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <button type="button" class="accordion" id="accordion">

                            <span class="accordion-title">
                                Специалисты
                            </span>
                            </button>
                            <div class="panel">
                                <ul class="accordion-list subservices-list">
                                    @foreach($members as $member)
                                    <a class="accordion-list-item btn-accordion member" data-id="{{ $member->id }}">{{ $member->name }}</a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="accordion-container">
                            <button type="button" class="accordion" id="accordion">

                            <span class="accordion-title">
                                Сортировка
                            </span>
                            </button>
                            <div class="panel">
                                <ul class="accordion-list subservices-list">
                                    <a href="" class="accordion-list-item btn-accordion date" date="date">По дате</a>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- PROJECTS BLOCK END -->

        <div class="articles-box">
            <div class="row article-row">
                @foreach($articles as $article)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="artcile-card">
                            <div class="author">
                                <div class="author-img">
                                    <img alt="" class="img-fluid move-animation" src="{{ $article->member->file_url }}" />
                                </div>
                                <div class="author-dateails">
                                    <p class="">{{ $article->member->name }}</p>
                                    <span class="date">{{ \Jenssegers\Date\Date::parse($article->created_at)->format('j F, Y')
                                }}</span>
                                </div>
                            </div>
                            <div class="article-img">
                                <img src="{{ $article->file_url }}" alt="" />
                            </div>
                            <div class="article-info">
                                <div class="article-link">
                                    <a href="{{ route('article',$article->slug) }}">раздел статьи</a>
                                </div>
                                <div class="article-header">
                                    <h2>{{ $article->title }}</h2>
                                </div>
                                <div class="article-txt">
                                    <p>
                                        {{ $article->short_descr }}
                                    </p>
                                    <span>время чтения: {{ $article->read_time }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if($articles->count() == 16)
            <div class="load-more">
                <a class="load-more" data-load="load-more">Загрузить еще
                    <span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 1H10M10 1V9M10 1L1 10" stroke="#6B99C3" stroke-width="1.5" />
                    </svg> </span></a>
            </div>
            @endif
        </div>
    </div>
@endsection
