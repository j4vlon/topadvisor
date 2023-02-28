@extends('layouts._layout')
@section('title', 'Контакты')
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
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-info">
                        <h3 class="box-title">Свяжитесь с нами</h3>
                        <div class="contact-box">
                            <p>+998 91 009 39 00</p>
                            <p>info@topadvisor.biz</p>
                        </div>
                        <div class="social-icons">
                            <div class="facebook">
                                <a href="https://www.facebook.com/topadvisorbiz/">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="16.75" transform="rotate(-180 17.5 17.5)"
                                                stroke="#D2D2D4"
                                                stroke-width="1.5"/>
                                        <path
                                            d="M12 16V20H15V27H19V20H22L23 16H19V14C19 13.7348 19.1054 13.4804 19.2929 13.2929C19.4804 13.1054 19.7348 13 20 13H23V9H20C18.6739 9 17.4021 9.52678 16.4645 10.4645C15.5268 11.4021 15 12.6739 15 14V16H12Z"
                                            stroke="#D2D2D4" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="instagram">
                                <a href="https://www.instagram.com/topadvisorbiz/">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="16.75" transform="rotate(-180 17.5 17.5)"
                                                stroke="#D2D2D4"
                                                stroke-width="1.5"/>
                                        <path
                                            d="M21.25 10H13.75C11.6789 10 10 11.6789 10 13.75V21.25C10 23.3211 11.6789 25 13.75 25H21.25C23.3211 25 25 23.3211 25 21.25V13.75C25 11.6789 23.3211 10 21.25 10Z"
                                            stroke="#D2D2D4" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path
                                            d="M17.5 20.3125C19.0533 20.3125 20.3125 19.0533 20.3125 17.5C20.3125 15.9467 19.0533 14.6875 17.5 14.6875C15.9467 14.6875 14.6875 15.9467 14.6875 17.5C14.6875 19.0533 15.9467 20.3125 17.5 20.3125Z"
                                            stroke="#D2D2D4" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M21.7188 13.2812V13.2822" stroke="#D2D2D4" stroke-width="1.5"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="telegram">
                                <a href="https://t.me/topadvisor">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5" cy="17.5" r="16.75" transform="rotate(-180 17.5 17.5)"
                                                stroke="#D2D2D4"
                                                stroke-width="1.5"/>
                                        <path d="M19 16L15 20L21 26L25 10L7 17L11 19L13 25L16 21" stroke="#D2D2D4"
                                              stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="address">
                            <p>Адрес:Узбекистан, 100000, Ташкент, Мирзо-Улугбекский район, ул. Ниёзбек Йули, 30, кабинет 413
                                    <br>
                                Ориентир: Akay City, Ташкентский институт инженеров ирригации и механизации сельского хозяйства
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-form-wrapper">
                        <h3 class="box-title" style="margin-bottom: 48px">Напишите нам</h3>
                        <form class="contact-form" action="{{ route('feedback') }}" method="POST">
                            @csrf
                            <input type="text" name="name" class="contact-form-item" placeholder="Введите ваше имя">
                            <input type="text" name="company_name" class="contact-form-item"
                                   placeholder="Введите вашу компанию">
                            <input type="text" name="phone" class="contact-form-item" placeholder="Введите ваш телефон">
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
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="map">
                        <h3 class="box-title" style="margin-bottom: 55px;">Приезжайте к нам</h3>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Stella_Laundry_Uz,+улица+Ниёзбек+Йули,+Ташкент,+Узбекистан&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                            </div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 401px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 100%;
                                    height: 401px;
                                }

                                .gmap_iframe {
                                    height: 401px !important;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
