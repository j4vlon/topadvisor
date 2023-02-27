<!-- PROJECTS BLOCK START -->
<div class="project-block">
    <div class="container">
        <div class="accordion-box">
            <div class="block-header">
                <h2>Реализованные проекты</h2>
            </div>
            <div class="accordion-body">
                <div class="accordion-container">
                    <button type='button' class="accordion" id="accordion">
              <span class="accordion-title">
                Направление
              </span>
                    </button>
                    <div class="panel">
                        <ul class="accordion-list">
                            @foreach($services as $service)
                                <a class="accordion-list-item btn-accordion service" data-id="{{ $service->id }}">{{ $service->title }}</a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <button type="button" class="accordion" id="accordion">

              <span class="accordion-title">
                Услуги
              </span>
                    </button>
                    <div class="panel">
                        <ul class="accordion-list subservices-list">

                        </ul>
                    </div>
                </div>
                <div class="accordion-container">

                    <button type="button" class="accordion" id="accordion">

              <span class="accordion-title">
                Отрасли клиентов
              </span>
                        <a class="accordion-list-item date" date="date">По дате</a>
                    </button>
                    <div class="panel">
                        <ul class="accordion-list">
                            <ul class="accordion-list">
                                <a class="accordion-list-item btn-accordion industries" data-direction="Органы государственного управления">
                                    Органы государственного управления
                                </a>
                                <a class="accordion-list-item btn-accordion industries" data-direction="Международные организации">
                                    Международные организации
                                </a>
                                <a class="accordion-list-item btn-accordion industries" data-direction="Иностранные организации">
                                    Иностранные организации
                                </a>
                                <a class="accordion-list-item btn-accordion industries" data-direction="Информационные услуги">
                                    Информационные услуги
                                </a>
                                <a class="accordion-list-item btn-accordion industries" data-direction="Производственные предприятия">
                                    Производственные предприятия
                                </a>
                                <a class="accordion-list-item btn-accordion industries" data-direction="Финансовые организации">
                                    Финансовые организации
                                </a>
                                <a class="accordion-list-item btn-accordion industries" data-direction="Страховые организации">
                                    Страховые организации
                                </a>
                                <a class="accordion-list-item btn-accordion industries" data-direction="Прочие организации в сфере услуг">
                                    Прочие организации в сфере услуг
                                </a>
                                <a class="accordion-list-item btn-accordion industries" data-direction="Негосударственные некоммерческие организации">
                                    Негосударственные некоммерческие организации
                                </a>
                                <a class="accordion-list-item btn-accordion industries" data-direction="СМИ">
                                    СМИ
                                </a>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="project-info-list-wrapper">
            @foreach($projects as $project)
            <div class="info-list-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 project-info-list">
                        <div class="info-list-title">
                            <div class="date">
                                <span>20 мая, 2022</span>
                            </div>
                            <h4>
                                {{ $project->title }}
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 project-info-list">
                        <div class="info-list-txt">
                            <p>
                                {{ $project->short_descr }}
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 project-info-list">
                        <div class="info-list-img">
                            <img src="{{ $project->partner->file_url }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="view-all">
            <a href="{{ route('projects') }}" class="more">Посмотреть все
                <span>
              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"></path>
              </svg>
            </span>
            </a>
        </div>
    </div>
</div>
<!-- PROJECTS BLOCK END -->
