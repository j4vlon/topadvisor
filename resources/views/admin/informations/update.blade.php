@extends('admin.layouts._layout')
@section('content')
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('useful-info.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <h4 class="card-title">Добавить информацию</h4>
                <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label" for="car_id">Выберите напрвление</label>
                    <div class="col-md-9" style="margin-bottom: 20px">
                        @error('infodirection_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <select name="service_id" class="select2 form-select shadow-none select2-hidden-accessible {{ $errors->has('infodirection_id') ? 'is-invalid' : '' }}" style="width: 100%; height: 36px" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($infodirections as $infodirection)
                                <option value="{{ $infodirection->id }}">{{ $infodirection->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Название раздела</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="title" placeholder="Введите название услуги">
                    </div>
                    <label for="file_url" class="col-sm-3 text-end control-label col-form-label">Загрузите баннер (1296х495)</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('file_url')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="file" name="file_url" class="form-control {{ $errors->has('file_url') ? 'is-invalid' : '' }}" multiple>
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
