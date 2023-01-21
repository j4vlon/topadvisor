@extends('admin.layouts._layout')
@section('content')
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Products</h4>
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
        {{--        <div class="row">--}}
        {{--            <!-- Column -->--}}
        {{--            <div class="col-md-6 col-lg-2 col-xlg-3">--}}
        {{--                <a href="{{ route('products.create') }}">--}}
        {{--                    <div class="card card-hover">--}}
        {{--                        <div class="box bg-cyan text-center">--}}
        {{--                            <h1 class="font-light text-white">--}}
        {{--                                <i class="mdi mdi-view-dashboard"></i>--}}
        {{--                            </h1>--}}
        {{--                            <h6 class="text-white">Add product</h6>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 col-lg-2 col-xlg-3">--}}
        {{--                <a href="{{ route('sales.index') }}">--}}
        {{--                    <div class="card card-hover">--}}
        {{--                        <div class="box bg-warning text-center">--}}
        {{--                            <h1 class="font-light text-white">--}}
        {{--                                <i class="mdi mdi-collage"></i>--}}
        {{--                            </h1>--}}
        {{--                            <h6 class="text-white">Sales</h6>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--            <!-- Column -->--}}
        {{--            <div class="col-md-6 col-lg-2 col-xlg-3">--}}
        {{--                <a href="{{ route('stocks.index') }}">--}}
        {{--                    <div class="card card-hover">--}}
        {{--                        <div class="box bg-danger text-center">--}}
        {{--                            <h1 class="font-light text-white">--}}
        {{--                                <i class="mdi mdi-border-outside"></i>--}}
        {{--                            </h1>--}}
        {{--                            <h6 class="text-white">Stocks</h6>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--            <!-- Column -->--}}
        {{--            <div class="col-md-6 col-lg-2 col-xlg-3">--}}
        {{--                <div class="card card-hover">--}}
        {{--                    <div class="box bg-info text-center">--}}
        {{--                        <h1 class="font-light text-white">--}}
        {{--                            <i class="mdi mdi-arrow-all"></i>--}}
        {{--                        </h1>--}}
        {{--                        <h6 class="text-white">Featured</h6>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <!-- Column -->--}}
        {{--            <div class="col-md-6 col-lg-2 col-xlg-3">--}}
        {{--                <div class="card card-hover">--}}
        {{--                    <div class="box bg-info text-center">--}}
        {{--                        <h1 class="font-light text-white">--}}
        {{--                            <i class="mdi mdi-relative-scale"></i>--}}
        {{--                        </h1>--}}
        {{--                        <h6 class="text-white">Recommended</h6>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
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
                                    <th>Title</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{ $project->title }}</td>
                                        <td>
                                            <a href="{{ route('partners.edit', $project->id) }}" class="btn btn-primary" style="margin-bottom: 5px; width: 100%">Edit</a>
                                            <br>
                                            <form action="{{ route('partners.destroy', $project->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" style="width: 100%">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tfoot>
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
