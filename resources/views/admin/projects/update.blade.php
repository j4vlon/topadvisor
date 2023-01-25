@extends('admin.layouts._layout')
@section('content')
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('projects.update', $project->id) }}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <h4 class="card-title">Добавить проект</h4>
                <div class="form-group row">
                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Название проекта</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="title" placeholder="Название проекта" value="{{ $project->title }}">
                    </div>
                    <label for="descr" class="col-sm-3 text-end control-label col-form-label">Описание проекта</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('descr')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control {{ $errors->has('descr') ? 'is-invalid' : '' }}" name="descr"
                                  placeholder="Введите описание проекта">{{ $project->descr }}</textarea>
                    </div>
                    <label class="col-sm-3 text-end control-label col-form-label" for="partner_id">Партнер проекта</label>
                    <div class="col-md-9" style="margin-bottom: 20px">
                        @error('partner_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <select name="partner_id"
                                class="select2 form-select shadow-none select2-hidden-accessible {{ $errors->has('partner_id') ? 'is-invalid' : '' }}"
                                style="width: 100%; height: 36px" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($partners as $partner)
                                <option value="{{ $partner->id }}"
                                        data-select2-id="{{ $partner->id }}">{{ $partner->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-sm-3 text-end control-label col-form-label" for="subservice_id">Выберите услугу</label>
                    <div class="col-md-9" style="margin-bottom: 20px">
                        @error('subservice_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <select name="subservice_id"
                                class="select2 form-select shadow-none select2-hidden-accessible {{ $errors->has('subservice_id') ? 'is-invalid' : '' }}"
                                style="width: 100%; height: 36px" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($subservices as $subservice)
                                <option value="{{ $subservice->id }}"
                                        data-select2-id="{{ $subservice->id }}">{{ $subservice->title }}
                                    ({{ $subservice->service->title }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Имя автора фотографии</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('img_author')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" value="{{ $project->img_author }}" class="form-control" name="img_author" placeholder="Введите имя автора фотографии">
                    </div>
                    <label for="project_img" class="col-sm-3 text-end control-label col-form-label">Загрузите
                        картинку</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('project_img')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="file" name="project_img" onchange="changeImg(event)"
                              value="{{ $project->project_img }}" class="form-control {{ $errors->has('project_img') ? 'is-invalid' : '' }}">
                        <img src="{{ $project->project_img }}" width="300px" class="change-img">
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
