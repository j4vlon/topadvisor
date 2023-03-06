@extends('admin.layouts._layout')
@section('content')
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Участники</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">админка</a></li>
                            <li class="breadcrumb-item"><i class="fas fa-chevron-right"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                участники
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Участники команды</h5>
                        <div class="table-responsive">
                            <table
                                id="zero_config"
                                class="table table-striped table-bordered"
                            >
                                <thead>
                                <tr>
                                    <th>Фамилия и имя</th>
                                    <th>Об участнике</th>
                                    <th>Обязанности</th>
                                    <th>Статьи</th>
                                    <th>фото</th>
                                    <th>Редактировать</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $member)
                                    <tr>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->descr }}</td>
                                        <td>{{ $member->work_post }}</td>
                                        <td>
                                            @forelse($member->articles as $articles)
                                                {{ $articles->title }}
                                             @empty
                                                <p>У {{ $member->name }} нет статей</p>
                                            @endforelse
                                        </td>
                                        <td><img src="{{ $member->file_url }}" alt=""></td>
                                        <td>
                                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary" style="margin-bottom: 5px; width: 100%">Изменить</a>
                                            <br>
                                            @forelse($member->projects as $projects)
                                                <p>{{ $member->name }} является участников проекта, чтобы удалить участника, удалите проект в котором он состоит!</p>
                                            @empty
                                                <form action="{{ route('members.destroy', $member->id) }}" method="post">
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
