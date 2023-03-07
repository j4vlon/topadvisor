@extends('admin.layouts._layout')
@section('content')
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Разделы услуг</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">админка</a></li>
                            <li class="breadcrumb-item"><i class="fas fa-chevron-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                разделы услуг
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Список услуг</h5>
                        <div class="table-responsive">
                            <table
                                id="zero_config"
                                class="table table-striped table-bordered"
                            >
                                <thead>
                                <tr>
                                    <th>Рзадел информации</th>
                                    <th>Назавние информации</th>
                                    <th>Редактировать</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($infodirections as $infodirection)
                                    <tr>
                                        <td style="display: flex; justify-content: space-between; align-items: center;">
                                            <p>{{ $infodirection->title }}</p>
                                            <div class="actions" style="display: flex; justify-content: space-between; align-items: end; flex-direction: column;">
                                                <a href="{{ route('info-direction.edit', $infodirection->id) }}" class="btn btn-primary" style="margin-bottom: 5px;"><i class="fa-sharp fa-solid fa-pen"></i></a>
                                                <form action="{{ route('info-direction.destroy', $infodirection) }}" method="post" style="margin-left: 10px;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" style="width: 100%">
                                                        <i class="fa-sharp fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            @foreach($infodirection->informations as $information)
                                                <p>{{ $information->title }}</p>
                                                @foreach(json_decode($information->file_url) as $files)
                                                    <a href="{{ $files }}" target="_blank">посмотреть</a>
                                                @endforeach
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('information.edit', $infodirection->id) }}" class="btn btn-primary" style="margin-bottom: 5px; width: 100%">Редактировать</a>
                                            <br>
                                            <form action="{{ route('information.destroy', $infodirection->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" style="width: 100%">
                                                    Удалить
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
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
