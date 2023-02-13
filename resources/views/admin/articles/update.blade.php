@extends('admin.layouts._layout')
@section('content')
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('articles.update', $article->id) }}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <h4 class="card-title">Редактировать статью</h4>
                <div class="form-group row">
                    <label for="meta_title" class="col-sm-3 text-end control-label col-form-label">Мета название</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('meta_title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="meta_title" placeholder="Название статьи" value="{{ $article->meta_title }}">
                    </div>
                    <label for="meta_descr" class="col-sm-3 text-end control-label col-form-label">Мета описание</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('meta_descr')
                        <div class=work_post>{{ $message }}</div>
                        @enderror
                        <textarea class="form-control {{ $errors->has('meta_descr') ? 'is-invalid' : '' }}"name="meta_descr"
                        >{{ $article->meta_descr }}</textarea>
                    </div>
                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Название статьи</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="title" placeholder="Название статьи" value="{{ $article->title }}">
                    </div>
                    <label for="file_url" class="col-sm-3 text-end control-label col-form-label">Загрузите
                        баннер (1296х495)</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('file_url')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="file" name="file_url" onchange="changeImg(event)"
                               value="{{ $article->file_url }}" class="form-control {{ $errors->has('file_url') ? 'is-invalid' : '' }}">
                        <img width="300px" class="change-img" src="{{ $article->file_url }}">
                    </div>
                    <label for="descr" class="col-sm-3 text-end control-label col-form-label">Описание статьи</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('descr')
                        <div class=work_post>{{ $message }}</div>
                        @enderror
                        <textarea class="form-control {{ $errors->has('descr') ? 'is-invalid' : '' }}" id="descr" name="descr"
                        >{!! $article->descr !!}</textarea>
                    </div>
                    <label class="col-sm-3 text-end control-label col-form-label" for="car_id">Выберите автора статьи</label>
                    <div class="col-md-9" style="margin-bottom: 20px">
                        @error('member_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <select name="member_id" class="select2 form-select shadow-none select2-hidden-accessible {{ $errors->has('member_id') ? 'is-invalid' : '' }}" style="width: 100%; height: 36px" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($members as $member)
                                <option value="{{ $member->id }}" data-select2-id="{{ $member->id }}">{{ $member->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Отправить
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-lite.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('/plugins/summernote/summernote-lite.js') }}"></script>

    <script>
        $('#descr').summernote({
            placeholder: 'Введите описание',
            tabsize: 2,
            height: 100,
            toolbar: [
                ['style', ['style']],
                ['font', ['Inter','bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('#descr2').summernote({
            placeholder: 'Введите описание',
            tabsize: 2,
            height: 100,
            toolbar: [
                ['style', ['style']],
                ['font', ['Inter','bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
