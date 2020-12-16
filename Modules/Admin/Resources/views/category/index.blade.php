@extends('admin::layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.category') }}">Danh mục</a></li>
                    <li class="breadcrumb-item active">Trang danh sách</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Danh Mục
                        <a href="{{ route('admin.get.create.category') }}" class="pull-right">Thêm mới</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên danh mục</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>Start date</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->c_name }}</td>
                                            <td>
                                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.edit.category',$category->id) }}"><i class="fas fa-pen"></i> Cập nhật</a>
                                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.action.category',['delete',$category->id]) }}"><i class="fas fa-trash-alt"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    </div>
@stop
