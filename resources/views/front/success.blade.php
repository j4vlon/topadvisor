@extends('layouts._layout')
@section('title', 'Разделы')
@section('content')
    <header class="header main-nav-header">
        <nav class="container header-navigation">
            <a href="/" class="top">
                <img src="{{ asset('assets/images/logos/advisor-black.svg') }}" alt=""/>
            </a>
            <x-front.header-component></x-front.header-component>
        </nav>
    </header>
{{--    <div class="progress-step-success">--}}
{{--        <h1>--}}
{{--            Hello World--}}
{{--        </h1>--}}
{{--    </div>--}}
@endsection
