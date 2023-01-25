@extends('admin.layouts._layout')
@section('content')
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('articles.update', $article->id) }}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <h4 class="card-title">Изменить статью</h4>
                <div class="form-group row">
                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Название статьи</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="title" value="{{ $article->title }}" placeholder="Название статьи">
                    </div>
                    <label for="descr" class="col-sm-3 text-end control-label col-form-label">Заголовок статьи</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('descr_title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="descr_title" value="{{ $article->descr_title }}" placeholder="Заголовок статьи">
                    </div>
                    <label for="descr" class="col-sm-3 text-end control-label col-form-label">Описание статьи</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('descr')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control {{ $errors->has('descr') ? 'is-invalid' : '' }}" name="descr"
                                  placeholder="Описание статьи">{{ $article->descr }}</textarea>
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
                    <label for="file_url" class="col-sm-3 text-end control-label col-form-label">Загрузите
                        картинку</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('file_url')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="file" name="file_url" onchange="changeImg(event)"
                               value="{{ $article->file_url }}" class="form-control {{ $errors->has('file_url') ? 'is-invalid' : '' }}">
                        <img width="300px" class="change-img" src="{{ $article->file_url }}">
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
