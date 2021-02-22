@if($orders)
    <table class="table">
        <thead>
        <tr>
            <th>Mã SP</th>
            <th>Tên sản phẩm</th>
            <th style="text-align: center">Hình ảnh</th>
            <th>Chi tiết</th>
            <th>Topping</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $key => $order)
            <tr>
                <td>#{{ $order->or_product_id }}</td>
                <td>{{ isset($order->product->pro_name) ? $order->product->pro_name : '' }}</td>
                <td style="text-align: center; width: 30%;"><img style="width: 20%;" src="{{ isset($order->product->pro_avatar) ? pare_url_file($order->product->pro_avatar) : '' }}"></td>
                <td>{{ $order->or_detail != '' ? $order->or_detail : 'Không có chi tiết' }}</td>
                <td>{{ $order->or_topping != null ? $order->or_topping : 'Không có topping' }}</td>
                <td>{{ number_format($order->or_price)  }}</td>
                <td>{{ $order->or_qty  }}</td>
                <td>{{ number_format($order->or_price*$order->or_qty)}}</td>
{{--                <td>--}}
{{--                    <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.action.article',['delete',$order->id]) }}"><i class="fas fa-trash-alt"></i> Xóa</a>--}}
{{--                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
