@extends('admin.layouts._layout')
@section('content')
    <div class="container">
        <div class="card">
            <h4 class="card-title" style="margin-top: 30px; margin-bottom: 30px">Добавить раздел</h4>
            <form action="{{ route('steps.store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

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
                            <option value="{{ $subservice->id }}"
                                    data-select2-id="{{ $subservice->id }}">{{ $subservice->title }}
                                ({{ $subservice->title }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <table class="table table-bordered" id="dynamicTable">
                    <tr>
                        <th>Номер</th>
                        <th>Описание</th>
                        <th>Добавить поля</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="addmore[0][index]" placeholder="Этап работы" class="form-control" /></td>
                        <td><textarea type="text" name="addmore[0][descr]" placeholder="Описание этапа" class="form-control"></textarea></td>
                        <td><button type="button" name="add" id="add" class="btn btn-success">Добавить</button></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-success">Отправить</button>
            </form>
        </div>
    </div>

    @push('scripts')
    <script type="text/javascript">

        var i = 0;

        $("#add").click(function(){

            ++i;

            $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][index]" placeholder="Enter your Name" class="form-control" /></td><td><textarea type="text" name="addmore['+i+'][descr]" placeholder="Описание этапа" class="form-control"></textarea></td><td><button type="button" class="btn btn-danger remove-tr">Убрать</button></td></tr>');
        });

        $(document).on('click', '.remove-tr', function(){
            $(this).parents('tr').remove();
        });

    </script>
    @endpush
@endsection
