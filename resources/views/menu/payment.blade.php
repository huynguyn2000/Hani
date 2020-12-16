<!DOCTYPE html>
<html lang="en">
<head>
    <title>HANI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme_admin/css/Hani11.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0xxMYUSuYO8SoFxn0sJJfNNOrCNwtMbM&callback=myMap"></script>

    <style>
        .search {
            width: 30%;
            position: relative;
            display: flex;
        }

        .searchTerm {
            width: 90%;
            border: 3px solid #00B4CC;
            border-right: none;
            padding: 15px;
            height: 20px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #9DBFAF;
        }

        .img-container:hover .bag-btn1 {
            transform: translateX(-50%);
        }
        /*btn thanh toán */
        @import url(https://fonts.googleapis.com/css?family=Raleway:400);
        .btn-dh {
            margin-left: 20px;
            width: 90%;
            text-align: center;
            font-family: 'Raleway', Arial, sans-serif;
            border: none;
            background-color: #5666a5;
            color: #ffffff;
            cursor: pointer;
            display: inline-block;
            text-transform: uppercase;
            line-height: 46px;
            font-weight: 400;
            font-size: 1em;
            outline: none;
            position: relative;
            overflow: hidden;
            border-radius: 23px;
            letter-spacing: 3px;
            -webkit-transform: translateZ(0);
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .btn-ttmh {
            margin-left: 20px;
            width: 90%;
            text-align: center;
            font-size: 15px;
            font-family: 'Raleway', Arial, sans-serif;
            border: 1px solid #5666a5;
            background-color: white;
            border-radius: 23px;
            color: #5666a5;
            cursor: pointer;
            display: inline-block;
            text-transform: uppercase;
            line-height: 46px;
            font-weight: 400;
            outline: none;
            position: relative;
            overflow: hidden;
            letter-spacing: 3px;
            -webkit-transform: translateZ(0);
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        /*Search bar */
        .searchTerm:focus{
            color: #00B4CC;
        }
        .searchButton {
            width: 40px;
            height: 36px;
            border: 1px solid #00B4CC;
            background: #00B4CC;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }
        /*table*/
        table{
            border-collapse: separate;
            border: 1px solid rgb(248, 247, 247);
        }

        th, td {
            border: 1px solid rgb(252, 243, 243);
            padding: 20px;
            margin : 50px;
            width: 150px;
        }

        .form-check-label{
            padding-left: 0.25rem;
        }

        .collapse{
            margin: 10px 0px 0px 20px;
        }
        div.section > div {width:100%;display:inline-flex;}
        div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}


        @media (max-width: 1000px) {
            .container > .row{padding:0 !important;}
            .container > .row > .col-xs-12.col-sm-5{
                padding-right:0 ;
            }
            .container > .row > .col-xs-12.col-sm-9 > div > p{
                padding-left:0 !important;
                padding-right:0 !important;
            }
            .container > .row > .col-xs-12.col-sm-9 > div > ul{
                padding-left:10px !important;

            }
        }

    </style>
    <script>

        $(function () {
            $('a[name="print"]').click(function () {
                var pageTitle = 'Hóa dơn đặt hàng',
                    stylesheet = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css',
                    win = window.open('', 'Print', 'width=900,height=600');
                win.document.write('<html><head><title>' + pageTitle + '</title>' +
                    '<link rel="stylesheet" href="' + stylesheet + '">' +
                    '<style>@media print{.dontprint{display:none;}}</style>' +
                    '</head><body>' + $('.table')[0].outerHTML + '</body></html>');
                win.document.close();
                win.print();
                return false;
            });
        });
    </script>
</head>
    <div class="contenedor">
        <nav class="navbar">
            <div class="navbar-center">
                <a href="{{ route('home') }}">
                    <img  src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.0-9/128796640_3503787783069204_4321913313741636998_o.jpg?_nc_cat=105&ccb=2&_nc_sid=09cbfe&_nc_ohc=EtbgkFHfpEUAX-OI7x6&_nc_ht=scontent.fsgn5-2.fna&oh=93f73358a6a32101756210deb5e0607f&oe=5FFD4429" alt="logo" class="hani-img" />
                </a>
            </div>
{{--            <div class="search">--}}
{{--                <input type= "text" class="searchTerm" placeholder="Tìm kiếm sản phẩm ">--}}
{{--                <button type="submit" class="searchButton">--}}
{{--                    <i class="fa fa-search"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
        </nav>
    </div>
<body>
<div class="container" style="margin-bottom: 50px;">
    <div class="row">
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-12" style="margin: 30px 0px;">
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                               aria-controls="collapseOne1">
                                <h5 class="mb-0">
                                    Thông tin giao hàng <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        @if(!\Illuminate\Support\Facades\Auth::check())
                        <p style="padding: 15px 0px 0px 20px;">Bạn đã có tài khoản?<a href="{{ route('checkout.get.login') }}"> Đăng nhập</a> hoặc <a href="{{ route('checkout.get.register') }}">Đăng ký</a></p>
                        @endif

                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><i class="fas fa-user"></i></label>
{{--                                    <span class="validateRadio" style="color: red; font-size: 10px;"><i>Vui lòng chọn</i></span><br>--}}
                                    <input style="width: 85%;" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Tên người nhận" value="{{ get_data_user('web', 'name') }}">
                                    @if($errors->has('name'))
                                        <span class="error-text" style="color: red;">
                                            {{$errors->first('name')}}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><i class="fas fa-phone"></i></label>
                                    <input value="{{ get_data_user('web', 'phone') }}" name="phone" style="width: 85%;" class="form-control" id="exampleFormControlInput1" placeholder="Số điện thoại">
                                    @if($errors->has('phone'))
                                        <span class="error-text" style="color: red;">
                                            {{$errors->first('phone')}}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><i class="fas fa-map-marker-alt"></i></label>
                                    <input style="width: 85%;" class="form-control" id="exampleFormControlInput1" placeholder="Địa chỉ" name="address">
                                    @if($errors->has('address'))
                                        <span class="error-text" style="color: red;">
                                            {{$errors->first('address')}}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"><i class="fas fa-clipboard"></i></label>
                                    <textarea style="width: 85%;" rows="4" cols="50" class="form-control" id="exampleFormControlInput1" placeholder="Ghi chú" name="note"></textarea>
                                </div>
{{--                                <div id="googleMap" style="width:100%;height:400px"></div>--}}
                                <button type="submit" class="btn-dh" href="{{ route('payment') }}">Đặt hàng</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                               aria-controls="collapseOne1">
                                <h5 class="mb-0">
                                    Phương thức thanh toán <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Thanh toán khi nhận hàng
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-5" style="margin-top: 30px; ">
            <div class="card" style="padding-bottom: 20px;">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingOne1">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                       aria-controls="collapseOne1">
                        <h5 class="mb-0">
                            Thông tin đơn hàng<i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                     data-parent="#accordionEx">
{{--                    @if($errors->any())--}}
{{--                        <h4>{{$errors->first()}}</h4>--}}
{{--                    @endif--}}
                    @if(Session::has('msg'))
                        <h6 style="color: green"><i>{{  Session::get("msg") }}</i></h6>
                    @else
                        <h6 style="color: red"><i>{{ Session::get("error") }}</i></h6>
                    @endif
                @if( \Illuminate\Support\Facades\Session::has("cart") != null)
                        <table class="table" id="gh" border="1px" style="font-size: 14px;">
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
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
                                                <li>{{ $item['detail'][2] }}</li>
                                            @endif
                                            @if($item['detail'][3])
                                                <li>{{ $item['detail'][3] }}</li>
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
                                    <td>
                                        {{ $item['quantity'] }}
                                    </td>
                                    <td>
                                        {{ number_format($item['productInfo']->pro_price*$item['quantity']) }}đ
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            @if(\Illuminate\Support\Facades\Session::get('cart'))
                            <tr class="dontprint">
                                <td>
                                    Mã khuyến mãi
                                </td>
                                <td colspan="2">
                                    <form method="post" action="{{ url('checkout/check_coupon') }}">
                                        @csrf
                                        <input class="form-control" name="coupon" style="float: right" placeholder="CODE123" value="{{ old('coupon',isset(\Illuminate\Support\Facades\Session::get('coupon')->cp_code) ? \Illuminate\Support\Facades\Session::get('coupon')->cp_code : '') }}"">
                                        <input style="margin-top: 10px; width: 100%" type="submit" class="btn-default check_coupon" name="check_coupon" value="Sử dụng mã giảm giá">
                                        @if(\Illuminate\Support\Facades\Session::get('coupon'))
                                            <a href="{{ url('checkout/unset_coupon') }}" class="btn-default" style="float: right; margin-top: 3px;">Xóa mã giảm giá</a>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <td>Tổng số lượng</td>
                                <td colspan="2" id="tt" style="text-align: right;">{{ \Illuminate\Support\Facades\Session::get('cart') ->totalQuantity }}</td>
                            </tr>
                            <tr>
                                <td>Tổng tiền</td>
                                <td colspan="2" id="tt" style="text-align: right;">{{ number_format(\Illuminate\Support\Facades\Session::get('cart') ->totalPrice) }}đ</td>
                            </tr>
                            <tr>
                                <td>Phí vận chuyển</td>
                                <td colspan="2" id="tt" style="text-align: right;">15.000đ</td>
                            </tr>
                            <tr>
                                <td>Tổng trả</td>
                                <td colspan="2" id="tt" style="text-align: right;">{{ number_format(\Illuminate\Support\Facades\Session::get('cart')->totalPrice + 15000) }}đ</td>
                            </tr>
                            @if(\Illuminate\Support\Facades\Session::get('coupon'))
                            @foreach(\Illuminate\Support\Facades\Session::get('coupon') as $key => $cou)
                            @if($cou['cp_func'] == 0)
                            <tr>
                                <td> Mã giảm: </td>
                                <td colspan="2" style="text-align: right;">
                                    <b>{{ $cou['cp_value'] }} %</b>
                                </td>
                            </tr>
                            <tr>
                                @php
                                    $total_cp = ((\Illuminate\Support\Facades\Session::get('cart')->totalPrice+15000)*$cou['cp_value'])/100;
                                    echo '<td>Tổng giảm:</td>'.'<td colspan="2" style="text-align: right;">'.number_format($total_cp).'đ</td>';
                                @endphp
                            </tr>
                            <tr>
                                <td>Tổng đã giảm: </td>
                                <td colspan="2" style="text-align: right;">
                                    {{ number_format((\Illuminate\Support\Facades\Session::get('cart')->totalPrice+15000)-$total_cp) }}đ
                                </td>
                            </tr>
                            @elseif($cou['cp_func'] == 1)
                            <tr>
                                <td> Mã giảm: </td>
                                <td colspan="2" style="text-align: right;">
                                    <b>{{ number_format($cou['cp_value']) }} đ</b>
                                </td>
                            </tr>
{{--                            <tr>--}}
{{--                                @php--}}
{{--                                    $total_cp = \Illuminate\Support\Facades\Session::get('cart')->totalPrice-$cou['cp_value'];--}}
{{--                                    echo '<td>Tổng giảm:</td>'.'<td colspan="2" style="text-align: right;">'.number_format($total_cp).'đ</td>';--}}
{{--                                @endphp--}}
{{--                            </tr>--}}
                            <tr>
                                <td>Tổng đã giảm: </td>
                                <td colspan="2" style="text-align: right;">
                                    {{ number_format((\Illuminate\Support\Facades\Session::get('cart')->totalPrice+15000)-$cou['cp_value']) }}đ
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            @endif
                        </table>
                    @endif
                    <a class="btn-ttmh" href="{{ route('order.cart') }}" >Tiếp tục mua hàng</a>
                    <a class="btn-ttmh" name="print" style="color: #5666a5;">In hóa đơn</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<script>
    // $(document).ready(function(){
    //     $(".btn-dh").click(function (){
    //        alertify.success("Đã đặt hàng thành công");
    //     });
    // });
</script>
</body>
</html>
