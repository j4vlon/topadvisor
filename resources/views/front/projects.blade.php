@extends('layouts._layout')
@section('title', 'Проекты')
@section('content')
    <header class="header main-nav-header">
        <nav class="container header-navigation">
            <a href="/" class="top">
                <img src="{{ asset('assets/images/logos/advisor-black.svg') }}" alt=""/>
            </a>
            @include('front.header')
        </nav>
    </header>
    <div class="project-block">
        <div class="container">
            <div class="row projects-box">
                <div class="col-xl-6 col-lg-6 col-md-12 block-header">
                    <h2>Реализованные проекты</h2>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 accordion-container">
                    <button type="button" class="accordion" id="accordion">

              <span class="accordion-title">
                Услуги
              </span>
                        <p class="accordion-list-item">Юридическое обслуживание бизнеса</p>
                    </button>
                    <div class="panel">
                        <ul class="accordion-list">
                            <li class="accordion-list-item">Оптимизация бизнес-процессов (BPM, BPR)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 accordion-container">

                    <button type='button' class="accordion" id="accordion">
              <span class="accordion-title">
                Направление
              </span>
                        <p class="accordion-list-item">Оптимизация бизнес-процессов (BPM, BPR)</p>
                    </button>

                    <div class="panel">
                        <ul class="accordion-list">
                            <li class="accordion-list-item">Стратегическое развитие компании</li>
                            <li class="accordion-list-item">Интернет-маркетинг</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 accordion-container">

                    <button type="button" class="accordion" id="accordion">

              <span class="accordion-title">
                Отрасли клиентов
              </span>
                        <p class="accordion-list-item">По дате</p>
                    </button>
                    <div class="panel">
                        <ul class="accordion-list">
                            <li class="accordion-list-item">Оптимизация бизнес-процессов (BPM, BPR)</li>
                        </ul>
                    </div>
                </div>
            </div>
            @foreach($projects as $project)
                <div class="info-list-wrapper results">
                    <div class="info-list-item">
                        <div class="logo-img-area">
                            <img src="{{ $project->partner->file_url }}">
                            <span>{{ date('d F, Y', strtotime($project->updated_at)) }}</span>
                        </div>
                        <div class="info-list-img-area">
                            <img src="{{ $project->project_img }}">
                        </div>
                        <div class="info-list-details">
                            <span>{{ $project->subservice->title }}</span>
                            <h4>{{ $project->title }}</h4>
                            <p>{{   $truncated = Str::of($project->default_txt)->limit(100) }}</p>
                        </div>
                        <div class="info-list-links">
                            <svg width="31" height="38" viewBox="0 0 31 38" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                        fill="#6B99C3"/>
                            </svg>

                            <a href="{{ route('project', $project->slug) }}" class="more">Подробнее
                                <span>
                  <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"></path>
                  </svg>
                </span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="load-more">
            <a href="" class="show-more">Загрузить еще
                <span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 1H10M10 1V9M10 1L1 10" stroke="#6B99C3" stroke-width="1.5"/>
            </svg> </span></a>
        </div>
    </div>
@endsection
