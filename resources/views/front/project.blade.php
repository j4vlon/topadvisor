@extends('layouts._layout')
@section('meta_title', $project->meta_title)
@section('meta_title', $project->meta_descr)
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
        <div class="bread-crumbs">
            <span class="gray">проекты / {{ $project->subservice->title }} / {{ $project->title }}</span>
        </div>
        <div class="title-box">
            <h3 class="box-title">{{ $project->title }}</h3>
            <div class="img-box">
                <img src="{{ $project->partner->file_url }}" alt=""/>
            </div>
        </div>
        <div class="wrapper-info-img page-info-img">
            <img src="{{ $project->project_img }}" alt=""/>
        </div>
        <div class="info-box">
            <div class="info-box-txt">

                <p>
                    {!! $project->descr !!}
                </p>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="consulting-wrapper">
            <div class="consulting-block">
                <div class="consulting-header">
                    <h3>{{ $project->form_title }}</h3>
                    <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                fill="white"></path>
                    </svg>
                </div>
                <div class="feedback-wrapper">
                    <form action="{{ route('feedback') }}" class="feedback-form" method="POST">
                        @csrf
                        <input type="text" class="form_input" name="name" placeholder="Введите ваше имя">
                        <input type="text" class="form_input" name="company_name" placeholder="Введите вашу компанию">
                        <input type="text" class="form_input" name="phone" placeholder="Введите ваш телефон">
                        <button href="" class="more-btn" type="submit">
                            <span>Оставить заявку</span>
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 1H10M10 1V9M10 1L1 10" stroke="white" stroke-width="1.5"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="articles-block external-indentation">
        <div class="container">
            <section id="articles">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            <div class="block-header">
                                <h2>Похожие проекты</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box single-box-area">
                    <div class="articles-slider owl-carousel">
                        @foreach($projects as $project)
                        <div class="single-box text-center">
                            <div class="article-link">
                                <a href="">{{ $project->subservice->title }}</a>
                            </div>
                            <div class="article-img">
                                <img src="{{ $project->partner->file_url }}" alt=""/>
                            </div>
                            <div class="article-info">
                                <div class="article-header">
                                    <h2>{{ $project->title }}</h2>
                                </div>
                                <!-- <div class="article-txt">
                                    <p>
                                      Стратегическое планирование позволит увидеть, каким будет
                                      ваш бизнес через несколько лет.
                                    </p>
                                    <span>время чтения: 10 минут</span>
                                  </div> -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <div class="view-all">
                <a href="{{ route('projects') }}" class="more">Посмотреть все
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

