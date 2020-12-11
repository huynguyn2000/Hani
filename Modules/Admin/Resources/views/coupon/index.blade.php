@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Mã khuyến mãi</a></li>
        <li class="active">Trang danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
                        <h2>Quản Lý Mã Khuyến Mãi <a href="{{ route('admin.get.create.coupon') }}" class="pull-right">Thêm mới</a></h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên mã khuyến mãi</th>
                                    <th>Mã khuyến mãi</th>
                                    <th>Số lượng mã</th>
                                    <th>Tính năng mã</th>
                                    <th>Nhập số % hoặc tiền giảm</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(isset($coupons))
                                @foreach($coupons as $coupon)
                                    <tr>
                                        <td>{{ $coupon->id }}</td>
                                        <td>{{ $coupon->cp_name }}</td>
                                        <td>{{ $coupon->cp_code }}</td>
                                        <td>{{ $coupon->cp_qty }}</td>
                                        <td>{{ $coupon->cp_func == 0 ? 'Giảm giá theo %' : 'Giảm giá theo tiền' }}</td>
                                        <td>{{ $coupon->cp_value }}</td>
                                        <td>
                                            <a href="{{ route('admin.get.edit.coupon',$coupon->id) }}">Edit</a>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa mã giảm giá này?')" href="{{ route('admin.get.action.coupon',['delete',$coupon->id]) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
@stop
