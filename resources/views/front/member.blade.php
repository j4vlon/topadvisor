@extends('layouts._layout')
@section('title', $member->name)
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
        <div class="team-member">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="team-member-img-block">
                        <img src="{{ $member->file_url }}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="team-member-info">
                        <h2>{{ $member->name }}</h2>
                        <p>{{ $member->work_post }}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="team-member-job">
                        <p>{{ $member->descr }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="articles-block">
        <div class="container">
            <section id="articles">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            <div class="block-header">
                                <h3 class="box-title">Статьи</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box">
                    <div class="articles-slider owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3300px;">
                                @foreach($member->articles as $articles)
                                    <div class="owl-item active" style="width: 306px; margin-right: 24px;">
                                        <div class="single-box">
                                            <div class="author">
                                                <div class="author-img">
                                                    <img alt="" class="img-fluid move-animation"
                                                         src="{{ $member->file_url }}">
                                                </div>
                                                <div class="author-dateails">
                                                    <p class="">{{ $member->name }}</p>
                                                    <span class="date">{{ \Jenssegers\Date\Date::parse($articles->created_at)->format('j F Y') }}</span>
                                                </div>
                                            </div>
                                            <div class="article-img">
                                                <img src="{{ $articles->file_url }}" alt="">
                                            </div>
                                            <div class="article-info">
                                                <div class="article-link">
                                                    <a href="{{ route('article', $articles->slug) }}">раздел статьи</a>
                                                </div>
                                                <div class="article-header">
                                                    <h2>{{ $articles->title }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="articles-block external-indentation">
        <div class="container">
            <section id="articles">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            <div class="block-header">
                                <h3 class="box-title">Проекты</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-box single-box-area">
                    <div class="articles-slider owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer project-owl-area">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2640px;">
                                @foreach($projects as $project)
                                <div class="owl-item">
                                    <div class="single-box text-center">
                                        <div class="article-link">
                                            <a href="{{ route('category', $project->subservice->slug) }}">{{ $project->subservice->title }}</a>
                                        </div>
                                        <div class="article-img">
                                            <img src="{{ $project->partner->file_url }}" alt="">
                                        </div>
                                        <div class="article-info">
                                            <div class="article-header">
                                                <h2>{{ $project->title }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>

            </section>

        </div>
    </div>
    <div class="view-all text-center">
        <a href="{{ route('team') }}" class="more" style="color:#6B99C3">Другие члены команды
            <span>
              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 1H10M10 1V9M10 1L1 10" stroke="#6B99C3" stroke-width="1.5"/>
              </svg>
            </span>
        </a>
    </div>
@endsection
