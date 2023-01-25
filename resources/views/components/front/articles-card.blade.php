@foreach($articles as $article)
<div class="single-box">
    <div class="author">
        <div class="author-img">
            <img alt="" class="img-fluid move-animation" src="{{ $article->member->file_url }}" />
        </div>
        <div class="author-dateails">
            <p class="">{{ $article->member->name }}</p>
            <span class="date">{{ $article->created_at }}</span>
        </div>
    </div>
    <div class="article-img">
        <img src="{{ $article->file_url }}" alt="" />
    </div>
    <div class="article-info">
        <div class="article-link">
            <a href="">раздел статьи</a>
        </div>
        <div class="article-header">
            <h2>{{ $article->title }}</h2>
        </div>
        <div class="article-txt">
            <p>
                {{ $article->descr_title }}
            </p>
            <span>время чтения: 10 минут</span>
        </div>
    </div>
</div>
@endforeach
