@extends('layouts._layout')
@section('title', 'Команда')
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
        <div class="block-header team-header">
            <h2>Команда</h2>
        </div>
    </div>

    <div class="info-block team-info-block-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 border-left">
                    <div class="info-blocks">
                        <h3>27+</h3>
                        <a href="" class="info-block-link">направлений<span>
                  <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5"></path>
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
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5"></path>
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
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5"></path>
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
                    <path d="M2 1.5H10M10 1.5V9.5M10 1.5L1 10.5" stroke="black" stroke-width="1.5"></path>
                  </svg>
                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="member-list">
            @foreach($team as $member)
                <div class="team-item">
                    <div class="team-item-img img-flex">
                        <img src="{{ $member->file_url }}" alt="">
                    </div>
                    <div class="author-details">
                        <h2>{{ $member->name }}</h2>
                        <p>{{ $member->work_post }}</p>
                        <a href="{{ route('member', $member->id) }}" class="more">Подробнее
                            <span>
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"></path>
                </svg>
              </span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
