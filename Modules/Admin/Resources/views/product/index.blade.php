@extends('admin::layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.product') }}">Sản phẩm</a></li>
                    <li class="breadcrumb-item active">Trang danh sách</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Sản phẩm
                        <a href="{{ route('admin.get.create.product') }}" class="pull-right">Thêm mới</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th style="width: 200px">Mô tả</th>
                                    <th>Loại sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Tổng lượng mua</th>
{{--                                    <th>Trạng thái</th>--}}
                                    <th>Nổi bật</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Mô tả</th>
                                    <th>Loại sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Tổng lượng mua</th>
{{--                                    <th>Trạng thái</th>--}}
                                    <th>Nổi bật</th>
                                    <th>Thao tác</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(isset($products))
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>
                                                {{ $product->pro_name }}
                                                <ul style="padding-left: 15px; ">
                                                    <li><span><i class="fas fa-dollar-sign"></i> {{ $product->pro_price }}</span></li>
                                                    <li><span><i class="fas fa-dollar-sign"></i> {{ $product->pro_sale }} (%)</span></li>
                                                </ul>
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
                                            <td>
                                                <a href="{{ route('admin.get.action.product',['hot',$product->id]) }}" class="label {{ $product->getHot($product->pro_hot)['class'] }} " >{{ $product->getHot($product->pro_hot)['name'] }}</a>
                                            </td>
                                            <td>
                                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.edit.product',$product->id) }}"><i class="fas fa-pen"></i> Cập nhật</a>
                                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.action.product',['delete',$product->id]) }}"><i class="fas fa-trash-alt"></i> Xóa</a>
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
