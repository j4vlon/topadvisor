@extends('layouts._layout')
@section('content')
    <header class="header header-wrapper">
        <nav class="container header-navigation">
            <a href="/" class="top">
                <svg width="95" height="51" viewBox="0 0 95 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M40.902 7.44849C32.0326 7.44849 24.8223 14.515 24.8223 23.2368C24.8223 31.9585 32.0326 39.0251 40.902 39.0251C49.7714 39.0251 56.9818 31.9585 56.9818 23.2368C56.9818 14.515 49.7714 7.44849 40.902 7.44849ZM40.902 34.2504C34.7126 34.2504 29.6717 29.3484 29.6717 23.2368C29.6717 17.1252 34.7126 12.2232 40.902 12.2232C47.0914 12.2232 52.1323 17.1252 52.1323 23.2368C52.1323 29.3484 47.0914 34.2504 40.902 34.2504Z"
                        fill="white"/>
                    <path
                        d="M78.9947 7.44849C74.3367 7.44849 70.1891 9.61301 67.3815 13.0508V8.2761H62.2769V50.8026H67.3815V33.4228C70.1891 36.8605 74.3367 39.0251 78.9947 39.0251C87.4174 39.0251 94.1811 31.9585 94.1811 23.2368C94.1811 14.515 87.3536 7.44849 78.9947 7.44849ZM78.3566 34.314C72.4224 34.314 67.6368 29.3484 67.6368 23.2368C67.6368 17.1252 72.4224 12.1595 78.3566 12.1595C84.2908 12.1595 89.0764 17.1252 89.0764 23.2368C89.0764 29.3484 84.2908 34.314 78.3566 34.314Z"
                        fill="white"/>
                    <path
                        d="M10.5284 15.3426H16.0798V10.3133H10.5284V0H5.48753V10.3133H0V15.3426H5.48753V38.1338H5.67896H10.5284H21.7587V33.1045H10.5284V15.3426Z"
                        fill="white"/>
                </svg>
            </a>
            <button class="burger hamburger hamburger--collapse" onclick="$('.burger').toggleClass('active un-active');" id="nav-btn"></button>
            <x-front.header-component></x-front.header-component>
        </nav>
        <div class="container hero">
            <div class="hero-img">
                <img src="{{ asset('assets/images/banner/advisor.png') }}" alt="advisor"/>
            </div>
            <div class="hero-txt">
                <p>
                    Снижаем правовые риски, защищаем нематериальные активы и делаем ваш бизнес прибыльнее – комплексно и эффективно.
                </p>
                <a href="" class="more-btn"><span>Консультация</span>
                    <svg width="11" height="11" viewBox="0 0 11 11"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 1H10M10 1V9M10 1L1 10" stroke="white" stroke-width="1.5"/>
                    </svg>
                </a>
            </div>
        </div>
    </header>
<?php
phpinfo()
?>
    <!-- INFO BLOCK START -->
    <div class="info-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 border-left">
                    <div class="info-blocks">
                        <h3>4</h3>
                        <a href="" class="info-block-link">направления<span>
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5"/>
                  </svg>
                </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 border-left">
                    <div class="info-blocks">
                        <h3>50+</h3>
                        <a href="{{ route('projects') }}" class="info-block-link">проектов сделано<span>
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5"/>
                  </svg>
                </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 border-left">
                    <div class="info-blocks">
                        <h3>10+</h3>
                        <a href="{{ 'team' }}" class="info-block-link">сотрудников<span>
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5"/>
                  </svg>
                </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="info-blocks">
                        <h3>64+</h3>
                        <a href="{{ route('articles') }}" class="info-block-link">статей<span>
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5"/>
                  </svg>
                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="load-array">
                <a href="">
                    <svg width="43" height="24" viewBox="0 0 43 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L21.5 22L42 1" stroke="#6B99C3" stroke-width="1.5"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- INFO BLOCK END -->

    <!-- SERVICE BLOCK START -->
    <div class="container">
        <div class="service-block-header">
            <h2>Услуги</h2>
        </div>
        <div class="service-block">
            <div class="first-service">
                <div class="service-blocks">
                    <h3>Управление интеллектуальной собственностью</h3>
                    <a href="https://topadvisor.biz/services/upravlenie-intellektualnoy-sobstvennostyu" class="more">Подробнее
                        <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"/>
                </svg>
              </span>
                    </a>
                </div>
            </div>
            <div class="second-service">
                <div class="service-blocks">
                    <h3>Решения для развития бизнеса</h3>
                    <a href="https://topadvisor.biz/services/resheniya-dlya-razvitiya-biznesa" class="more">Подробнее
                        <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"/>
                </svg>
              </span>
                    </a>
                </div>
            </div>
            <div class="service-img-block">
                <img src="{{ asset('assets/images/image.png') }}" alt=""/>
            </div>
            <hr/>
            <div class="third-service">
                <div class="service-blocks">
                    <h3>Трудовой аудит и консалтинг</h3>
                    <a href="https://topadvisor.biz/services/trudovoy-audit-i-konsalting" class="more">Подробнее
                        <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"/>
                </svg>
              </span>
                    </a>
                </div>
            </div>
            <div class="fourth-service">
                <div class="service-blocks">
                    <h3>Юридическое обслуживание бизнеса</h3>
                    <a href="https://topadvisor.biz/services/yuridicheskoe-obsluzhivanie-biznesa" class="more">Подробнее
                        <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"/>
                </svg>
              </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-front.projects-accordion></x-front.projects-accordion>

    <x-front.team-carousel></x-front.team-carousel>
    <!-- FEEDBACK SECTION START -->
    <div class="container">
        <div class="consulting-wrapper">
            <div class="consulting-block">
                <div class="consulting-header">
                    <h3>Запишитесь <br/>на консультацию</h3>
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
                        <button class="more-btn" type="submit">
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
    <!-- RECENTLY ADDED ARTICLES START -->
    <div class="articles-block">
        <div class="container">
            <section id="articles">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            <div class="block-header">
                                <h2>Последние статьи</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-box">
                    <div class="articles-slider owl-carousel">

                        <x-front.articles-card></x-front.articles-card>

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
    <!-- RECENTLY ADDED ARTICLES END -->

    <!-- TRUST BLOCK START -->
    <div class="container">
        <div class="partners-wrapper">
            <div class="block-header">
                <h2>Нам доверяют</h2>
            </div>
            <div class="partners-grid">
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
            <div class="col-md-12">
                <div class="view-all">
                    <a href="{{ route('partners') }}" class="more">Посмотреть все
                        <span>
                  <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"></path>
                  </svg>
                </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- TRUST BLOCK END -->
@endsection
