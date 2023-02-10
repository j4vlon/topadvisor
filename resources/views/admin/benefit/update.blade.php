@extends('admin.layouts._layout')
@section('content')
    <div class="container">
        <div class="card">
            <h4 class="card-title" style="margin-top: 30px; margin-bottom: 30px">Обновить</h4>
            <form action="{{ route('benefits.update', $benefit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                <label class="col-sm-3 control-label col-form-label" for="subservice_id">Выберите услугу</label>
                <div class="col-md-9" style="margin-bottom: 20px">
                    @error('subservice_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <select name="subservice_id"
                            class="select2 form-select shadow-none select2-hidden-accessible {{ $errors->has('subservice_id') ? 'is-invalid' : '' }}"
                            style="width: 100%; height: 36px">

                        @foreach($subservices as $subservice)
                            <option value="{{ $subservice->id }}">
                                {{ $subservice->title }}
                            </option>
                        @endforeach
                            <option selected value="{{ $benefit->subservice->id }}">{{ $benefit->subservice->title }}</option>
                    </select>
                </div>
                <table class="table table-bordered" id="dynamicTable">
                    <tr>
                        <th>Кому будет полезно</th>
                        <th>Описание</th>
                        <th>Краткое описание</th>
                        <th>Загрузите иконку</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="title" placeholder="Назавние" class="form-control" value="{{ $benefit->title }}" /></td>
                        <td><textarea type="text" name="descr" placeholder="Описание преимущества" class="form-control">{{ $benefit->descr }}</textarea></td>
                        <td><textarea type="text" name="default_txt" placeholder="Краткое описание преимущества" class="form-control">{{ $benefit->default_txt }}</textarea></td>
                        <td>
                            <input type="file" class="form-control " name="file_url" onchange="changeImg(event)" value="{{ $benefit->file_url }}">
                            @if(isset($benefit->file_url))
                                <img class="change-img" src="{{ $benefit->file_url }}">
                            @endif
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-success">Отправить</button>
            </form>
        </div>
    </div>
@endsection
