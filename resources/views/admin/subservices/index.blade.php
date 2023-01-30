@extends('admin.layouts._layout')
@section('content')
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Услуги</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">админка</a></li>
                            <li class="breadcrumb-item"><i class="fas fa-chevron-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                услуги
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Услуги</h5>
                        <div class="table-responsive">
                            <table
                                id="zero_config"
                                class="table table-striped table-bordered"
                            >
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Описание</th>
{{--                                    <th>Картинка</th>--}}
                                    <th>Активность</th>
                                    <th>Дата добавления</th>
                                    <th>Изменить</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subservices as $subservice)
                                    <tr>
                                        <td>{{ $subservice->title }}</td>
                                        <td>{{ $subservice->descr }}</td>
{{--                                        <td><img src="{{ $subservice->file_url }}" alt=""></td>--}}
                                        @if($subservice->is_active)
                                            <td>Услуга активна</td>
                                        @else
                                            <td>Услуга не активна</td>
                                        @endif

                                        <td>{{ $subservice->created_at }}</td>
                                        <td><a href="{{ route('subservices.edit', $subservice->id) }}" class="btn btn-primary" style="margin-bottom: 5px; width: 100%">Редактировать</a>
                                            <br>
                                            <form action="{{ route('subservices.destroy', $subservice->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" style="width: 100%">
                                                    Удалить
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
@endsection
