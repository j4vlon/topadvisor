@extends('admin.layouts._layout')
@section('content')
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('members.store') }}"
              enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title">Добавить участника</h4>
                <div class="form-group row">
                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Имя участника команды</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" placeholder="Имя и фамилия">
                    </div>
                    <label for="descr" class="col-sm-3 text-end control-label col-form-label">Об участнике</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('descr')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control {{ $errors->has('descr') ? 'is-invalid' : '' }}" name="descr"
                                  placeholder="Об участнике команды"></textarea>
                    </div>
                    <label for="descr" class="col-sm-3 text-end control-label col-form-label">Обязанности участника</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('descr')
                        <div class=work_post>{{ $message }}</div>
                        @enderror
                        <textarea class="form-control {{ $errors->has('work_post') ? 'is-invalid' : '' }}" name="work_post"
                                  placeholder="Опишите обязанности участника"></textarea>
                    </div>
                    <label for="file_url" class="col-sm-3 text-end control-label col-form-label">Загрузите
                        фото</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('file_url')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="file" name="file_url" onchange="changeImg(event)"
                               value="" class="form-control {{ $errors->has('file_url') ? 'is-invalid' : '' }}">
                        <img width="300px" class="change-img">
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
