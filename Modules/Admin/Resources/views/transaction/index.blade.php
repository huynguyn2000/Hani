@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Đơn Hàng</a></li>
            <li class="active">Trang danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Quản Lý Đơn Hàng</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên danh mục</th>
                <th>Title Seo</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@stop
