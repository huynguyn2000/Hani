@extends('layouts.app')

@section('content')
<style>
        header .contenedor{
            height: 200px;
        }

        body {
            background-color: white;
        }

        #loginbox > div:first-child {
            padding-bottom: 10px;
        }

        #form > div {
            margin-bottom: 25px;
        }

        #form > div:last-child {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .panel {
            background-color: transparent;
        }

        .panel-body {
            padding-top: 30px;
            background-color: rgba(2555,255,255,.3);
        }
</style>
<script>
   $(".textos").remove();
</script>
    <html>
    <body>
    <div class="panel panel-default" style="margin: 100px 300px;">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <b style="font-size: 20px; text-align: center">LỊCH SỬ ĐẶT HÀNG</b>
                <span style="float: right">
                    <a href="{{ route('userinfo') }}" >Thông tin khách hàng</a>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table style="width: 75%; margin: 30px 100px;" class="table table-bordered" id="dataTable"  cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th style="width: 100px">Địa chỉ</th>
                            <th>SĐT</th>
                            <th style="width: 100px">Ghi chú</th>
                            <th>Tổng tiền</th>
                            <th>Ngày giờ đặt</th>
                            <th style="width: 80px;">Thao tác</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Địa chỉ</th>
                            <th>SĐT</th>
                            <th>Ghi chú</th>
                            <th>Tổng tiền</th>
                            <th>Ngày giờ đặt</th>
                            <th>Thao tác</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @if(isset($transactions))
                            @foreach($transactions as $transaction)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $transaction->tr_address }}</td>
                                    <td>{{ $transaction->tr_phone }}</td>
                                    <td>{{ $transaction->tr_note }}</td>
                                    <td>{{ number_format($transaction->tr_total) }}đ</td>
                                    <td>{{ $transaction->created_at }}</td>
                                    <td>
                                        <a class="js_order_item" data-id="{{ $transaction->id }}"  style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.view.order',$transaction->id) }}"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @elseif(!isset($transactions))
                            <tr>
                                <td colspan="7">Không có lịch sử đặt hàng</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="max-width:1000px; width: 1000px;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Chi tiết đơn hàng</h3>
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
</body>
</html>
@endsection
