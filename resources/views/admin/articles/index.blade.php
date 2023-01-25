@extends('admin.layouts._layout')
@section('content')
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Статьи</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Library
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
                        <h5 class="card-title"><a class="card-title" href="{{ route('articles.create') }}">Добавить статью</a></h5>
                        <div class="table-responsive">
                            <table
                                id="zero_config"
                                class="table table-striped table-bordered"
                            >
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Автор</th>
                                    <th>Заголовок</th>
                                    <th>Описание</th>
                                    <th>Изменить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->member->name }}</td>
                                        <td>{{ $article->descr_title }}</td>
                                        <td>{{ $article->descr }}</td>
                                        <td>
                                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary" style="margin-bottom: 5px; width: 100%">Edit</a>
                                            <br>
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" style="width: 100%">
                                                    Delete
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
