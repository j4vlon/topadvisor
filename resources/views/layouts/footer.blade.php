<footer class="footer">
    <nav class="container header-navigation">
        <a href="/" class="top">
            <img src="{{ asset('assets/images/logos/advisor.svg') }}" alt="" />
        </a>
        <ul class="navigation-list">
            <li class="nav-list-item"><a href="#">Услуги</a></li>
            <li class="nav-list-item"><a href="{{ route('projects') }}">Проекты</a></li>
            <li class="nav-list-item"><a href={{ route('team') }}"">Команда</a></li>
            <li class="nav-list-item"><a href="{{ route('articles') }}">Статьи</a></li>
            <li class="nav-list-item"><a href="{{ route('contacts') }}">Контакты</a></li>
        </ul>
{{--        <div class="search-block">--}}
{{--            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <g clip-path="url(#clip0_31_418)">--}}
{{--                    <path--}}
{{--                        d="M10 17C13.866 17 17 13.866 17 10C17 6.13401 13.866 3 10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17Z"--}}
{{--                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                    <path d="M21 21L15 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                </g>--}}
{{--                <defs>--}}
{{--                    <clipPath id="clip0_31_418">--}}
{{--                        <rect width="24" height="24" fill="white" />--}}
{{--                    </clipPath>--}}
{{--                </defs>--}}
{{--            </svg>--}}
{{--        </div>--}}
        <div class="call-back">
            <a href="">+998 91 009 39 00</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-3">
                <ul class="footer-nav-items">
                    <li class="nav-title">
                        <a class="nav-title" href="{{ route('services', $service->slug) }}">{{ $service->title }}</a>
                    </li>
                    @foreach($service->subservices as $subservice)
                    <li class="footer-nav-item">
                      <a href="{{ route('category', $subservice->slug) }}" class="footer-nav-link">
                        {{ $subservice->title }}
                      </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    <div class="rights">
        <p>© 2023 — Top Advisor. Все права защищены</p>
    </div>
</footer>
