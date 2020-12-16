@extends('admin::layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.transaction') }}">Đơn Hàng</a></li>
                    <li class="breadcrumb-item active">Trang danh sách</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Đơn Hàng
                    </div>
                    @if(Session::has('msg'))
                        <h5 style="color: green; margin: 20px 30px 0px 30px;"><i>{{  Session::get("msg") }}</i></h5>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên khách hàng</th>
                                    <th>Địa chỉ</th>
                                    <th>SĐT</th>
                                    <th>Ghi chú</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th style="width: 10px;">Thao tác</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tên khách hàng</th>
                                    <th>Địa chỉ</th>
                                    <th>SĐT</th>
                                    <th>Ghi chú</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(isset($transactions))
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td>#{{ $transaction->id }}</td>
                                            <td>{{ isset($transaction->user->name) ? $transaction->user->name : $transaction->tr_name }}</td>
                                            <td>{{ $transaction->tr_address }}</td>
                                            <td>{{ $transaction->tr_phone }}</td>
                                            <td>{{ $transaction->tr_note }}</td>
                                            <td>{{ number_format($transaction->tr_total) }}đ</td>
                                            <td>
                                                @if( $transaction->tr_status == 1)
                                                    <a href="#" class="label label-success">Đã duyệt</a>
                                                @else
                                                    <a href="{{ route('admin.get.active.transaction',$transaction->id) }}" class="label label-default">Chờ xử lý</a>
                                                @endif
                                            </td>
                                            <td>
{{--                                                <a class="btn_customer_action" style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="#"><i class="fas fa-trash-alt"></i> Xóa</a>--}}
                                                <a class="js_order_item" data-id="{{ $transaction->id }}"  style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.view.order',$transaction->id) }}"><i class="fas fa-eye"></i></a>
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

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="max-width:1000px; width: 1000px;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="md_content">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    </div>

@stop
