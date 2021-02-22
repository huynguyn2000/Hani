@extends('admin::layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Trang Admin Hani</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Thống kê</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body">Doanh thu (Tháng)</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p style="font-size: 25px">{{ number_format($total) }} đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Doanh thu (Năm)</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p style="font-size: 25px">{{ number_format($total) }} đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Số đơn hoàn thành</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p style="font-size: 25px">{{ $complete }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Số đơn chưa duyệt</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p style="font-size: 25px">{{ $notApprove }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Top sản phẩm bán chạy
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th style="width: 200px">Mô tả</th>
                                <th>Loại sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Tổng lượng mua</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Loại sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Tổng lượng mua</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @if(isset($products))
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            {{ $product->pro_name }}
                                        </td>
                                        <td>{{ $product->pro_description }}</td>
                                        <td>{{ isset($product->category->c_name) ? $product->category->c_name : '[N\A]' }}</td>
                                        <td>
                                            <img src="{{ pare_url_file($product->pro_avatar) }}" alt="" class="img img-responsive" style="width: 80px; height: 80px;">
                                        </td>
                                        <td>
                                            {{ $product->pro_pay }}
                                        </td>
                                        {{--                                            <td>--}}
                                        {{--                                                <a href="{{ route('admin.get.action.product',['active',$product->id]) }}" class="label {{ $product->getStatus($product->pro_active)['class'] }} " >{{ $product->getStatus($product->pro_active)['name'] }}</a>--}}
                                        {{--                                            </td>--}}

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
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
@endsection
