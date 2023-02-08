@extends('admin.layouts._layout')
@section('content')
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Партнеры</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">админка</a></li>
                            <li class="breadcrumb-item"><i class="fas fa-chevron-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                партнеры
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
                        <h5 class="card-title">Product list</h5>
                        <div class="table-responsive">
                            <table
                                id="zero_config"
                                class="table table-striped table-bordered"
                            >
                                <thead>
                                <tr>
                                    <th>Название компании</th>
                                    <th>Логотип</th>
                                    <th>Реализованные проекты</th>
                                    <th>Редактировать</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($partners as $partner)
                                    <tr>
                                        <td>{{ $partner->title }}</td>
                                        <td><img src="{{ $partner->file_url }}" alt="" style="width: 248px; object-fit: cover"></td>
                                        <td>
                                            @foreach($partner->projects as $project)
                                                {{ $project->title }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('partners.edit', $partner->id) }}" class="btn btn-primary" style="margin-bottom: 5px; width: 100%">Редактировать</a>
                                            <br>
                                            @forelse($partner->projects as $project)
                                                <p>{{ $partner->title }} состоит в {{ $project->title }}, чтобы удалить партнера, удалите проект!</p>
                                            @empty
                                                <form action="{{ route('partners.destroy', $partner->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" style="width: 100%">
                                                        Удалить
                                                    </button>
                                                </form>
                                            @endforelse
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
