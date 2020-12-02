<h2 class="h2">Shopping Cart</h2>

@if( \Illuminate\Support\Facades\Session::has("cart") != null)

<table id="gh" border="1px" style="font-size: 14px;">
    <tr>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thao tác</th>
    </tr>
    <tbody>
    @foreach(\Illuminate\Support\Facades\Session::get('cart')->products as $item)
        <tr>
            <td>
                {{ $item['productInfo']->pro_name }}
            </td>
            <td>
                {{ $item['quantity'] }}
            </td>
            <td>
                {{ number_format($item['productInfo']->pro_price*$item['quantity']) }}đ
            </td>
            <td class="thaotac">
                <button data-id="{{ $item['productInfo']->id }}" style="width: 100%;"><i class="fas fa-times"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tr>
        <td>Tổng số lượng</td>
        <td colspan="3" id="tt" style="text-align: right;">{{ \Illuminate\Support\Facades\Session::get('cart') ->totalQuantity }}</td>
    </tr>
    <tr>

        <td>Tổng tiền</td>
        <td colspan="3" id="tt" style="text-align: right;">{{ number_format(\Illuminate\Support\Facades\Session::get('cart') ->totalPrice) }}đ</td>
    </tr>
</table>

@endif
<button class="btn-tt">Thanh Toán</button>

