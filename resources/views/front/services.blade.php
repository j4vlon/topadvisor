@extends('layouts._layout')
@section('content')
    @include('front.header')
    <!-- BREAD CRUMBS START -->
    <div class="container">
        <div class="bread-crumbs">
            <span class="gray">услуги / {{ $service->title }}</span>
        </div>
    </div>
    <!-- BREAD CRUMBS END -->
    <!-- CONTENT START -->
    <div class="container">
        <!-- HERO BLOCK START -->
        <div class="business-info">
            <div class="block-header">
                <h1>{{ $service->title }}</h1>
            </div>
            <div class="service-img-wrapper">
                <img src="{{ asset('assets/images/globus.svg') }}" alt=""/>
            </div>

            <a href="" class="service-consulting more-btn"><span>Консультация</span>
                <svg width="11" height="11" viewBox="0 0 11 11"
                     fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 1H10M10 1V9M10 1L1 10" stroke="white" stroke-width="1.5"></path>
                </svg>
            </a>
        </div>
        <!-- HERO BLOCK END -->
        <!-- ACCORDION START -->
        <div class="accordion-flush accordion-flush-wrapper" id="accordionFlushExample">
            @foreach($service->subservices as $subservice)
                <div class="accordion-item">
                    <div class="accordion-wrapper">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="accordion-title accordion-item-wrapper">
                                    <h4 class="accordion-header" id="flush-headingOne">
                                        {{ $subservice->title }}
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="accordion-txt accordion-item-wrapper">
                                    <p>
                                        {{ $subservice->desrc }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="accordion-info-block">
                                    <div class="project-qty">
                                        <h3>238</h3>
                                        <span>проектов</span>
                                    </div>

                                    <div class="collapsed" data-bs-toggle="collapse"
                                         data-bs-target="#flush-collapse{{ $subservice->id }}"
                                         aria-expanded="false" aria-controls="flush-collapse{{ $subservice->id }}">
                                        Подробнее
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="flush-collapse{{ $subservice->id }}" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingOne"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row accordion-content">
                                <div class="col-xl-4 col-lg-4 accordion-img">
                                    <img src="{{ $subservice->file_url }}" alt=""/>
                                </div>
                                <div class="col-xl-8 col-lg-8 accordion-descr-wrapper">
                                    <div class="accordion-descr">
                                        <p>
                                            {!! nl2br(e($subservice->descr)) !!}
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <a class="more-btn" type="submit">
                                            <span>Оставить заявку</span>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 1H10M10 1V9M10 1L1 10" stroke="white"
                                                      stroke-width="1.5"></path>
                                            </svg>
                                        </a>
                                        <a class="more-btn-white more-btn"
                                           href="{{ route('category', $subservice->slug) }}">
                                            <span>Узнать подробнее</span>
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.99988 1H9.99988M9.99988 1V9M9.99988 1L0.999878 10"
                                                      stroke="black"
                                                      stroke-width="1.5"/>
                                            </svg>
                                        </a>
                                        <div class="arrow-icon">
                                            <svg width="31" height="38" viewBox="0 0 31 38" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M2.71673 0V6.21186H20.832C12.9073 10.1587 0 15.1484 0 26.1145C0 33.1785 5.58 38 13.3131 38C13.3469 38 24.9916 38 24.9916 38V32.1582H13.7527C7.89091 32.2254 6.448 28.7495 6.448 25.3408C6.448 17.2228 24.6985 10.5624 24.7549 10.54V25.4866H31V0H2.71673Z"
                                                        fill="black"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- ACCORDION END -->
        <x-front.project-accordion></x-front.project-accordion>
    </div>

@endsection
