@extends('layouts._layout')
@section('content')
    @include('layouts.header')
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
                <span>Оставить заявку</span><svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1H10M10 1V9M10 1L1 10" stroke="white" stroke-width="1.5"></path>
                </svg>
            </a>
        </div>
        <div class="page-info-img">
            <img src="{{ $subservice->file_url }}" alt="" />
        </div>
        <!-- HERO BLOCK END -->
        <div class="business-info-body">
            <div class="business-info-title">
                <h3>Сделаем ваш бизнес прибыльнее</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="business-info-txt">
                <p>
                    {!! nl2br(e($subservice->descr)) !!}
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
            <div class="work-info-item">
                <h3>01</h3>
                <img src="{{ asset('assets/images/ellipse.svg') }}" alt="" />
                <p>
                    Поможем оптимизировать бизнес-процессы, построить алгоритм
                    управления компанией. Эти услуги повысят эффективность работы
                    организации или ее подразделений. Каждый процесс будет описан, что
                    сократит их избыточность, повысит стабильность и упростит
                    управление.
                </p>
            </div>
            <div class="work-info-item">
                <h3>02</h3>
                <img src="{{ asset('assets/images/ellipse.svg') }}" alt="" />
                <p>
                    Стратегическое планирование позволит увидеть, каким будет ваш
                    бизнес через несколько лет, определит точки роста и конкурентные
                    преимущества.
                </p>
            </div>
            <!-- <hr style="background: #6b99c3; transform: rotate(90deg)" /> -->
            <div class="work-info-item">
                <h3>03</h3>
                <img src="{{ asset('assets/images/ellipse.svg') }}" alt="" />
                <p>
                    Стратегия развития — это ваша «дорожная карта» с конкретными,
                    измеримыми и достижимыми целями и задачами, следуя которой можно
                    развить свой бизнес, сделать его прибыльнее и сократить затраты.
                </p>
            </div>
            <div class="work-info-item">
                <h3>04</h3>
                <img src="{{ asset('assets/images/ellipse.svg') }}" alt="" />
                <p class="last-child">
                    Интернет-маркетинг включает в себя стратегию онлайн-продвижения,
                    привлечения и удержания клиентов, создание воронки
                    Digital-маркетинга, SEO-оптимизацию и построение сквозной
                    аналитики. Эти услуги помогут увеличить лояльную аудиторию и
                    превратить ее в клиентов, а система аналитики определит, какие
                    инструменты
                </p>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="container">
        <div class="use-infoblock">
            <div class="block-header">
                <h2>Кому будет полезно</h2>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
            </div>
            <div class="card-wrapper">
                <div class="bg-blue card">
                    <div class="card-body">
                        <div class="card-title-block">
                            <h5 class="card-title">Компании</h5>
                            <img src="images/company.svg" alt="" />
                        </div>
                        <div class="card-txt-body">
                            <p class="card-text">
                                При смене ответственного за ведение учета лица (бухгалтера, в
                                случае 1С:Бухгалтерии, или администратора, если речь идет
                                например об 1С:Рознице
                            </p>
                            <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
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
                            <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                    fill="white" />
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
                            <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bg-gray card">
                    <div class="card-body">
                        <div class="card-title-block">
                            <h5 class="card-title">Новому бухгалтеру</h5>
                            <img src="images/bookkeep.svg" alt="" />
                        </div>
                        <div class="card-txt-body">
                            <p class="card-text">
                                Который пришел в компанию работать и увидел там ужас
                            </p>
                            <svg width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-front.project-accordion></x-front.project-accordion>
    <!-- FEEDBACK SECTION START -->
    <div class="container">
        <div class="consulting-wrapper">
            <div class="consulting-block">
                <div class="consulting-header">
                    <h3>Заказать стратегическое<br />развитие компании</h3>
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
                        <button href="" class="more-btn" type="submit">
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
