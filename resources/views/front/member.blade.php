@extends('layouts._layout')
@section('content')
    @include('layouts.header')
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
                                    <div class="single-box text-center">
                                        <div class="author">
                                            <div class="author-img">
                                                <img alt="" class="img-fluid move-animation" src="{{ $member->file_url }}">
                                            </div>
                                            <div class="author-dateails">
                                                <p class="">{{ $member->name }}</p>
                                                <span class="date">{{ $articles->created_at }}</span>
                                            </div>
                                        </div>
                                        <div class="article-img">
                                            <img src="{{ $articles->file_url }}" alt="">
                                        </div>
                                        <div class="article-info">
                                            <div class="article-link">
                                                <a href="">раздел статьи</a>
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
                                <div class="owl-item">
                                    <div class="single-box text-center">
                                        <div class="article-link">
                                            <a href="">Стратегическое развитие компании</a>
                                        </div>
                                        <div class="article-img">
                                            <img src="images/logos/SevemlyTV.svg" alt="">
                                        </div>
                                        <div class="article-info">
                                            <div class="article-header">
                                                <h2>Аудит информационной системы для производителя бытовой химии</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
