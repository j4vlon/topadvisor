<!-- PROJECTS BLOCK START -->
<div class="project-block">
    <div class="container">
        <div class="row projects-box">
            <div class="col-xl-6 col-lg-6 col-md-12 block-header">
                <h2>Реализованные проекты</h2>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 accordion-container">
                <button type="button" class="accordion" id="accordion">

              <span class="accordion-title">
                Услуги
              </span>
                    <p class="accordion-list-item">Юридическое обслуживание бизнеса</p>
                </button>
                <div class="panel">
                    <ul class="accordion-list">
                        <li class="accordion-list-item">Оптимизация бизнес-процессов (BPM, BPR)</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 accordion-container">

                <button type='button' class="accordion" id="accordion">
              <span class="accordion-title">
                Направление
              </span>
                    <p class="accordion-list-item">Оптимизация бизнес-процессов (BPM, BPR)</p>
                </button>

                <div class="panel">
                    <ul class="accordion-list">
                        <li class="accordion-list-item">Стратегическое развитие компании</li>
                        <li class="accordion-list-item">Интернет-маркетинг</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 accordion-container">

                <button type="button" class="accordion" id="accordion">

              <span class="accordion-title">
                Отрасли клиентов
              </span>
                    <p class="accordion-list-item">По дате</p>
                </button>
                <div class="panel">
                    <ul class="accordion-list">
                        <li class="accordion-list-item">Оптимизация бизнес-процессов (BPM, BPR)</li>
                    </ul>
                </div>
            </div>
        </div>

        @foreach($projects as $project)
        <div class="info-list-wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 project-info-list">
                    <div class="info-list-title">
                        <div class="date">
                            <span>{{ date('d F, Y', strtotime($project->created_at)) }}</span>
                        </div>
                        <h4>
                            {{ $project->title }}
                        </h4>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 project-info-list">
                    <div class="info-list-txt">
                        <p>
                            {{ $truncated = Str::of($project->descr)->limit(100) }}
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
