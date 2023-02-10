@extends('admin.layouts._layout')
@section('content')
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('partners.update', $partner->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <h4 class="card-title">Редактировать партнера</h4>
                <div class="form-group row">
                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Название компании</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="title" value="{{ $partner->title }}" placeholder="Название компании">
                    </div>
                    <label for="file_url" class="col-sm-3 text-end control-label col-form-label">Загрузите логотип партнера</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('file_url')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="file" name="file_url" class="form-control {{ $errors->has('file_url') ? 'is-invalid' : '' }}" value="{{ $partner->file_url }}" onchange="changeBanner(event)">
                        @if(isset($partner->file_url))
                            <img src="{{ $partner->file_url }}" alt="" class="change-banner">
                        @endif
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
