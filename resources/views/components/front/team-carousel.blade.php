<!-- TEAM BLOCK START -->
<div class="team-section">
    <div class="container">
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10">
                        <div class="block-header">
                            <h2>Команда</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-box">
                <div class="team-slider owl-carousel">
                    @foreach($members as $member)
                    <div class="single-box text-center">
                        <div class="img-area">
                            <img alt="" class="img-fluid move-animation" src="{{ $member->file_url }}" />
                        </div>
                        <div class="info-area">
                            <h4>{{ $member->name }}</h4>
                            <p>
                                {{ $member->work_post }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="project-link">
            <a href="{{ route('team') }}" class="more">Посмотреть все
                <span>
              <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 1H10M10 1V9M10 1L1 10" stroke="black" stroke-width="1.5"></path>
              </svg>
            </span>
            </a>
        </div>
    </div>
</div>
<!-- TEAM BLOCK END -->
