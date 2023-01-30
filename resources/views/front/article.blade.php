@extends('layouts._layout')
@section('content')
    @include('front.header')
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
            <h4>{{ $article->descr_title }}</h4>
            <p>{!! nl2br(e($article->descr)) !!}</p>
            <a href="">Оформление ссылок в статье
                <span>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 1H10M10 1V9M10 1L1 10" stroke="#6B99C3" stroke-width="1.5"/>
                                  </svg>
                                        </span>
            </a>
            <p>
                Стратегия развития — это ваша «дорожная карта» с конкретными,
                измеримыми и достижимыми целями и задачами, следуя которой можно
                развить свой бизнес, сделать его прибыльнее и сократить затраты.
            </p>
            <p>
                Интернет-маркетинг включает в себя стратегию онлайн-продвижения,
                привлечения и удержания клиентов, создание воронки
                Digital-маркетинга, SEO-оптимизацию и построение сквозной аналитики.
                Эти услуги помогут увеличить лояльную аудиторию и превратить ее в
                клиентов, а система аналитики определит, какие инструменты
            </p>
            <div class="info-box-txt">
                <div class="business-info-title">
                    <h3>Сделаем ваш бизнес прибыльнее</h3>
                </div>

                <p>
                    Поможем оптимизировать бизнес-процессы, построить алгоритм
                    управления компанией. Эти услуги повысят эффективность работы
                    организации или ее подразделений. Каждый процесс будет описан, что
                    сократит их избыточность, повысит стабильность и упростит
                    управление.
                </p>
                <div class="info-box-img">
                    <img src="images/man.svg" alt=""/>
                    <div class="read-time">
                        <span>Фотограф: Анвар Абдурахимов</span>
                    </div>
                </div>
                <p>
                    Стратегическое планирование позволит увидеть, каким будет ваш бизнес
                    через несколько лет, определит точки роста и конкурентные
                    преимущества.
                </p>
                <p>
                    Стратегия развития — это ваша «дорожная карта» с конкретными,
                    измеримыми и достижимыми целями и задачами, следуя которой можно
                    развить свой бизнес, сделать его прибыльнее и сократить затраты.
                </p>
                <p>
                    Интернет-маркетинг включает в себя стратегию онлайн-продвижения,
                    привлечения и удержания клиентов, создание воронки
                    Digital-маркетинга, SEO-оптимизацию и построение сквозной аналитики.
                    Эти услуги помогут увеличить лояльную аудиторию и превратить ее в
                    клиентов, а система аналитики определит, какие инструменты
                </p>
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
