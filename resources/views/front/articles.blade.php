@extends('layouts._layout')
@section('content')
    @include('front.header')
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="block-header">
                    <h2>Статьи</h2>
                </div>
                <div class="projects-block-txt">
                    <p></p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 projects-block-wrapper">
                <div class="projects-block">
                    <div class="projects-block-header">
                        <h4>Отрасль</h4>
                        <div class="btn-round">
                            <span class="close"></span>
                        </div>
                    </div>
                    <div class="projects-block-txt">
                        <p>Юридическое обслуживание бизнеса</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 projects-block-wrapper">
                <div class="projects-block">
                    <div class="projects-block-header">
                        <h4>Тип</h4>
                        <div class="btn-round">
                            <span class="close"></span>
                        </div>
                    </div>
                    <div class="projects-block-txt">
                        <p>Юридическое обслуживание бизнеса</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 projects-block-wrapper">
                <div class="projects-block">
                    <div class="projects-block-header">
                        <h4>Специалист</h4>
                        <div class="btn-round">
                            <span class="close"></span>
                        </div>
                    </div>
                    <div class="projects-block-txt">
                        <p>Все</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 projects-block-wrapper">
                <div class="projects-block">
                    <div class="projects-block-header">
                        <h4>Сортировка</h4>
                        <div class="btn-round">
                            <span class="close"></span>
                        </div>
                    </div>
                    <div class="projects-block-txt">
                        <p>По дате</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="articles-box">
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="artcile-card">
                            <div class="author">
                                <div class="author-img">
                                    <img alt="" class="img-fluid move-animation"
                                         src="{{ $article->member->file_url }}"/>
                                </div>
                                <div class="author-dateails">
                                    <p class="">{{ $article->member->name }}</p>
                                    <span class="date">12 сентября, 2023</span>
                                </div>
                            </div>
                            <div class="article-img">
                                <img src="{{ $article->file_url }}" alt=""/>
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
                                        {{ $article->descr_title }}
                                    </p>
                                    <span>время чтения: 10 минут</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="load-more">
                <a href="">Загрузить еще
                    <span><svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                <path d="M2 1H10M10 1V9M10 1L1 10" stroke="#6B99C3" stroke-width="1.5"/>
              </svg> </span></a>
            </div>
        </div>
    </div>
@endsection
