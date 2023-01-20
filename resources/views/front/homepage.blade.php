@extends('layouts._layout')
@section('content')
@include('layouts.main-header')
    @include('front.sections.info-block')
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
<!-- SERVICE BLOCK END -->
    @include('front.sections.project-accordion')
    @include('front.sections.team-owl-carousel')
    @include('front.sections.feedback')
    @include('front.sections.articles-owl')
<!-- TRUST BLOCK START -->
<div class="container">
    <div class="partners-wrapper">
        <div class="block-header">
            <h2>Нам доверяют</h2>
        </div>
        <table class="table table-bordered">
            <tbody>
            <tr class="tr">
                <td class="partner-wrapper">
                    <div class="partner-image-area">
                        <img src="images/logos/accor.svg" alt="" />
                    </div>
                    <div class="company-title">
                        <h4>названиие компании</h4>
                    </div>
                </td>
                <td class="partner-wrapper">
                    <div class="partner-image-area">
                        <img src="images/logos/SevemlyTV.svg" alt="" />
                    </div>
                    <div class="company-title">
                        <h4>названиие компании</h4>
                    </div>
                </td>
                <td class="partner-wrapper">
                    <div class="partner-image-area">
                        <img src="images/logos/aloqabank.svg" alt="" />
                    </div>
                    <div class="company-title">
                        <h4>названиие компании</h4>
                    </div>
                </td>
                <td class="partner-wrapper">
                    <div class="partner-image-area">
                        <img src="images/logos/undp.svg" alt="" />
                    </div>
                    <div class="company-title">
                        <h4>названиие компании</h4>
                    </div>
                </td>
            </tr>
            <tr class="tr">
                <td class="partner-wrapper">
                    <div class="partner-image-area">
                        <img src="images/logos/accor.svg" alt="" />
                    </div>
                    <div class="company-title">
                        <h4>названиие компании</h4>
                    </div>
                </td>
                <td class="partner-wrapper">
                    <div class="partner-image-area">
                        <img src="images/logos/SevemlyTV.svg" alt="" />
                    </div>
                    <div class="company-title">
                        <h4>названиие компании</h4>
                    </div>
                </td>
                <td class="partner-wrapper">
                    <div class="partner-image-area">
                        <img src="images/logos/aloqabank.svg" alt="" />
                    </div>
                    <div class="company-title">
                        <h4>названиие компании</h4>
                    </div>
                </td>
                <td class="partner-wrapper">
                    <div class="partner-image-area">
                        <img src="images/logos/undp.svg" alt="" />
                    </div>
                    <div class="company-title">
                        <h4>названиие компании</h4>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- TRUST BLOCK END -->
@endsection
