@extends('layouts._layout')
@section('content')
@include('layouts.main-header')
<!-- INFO BLOCK START -->
<div class="info-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 border-left">
                <div class="info-blocks">
                    <h3>27+</h3>
                    <a href="" class="info-block-link">направлений<span>
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5" />
                  </svg>
                </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 border-left">
                <div class="info-blocks">
                    <h3>398+</h3>
                    <a href="" class="info-block-link">проектов сделано<span>
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5" />
                  </svg>
                </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 border-left">
                <div class="info-blocks">
                    <h3>12+</h3>
                    <a href="" class="info-block-link">сотрудников<span>
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5" />
                  </svg>
                </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="info-blocks">
                    <h3>412+</h3>
                    <a href="" class="info-block-link">статей<span>
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5" />
                  </svg>
                </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="load-array">
            <a href="">
                <svg width="43" height="24" viewBox="0 0 43 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L21.5 22L42 1" stroke="#6B99C3" stroke-width="1.5" />
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
                <a href="" class="more">Подробнее
                    <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5" />
                </svg>
              </span>
                </a>
            </div>
        </div>
        <div class="second-service">
            <div class="service-blocks">
                <h3>Решения для развития бизнеса</h3>
                <a href="" class="more">Подробнее
                    <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5" />
                </svg>
              </span>
                </a>
            </div>
        </div>
        <div class="service-img-block">
            <img src="{{ asset('assets/images/image.png') }}" alt="" />
        </div>
        <hr />
        <div class="third-service">
            <div class="service-blocks">
                <h3>Трудовой аудит и консалтинг</h3>
                <a href="" class="more">Подробнее
                    <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5" />
                </svg>
              </span>
                </a>
            </div>
        </div>
        <div class="fourth-service">
            <div class="service-blocks">
                <h3>Юридическое обслуживание бизнеса</h3>
                <a href="" class="more">Подробнее
                    <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5" />
                </svg>
              </span>
                </a>
            </div>
        </div>
    </div>
</div>

    <x-front.project-accordion></x-front.project-accordion>
    <x-front.team-carousel></x-front.team-carousel>
<!-- FEEDBACK SECTION START -->
<div class="container">
    <div class="consulting-wrapper">
        <div class="consulting-block">
            <div class="consulting-header">
                <h3>Запишитесь <br />на консультацию</h3>
                <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                        fill="white" />
                </svg>
            </div>
            <div class="feedback-wrapper">
                <form action="{{ route('feedback') }}" class="feedback-form" method="POST">
                    @csrf
                    <input type="text" class="form_input" name="name" placeholder="Введите ваше имя">
                    <input type="text" class="form_input" name="company_name" placeholder="Введите вашу компанию">
                    <input type="text" class="form_input" name="phone" placeholder="Введите ваш телефон">
                    <button class="more-btn" type="submit">
                        <span>Оставить заявку</span><svg width="11" height="11" viewBox="0 0 11 11" fill="none"
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
