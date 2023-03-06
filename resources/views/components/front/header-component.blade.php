<ul class="navigation-list un-active">
    <li class="nav-list-item">
        <a href="#">Услуги</a>
        <div class="dropdown-content-wrapper">
            <div class="dropdown-content">
                @foreach($services as $service)
                    <ul class="dropdown-list">
                        <li class="dropdown-list-item dropdown-head">
                            <a href="{{ route('services', $service->slug) }}" class="dropdown-link">{{ $service->title }}</a>
                        </li>
                        @foreach($service->subservices as $subservice)
                        <li class="dropdown-list-item">
                            <a href="{{ route('category', $subservice->slug) }}" class="dropdown-link">{{ $subservice->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </li>
    <li class="nav-list-item">
        <a href="{{ route('projects') }}">Проекты</a>
{{--        <div class="dropdown-content-wrapper">--}}
{{--            <div class="dropdown-content">--}}
{{--                @foreach($subservices as $subservice)--}}
{{--                    <ul class="dropdown-list">--}}
{{--                        <li class="dropdown-list-item dropdown-head">--}}
{{--                            <a href="{{ route('category',$subservice->slug) }}" class="dropdown-link">{{ $subservice->title }}</a>--}}
{{--                        </li>--}}
{{--                        @foreach($subservice->projects as $project)--}}
{{--                            <li class="dropdown-list-item">--}}
{{--                                <a href="{{ route('project', $project->slug) }}" class="dropdown-link">{{ $project->title }}</a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
    </li>
    <li class="nav-list-item">
        <a href="{{ route('team') }}">Команда</a>
    </li>
    <li class="nav-list-item">
        <a href="#">Медиа</a>
        <div class="dropdown-content-wrapper">
            <div class="dropdown-content">
                <ul class="dropdown-list">
                    <li class="dropdown-list-item">
                        <a href="{{ route('articles') }}" class="dropdown-link">Статьи</a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="{{ route('news') }}" class="dropdown-link">Новости</a>
                    </li>
                    <li class="dropdown-list-item">
                        <a href="{{ route('useful-info') }}" class="dropdown-link">Полезная информация</a>
                    </li>
                </ul>
            </div>
        </div>
    </li>
    <li class="nav-list-item"><a href="{{ route('contacts') }}">Контакты</a></li>
    <li class="nav-list-item">
        <div class="call-back">
            <a href="">+998 91 009 39 00</a>
        </div>
    </li>
</ul>
{{--        <div class="search-block">--}}
{{--            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <g clip-path="url(#clip0_339_498)">--}}
{{--                    <path--}}
{{--                        d="M10 17C13.866 17 17 13.866 17 10C17 6.13401 13.866 3 10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17Z"--}}
{{--                        stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                    <path d="M21 21L15 15" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />--}}
{{--                </g>--}}
{{--                <defs>--}}
{{--                    <clipPath id="clip0_339_498">--}}
{{--                        <rect width="24" height="24" fill="white" />--}}
{{--                    </clipPath>--}}
{{--                </defs>--}}
{{--            </svg>--}}
{{--        </div>--}}
