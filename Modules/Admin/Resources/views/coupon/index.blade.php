@extends('admin::layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.coupon') }}">Mã khuyến mãi</a></li>
                    <li class="breadcrumb-item active">Trang danh sách</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Mã khuyến mãi
                        <a href="{{ route('admin.get.create.coupon') }}" class="pull-right">Thêm mới</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tên mã khuyến mãi</th>
                                    <th>Mã khuyến mãi</th>
                                    <th>Số lượng mã</th>
                                    <th>Tính năng mã</th>
                                    <th>Nhập số % hoặc tiền giảm</th>
                                    <th>Thao tác</th>
                                </tr>
                                </tfoot>
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
