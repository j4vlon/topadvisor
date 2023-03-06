@extends('layouts._layout')
@section('title', 'Новости')
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
        <div class="news block-header">
            <h2>Новости</h2>
        </div>
        <div class="articles-box">
            <div class="row article-row">
                @foreach($news as $new)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('newsView',$new->slug) }}" class="news-link">
                            <div class="artcile-card">
                                <div class="article-img">
                                    <img src="{{ $new->file_url }}" alt="" />
                                </div>
                                <div class="article-info">
                                    <span class="date">{{ \Jenssegers\Date\Date::parse($new->created_at)->format('j F, Y') }}</span>
                                    {{--                                <div class="article-link">--}}
                                    {{--                                    <a href="{{ route('news',$new->slug) }}">раздел статьи</a>--}}
                                    {{--                                </div>--}}
                                    <div class="article-header">
                                        <h2>{{ $new->title }}</h2>
                                    </div>
                                    {{--                                <div class="article-txt">--}}
                                    {{--                                    <span>время чтения: {{ $new->read_time }}</span>--}}
                                    {{--                                </div>--}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                    @if($new->count() == 12)
                        <div class="load-more">
                            <a class="load-more" data-load="load-more">Загрузить еще
                                <span><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 1H10M10 1V9M10 1L1 10" stroke="#6B99C3" stroke-width="1.5" />
                    </svg> </span></a>
                        </div>
                    @endif
            </div>
        </div>
    </div>
@endsection
