<p class="h2"  style ="font-family: 'Fredoka One', cursive;">Shopping Cart <span style="font-size: 17px; margin-left: 50px;  font-family: 'Fredoka One', cursive;"><a class="del-all" style="cursor: pointer; color: white;">Xóa tất cả</a></span></p>
<hr>
@if( \Illuminate\Support\Facades\Session::has("cart") != null)
    <table id="gh"  style="font-size: 13px;color:white;" border="1px" >
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
                    <b>{{ $item['productInfo']->pro_name }} {{ $item['detail'][1] ? "(".$item['detail'][1].")" : ""}}</b>
                    <ul>
                        @if($item['detail'][0])
                            <li>{{ $item['detail'][0]}}</li>
                        @endif
                        @if($item['detail'][2])
                            <li>{{ $item['detail'][2] }} đường</li>
                        @endif
                        @if($item['detail'][3])
                            <li>{{ $item['detail'][3] }} đá</li>
                        @endif
                    </ul>
                    @if(isset($item['topping']))
                        @foreach($item['topping'] as $topping)
                            <ul>
                                <li>{{ $topping }}</li>
                            </ul>
                        @endforeach
                    @endif
                </td>
                <td class="plus-minus" style="text-align: center">
                    <button class="plus" data-id="{{ $item['productInfo']->id }}" data-stt="{{ $item['i'] }}" style="border: none; color: white; float: left; font-size: 16px; background-color: unset"><i class="fas fa-plus-circle"></i></button>
                    {{ $item['quantity'] }}
                    <button class="minus" data-id="{{ $item['productInfo']->id }}" data-stt="{{ $item['i'] }}" style="border: none; color: white; float: right; font-size: 16px; background-color: unset"><i class="fas fa-minus-circle"></i></button>
                </td>
                <td>
                    {{ number_format($item['productInfo']->pro_price) }}đ
                </td>
                <td class="thaotac">
                    <button class="del" data-id="{{ $item['productInfo']->id }}" data-stt="{{ $item['i'] }}" style="border: none; color: white; font-size: 20px;"><i class="fas fa-times-circle"></i></button>
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
    <a class="btn-tt" href="{{ route('payment') }}" style="margin:20px;">Thanh Toán</a>

@elseif(\Illuminate\Support\Facades\Session::has("cart") == null)
    <a class="btn-tt" onclick="myAlert()">Thanh Toán</a>
    @endif
    </div>
