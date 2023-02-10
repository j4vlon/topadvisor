@extends('layouts._layout')
@section('title', $subservice->title)
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
    <!-- HERO BLOCK START -->
    <div class="container">
        <div class="business-info-wrapper business-info">
            <div class="block-header">
                <div class="bread-crumbs">
                    <span class="gray">услуги / {{ $subservice->title }}</span>
                </div>
                <h1>{{ $subservice->title }}</h1>
            </div>
            <a href="" class="more-btn" type="submit">
                <span>Оставить заявку</span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1H10M10 1V9M10 1L1 10" stroke="white" stroke-width="1.5"></path>
                </svg>
            </a>
        </div>
        <div class="page-info-img">
            <img src="{{ $subservice->file_url }}" alt=""/>
        </div>
        <!-- HERO BLOCK END -->
        <div class="business-info-body">
            <div class="business-info-title">
                <h3>{{ $subservice->descr_title }}</h3>
                <p>
                   {{ $subservice->default_txt }}
                </p>
            </div>
            <div class="business-info-txt">
                <p>
                    {!! $subservice->descr !!}
                </p>
            </div>
        </div>

        <div class="work-info-block">
            <div class="work-info-title">
                <div class="block-header">
                    <h2>Этапы работы</h2>
                </div>
            </div>

            <div class="work-info-body">
                @foreach($subservice->steps as $step)
                <div class="work-info-item">
                    <h3>{{ $step->index }}</h3>
                    <img src="{{ asset('assets/images/ellipse.svg') }}" alt=""/>
                    <p>
                       {{ $step->descr }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="card-wrapper">
            <div id="sticky">
                <div class="header-block">
                    <h2>Кому будет полезно</h2>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                </div>
            </div>
            @foreach($subservice->benefits as $benefit)
                <div class="bg-blue card">
                    <div class="card-body">
                        <div class="card-title-block">
                            <h5 class="card-title">{{ $benefit->title }}</h5>
                            <img src="{{ $benefit->file_url }}" alt="" width="70px" height="70px" style="border-radius: 100%">
                        </div>
                        <div class="card-txt-body">
                            <p class="card-text">
                                {{ $benefit->descr }}
                            </p>
                            <svg
                                width="31"
                                height="38"
                                viewBox="0 0 31 38"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                    fill="white"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="bg-darkblue card">
                <div class="card-body">
                    <div class="card-title-block">
                        <h5 class="card-title">Руководителю</h5>
                        <img src="images/head.svg" alt="" />
                    </div>
                    <div class="card-txt-body">
                        <p class="card-text">
                            Который усомнился в чистоте учета и отчетности своего штатного
                            бухгалтера, или аутсорсинговой бухгалтерии
                        </p>
                        <svg
                            width="31"
                            height="38"
                            viewBox="0 0 31 38"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                fill="white"
                            />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-gray card">
                <div class="card-body">
                    <div class="card-title-block">
                        <h5 class="card-title">Бухгалтеру</h5>
                        <img src="images/bookkeep.svg" alt="" />
                    </div>
                    <div class="card-txt-body">
                        <p class="card-text">
                            У которого накопилось много вопросов и проблем в 1С, и он не
                            знает как начать распутывать «клубок»
                        </p>
                        <svg
                            width="31"
                            height="38"
                            viewBox="0 0 31 38"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                fill="black"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-front.projects-accordion></x-front.projects-accordion>
    <!-- FEEDBACK SECTION START -->
    <div class="container">
        <div class="consulting-wrapper">
            <div class="consulting-block">
                <div class="consulting-header">
                    <h3>{{ $subservice->form_title }}</h3>
                    <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                fill="white"/>
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
    <!-- FEEDBACK SECTION END -->
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
                <a href="{{ route('articles') }}" class="more">Посмотреть все
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
