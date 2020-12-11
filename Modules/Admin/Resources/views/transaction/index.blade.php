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
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($transactions))
                @foreach($transactions as $transaction)
                    <tr>
                        <td>#{{ $transaction->id }}</td>
                        <td>{{ isset($transaction->user->name) ? $transaction->user->name : $transaction->tr_name }}</td>
                        <td>{{ $transaction->tr_address }}</td>
                        <td>{{ $transaction->tr_phone }}</td>
                        <td>{{ number_format($transaction->tr_total) }}đ</td>
                        <td>
                            @if( $transaction->tr_status == 1)
                                <a href="#" class="label label-success">Đã duyệt</a>
                            @else
                                <a href="{{ route('admin.get.active.transaction',$transaction->id) }}" class="label label-default">Chờ xử lý</a>
                            @endif
                        </td>
                        <td>
                            <a class="btn_customer_action" style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="#"><i class="fas fa-trash-alt"></i> Xóa</a>
                            <a class="js_order_item" data-id="{{ $transaction->id }}"  style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.view.order',$transaction->id) }}"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 1200px;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Chi tiết mã đơn hàng #<b class="transaction_id"></b></h4>
                </div>
                <div class="modal-body" id="md_content">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>


    </script>
@stop


