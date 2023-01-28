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
                <a href="{{ route('team') }}">Команда</a>
            </li>
            <li class="nav-list-item"><a href="{{ route('articles') }}">Статьи</a></li>
            <li class="nav-list-item"><a href="{{ route('contacts') }}">Контакты</a></li>
        </ul>



