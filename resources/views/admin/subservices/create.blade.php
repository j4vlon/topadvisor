@extends('admin.layouts._layout')
@section('content')
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('subservices.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title">Добавить услугу</h4>
                <div class="form-group row">
                    <label for="meta_title" class="col-sm-3 text-end control-label col-form-label">Мета название</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('meta_title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="meta_title" placeholder="Название статьи">
                    </div>
                    <label for="meta_descr" class="col-sm-3 text-end control-label col-form-label">Мета описание</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('meta_descr')
                        <div class=work_post>{{ $message }}</div>
                        @enderror
                        <textarea class="form-control {{ $errors->has('meta_descr') ? 'is-invalid' : '' }}"name="meta_descr" placeholder="Мета описание"
                        ></textarea>
                    </div>
                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Название услуги</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="Введите название услуги">
                    </div>
                    <label for="title" class="col-sm-3 text-end control-label col-form-label">Заголовок описания</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('descr_title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control {{ $errors->has('descr_title') ? 'is-invalid' : '' }}" name="descr_title" placeholder="Введите название услуги">
                    </div>
                    <label for="form_title" class="col-sm-3 text-end control-label col-form-label">Название формы отправки заявки</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('form_title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control {{ $errors->has('form_title') ? 'is-invalid' : '' }}" name="form_title" placeholder="Название формы">
                    </div>
                    <label for="subtitle" class="col-sm-3 text-end control-label col-form-label">Подзаголовок "Кому будет полезно"</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('subtitle')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control {{ $errors->has('form_title') ? 'is-invalid' : '' }}" name="subtitle" placeholder="Введите текст подзаголовки">
                    </div>
                    <label for="file_url" class="col-sm-3 text-end control-label col-form-label">Загрузите баннер (1296х495)</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('file_url')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <input type="file" name="file_url" class="form-control {{ $errors->has('file_url') ? 'is-invalid' : '' }}" onchange="changeBanner(event)">
                        <img class="change-banner">
                    </div>
                    <label for="specific" class="col-sm-3 text-end control-label col-form-label">Описание услуги</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('descr')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control {{ $errors->has('descr') ? 'is-invalid' : '' }}" id="descr" name="descr"
                                  placeholder="Введите описание категории услуги"></textarea>
                    </div>
                    <label for="default_txt" class="col-sm-3 text-end control-label col-form-label">Описание услуги</label>
                    <div class="col-sm-9" style="margin-bottom: 20px">
                        @error('default_txt')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control {{ $errors->has('default_txt') ? 'is-invalid' : '' }}" name="default_txt"
                                  placeholder=""></textarea>
                    </div>
                    <label class="col-sm-3 text-end control-label col-form-label" for="car_id">Выберите раздел</label>
                    <div class="col-md-9" style="margin-bottom: 20px">
                        @error('service_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <select name="service_id" class="select2 form-select shadow-none select2-hidden-accessible {{ $errors->has('service_id') ? 'is-invalid' : '' }}" style="width: 100%; height: 36px" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" data-select2-id="{{ $service->id }}">{{ $service->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="display: flex;align-items: center;">
                        <label class="col-sm-3 text-end control-label col-form-label" for="is_active" style="padding-right: 20px;">Активна ли данная услуга?</label>
                        <div class="col-md-9" style="margin-left: 5px;">
                            <div class="form-check mr-sm-2">
                                @error('is_active')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                <input type="checkbox" class="form-check-input {{ $errors->has('is_active') ? 'is-invalid' : '' }}" name="is_active" value="1">
                            </div>
                        </div>
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
