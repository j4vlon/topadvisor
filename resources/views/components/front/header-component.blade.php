    <nav class="container header-navigation">
        <a href="/" class="top">
            <svg width="95" height="51" viewBox="0 0 95 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M40.902 7.44849C32.0326 7.44849 24.8223 14.515 24.8223 23.2368C24.8223 31.9585 32.0326 39.0251 40.902 39.0251C49.7714 39.0251 56.9818 31.9585 56.9818 23.2368C56.9818 14.515 49.7714 7.44849 40.902 7.44849ZM40.902 34.2504C34.7126 34.2504 29.6717 29.3484 29.6717 23.2368C29.6717 17.1252 34.7126 12.2232 40.902 12.2232C47.0914 12.2232 52.1323 17.1252 52.1323 23.2368C52.1323 29.3484 47.0914 34.2504 40.902 34.2504Z"
                    fill="white" />
                <path
                    d="M78.9947 7.44849C74.3367 7.44849 70.1891 9.61301 67.3815 13.0508V8.2761H62.2769V50.8026H67.3815V33.4228C70.1891 36.8605 74.3367 39.0251 78.9947 39.0251C87.4174 39.0251 94.1811 31.9585 94.1811 23.2368C94.1811 14.515 87.3536 7.44849 78.9947 7.44849ZM78.3566 34.314C72.4224 34.314 67.6368 29.3484 67.6368 23.2368C67.6368 17.1252 72.4224 12.1595 78.3566 12.1595C84.2908 12.1595 89.0764 17.1252 89.0764 23.2368C89.0764 29.3484 84.2908 34.314 78.3566 34.314Z"
                    fill="white" />
                <path
                    d="M10.5284 15.3426H16.0798V10.3133H10.5284V0H5.48753V10.3133H0V15.3426H5.48753V38.1338H5.67896H10.5284H21.7587V33.1045H10.5284V15.3426Z"
                    fill="white" />
            </svg>
        </a>
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
                                    <a href="" class="dropdown-link">{{ $subservice->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="nav-list-item">
                <a href="#">Проекты</a>
                <div class="dropdown-content-wrapper">
                    <div class="dropdown-content">
                        @foreach($subservices as $subservice)
                            <ul class="dropdown-list">
                                <li class="dropdown-list-item dropdown-head">
                                    <a href="{{ url($subservice->slug) }}" class="dropdown-link">{{ $subservice->title }}</a>
                                </li>
                                @foreach($subservice->projects as $project)
                                    <li class="dropdown-list-item">
                                        <a href="" class="dropdown-link">{{ $project->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="nav-list-item">
                <a href="">Команда</a>
            </li>
            <li class="nav-list-item"><a href="">Статьи</a></li>
            <li class="nav-list-item"><a href="{{ route('contacts') }}">Контакты</a></li>
        </ul>
        <button class="burger" onclick="$('.burger').toggleClass('active un-active');"></button>
    </nav>

