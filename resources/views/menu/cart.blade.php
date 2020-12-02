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

    <style>
    .center {
            margin-top:50px;
        }

        .modal-header {
            padding-bottom: 5px;
        }

        .modal-footer {
            padding: 0;
        }

        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
        /* product*/
        .h1{

            color: #080808 ;
            padding-left: 230px;
            padding-top: 20px;
            position: sticky;

        }
        .h2{
            color: #074949 ;
            padding-left: 40px;
            padding-top: 20px;


        }
        .products-center1 {
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(110px, 2fr));
            grid-column-gap: 1.5rem;
            grid-row-gap: 2rem;
            padding-top: 10px;
        }
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
        .product-img1 {
            display: inline-block;
            width: 100%;
            min-height: 12rem;
            transition: var(--mainTransition);
            border-radius: 5px;
        }
        .col-sm-3{
            border: 5px dotted rgb(134, 146, 141);
            width: 80%;
            border-radius: 15px;
            margin: 0 auto;
            max-width: 600px;
        }
        .col-sm-6{
            border: 5px dotted rgb(143, 146, 150);
            width: 80%;
            border-radius: 15px;
            margin: 0 auto;
            max-width: 600px;
        }
        /*btn*/
        .bag-btn1 {
            position: absolute;
            top: 70%;
            right: 0;
            background: rgb(75, 156, 136);
            border: none;
            text-transform: uppercase;
            padding: 0.2rem 0.4rem;
            letter-spacing: var(--mainSpacing);
            font-weight: bold;
            weight:10px;
            transition: var(--mainTransition);
            transform: translateX(101%);
            cursor: pointer;
            border-radius: 70px;
        }
        .bag-btn1:hover {
            background-color: #6FBBFB ;
        }
        .fa-coffe {
            margin-right: 0.1rem;
        }
        .img-container:hover .bag-btn1 {
            transform: translateX(-50%);
        }
        /*btn thanh toán */
        @import url(https://fonts.googleapis.com/css?family=Raleway:400);
        .btn-tt {
            font-family: 'Raleway', Arial, sans-serif;
            border: none;
            background-color: #5666a5;
            border-radius: 5px;
            color: #ffffff;
            cursor: pointer;
            padding: 0px 30px;
            display: inline-block;
            margin: 15px 50px;
            text-transform: uppercase;
            line-height: 46px;
            font-weight: 400;
            font-size: 1em;
            outline: none;
            position: relative;
            overflow: hidden;
            font-size: 16px;
            border-radius: 23px;
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

        /*Resize the wrap to see the search bar change!*/
        .wrap{
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
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
    </style>
    <style>
        .item-photo{
            margin-top: 50px;
            display:flex;
            justify-content:center;
            align-items:center;
            border-right:1px solid #f6f6f6;}
        .btn-success{
            width:100%;
            border-radius:0;}

        .btn-minus{
            cursor:pointer;
            font-size:7px;
            display:flex;
            align-items:center;
            padding:5px;
            padding-left:10px;
            padding-right:10px;
            border:1px solid gray;
            border-radius:2px;
            border-right:0;}
        .btn-plus{
            cursor:pointer;
            font-size:7px;
            display:flex;
            align-items:center;
            padding:5px;
            padding-left:10px;
            padding-right:10px;
            border:1px solid gray;
            border-radius:2px;
            border-left:0;
        }

        .form-check-label{
            padding-left: 0.25rem;
        }

        .collapse{
            margin: 10px 0px 0px 20px;
        }
        div.section > div {width:100%;display:inline-flex;}
        div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
        .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}


        @media (max-width: 600px) {
            .container {margin-top:0px !important;}
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
            .section{width:104%;}
            .menu-items{padding-left:0;}
        }
    </style>
    <script>
        $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on tăng giảm
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input[type=text]").val(now);
                }else{
                    $(".section > div > input[type=text]").val("1");
                }

                var sl = $(this).parent().children("input[type=text]").val();
                var value = $(this).parents(".col-lg-7").children(".h4-responsive").text();
                var res = value.substring(1,7)
                var price = $(this).parent().children("input[type=hidden]").val()
                ttprice = parseInt(sl) * parseInt(price)
                addprice = parseInt(res) - parseInt(price);

                if(parseInt(addprice) == parseInt(ttprice)){
                    var replace = value.replace(res,addprice);
                    $(this).parents(".col-lg-7").children(".h4-responsive").text(replace);
                }
            })
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input[type=text]").val(parseInt(now)+1);
                }else{
                    $(".section > div > input[type=text]").val("1");
                }

                var sl = $(this).parent().children("input[type=text]").val();

                if(sl >= 2){
                    var price = $(this).parent().children("input[type=hidden]").val();
                    var value = $(this).parents(".col-lg-7").children(".h4-responsive").text();
                    var res = value.substring(1,7)
                    addprice = parseInt(res) + parseInt(price);
                    var replace = value.replace(res,addprice);
                    $(this).parents(".col-lg-7").children(".h4-responsive").text(replace);
                }
            })

            $("input[type=checkbox]").click( function(){
                var productprice = $(this).parents(".col-lg-7").find("input[type=hidden]").val();

                var sl = $(this).parents(".col-lg-7").find("input[type=text]").val()
                var value = $(this).parents(".col-lg-7").children(".h4-responsive").text();
                var res = value.substring(1,7)
                var price = $(this).val();

                    console.log(productprice+" "+sl+" "+value+" "+res+" "+price)
                if( $(this).is(':checked') ){
                    totalprice = parseInt(price) + parseInt(productprice)
                    addprice = parseInt(res) + (parseInt(sl)*parseInt(price));
                    var replace = value.replace(res,addprice);
                    console.log(totalprice+" "+addprice+" "+replace)
                    $(this).parents(".col-lg-7").children(".h4-responsive").text(replace);
                    $(this).parents(".col-lg-7").find("input[type=hidden]").val(totalprice);
                }

                if( $(this).is(':checked') == false){
                    totalprice = parseInt(productprice) - parseInt(price)
                    addprice = parseInt(res) - (parseInt(sl)*parseInt(price));
                    var replace = value.replace(res,addprice);
                    $(this).parents(".col-lg-7").children(".h4-responsive").text(replace);
                    $(this).parents(".col-lg-7").find("input[type=hidden]").val(totalprice);
                }
            });
        })
    </script>
    <div class="contenedor">
        <nav class="navbar">
            <div class="navbar-center">
                <a href="{{ route('home') }}">
                    <img  src="https://scontent-hkg4-2.xx.fbcdn.net/v/t1.0-9/39925165_1817478455033487_1753332579395698688_o.jpg?_nc_cat=104&ccb=2&_nc_sid=09cbfe&_nc_ohc=HaOTP2uH7bwAX8JO7u0&_nc_ht=scontent-hkg4-2.xx&oh=87cf12622631db34db26aca22c263d64&oe=5FD4A824" alt="logo" class="hani-img" />
                </a>
            </div>
            <div class="search">
                <input type= "text" class="searchTerm" placeholder="Tìm kiếm sản phẩm ">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </nav>
    </div>
</head>
<body>

<div class="container-fluid" style="margin-top: 30px;">

    <div class="row">
        @if( isset($odd) && isset($even))
        <div class="col-sm-3" style="background-color:#b6ccd4;">
            <h1>Drinks </h1>
            @for($i=0; $i<count($odd); $i++)
            @foreach($odd[$i] as $value)
                <a href="#{{ $value->c_name }}">{{ $value->c_name }} <span class="float-right badge badge-light round">{{ $countProductOdd[$i] }}</span></a><br>
            @endforeach
            @endfor
            <h1>Foods </h1>
            @for($i=0; $i<count($even); $i++)
            @foreach($even[$i] as $value)
                <a href="#{{ $value->c_name }}">{{ $value->c_name }} <span class="float-right badge badge-light round">{{ $countProductEven[$i] }}</span></a><br>
            @endforeach
            @endfor
        </div>
        @endif

        <div class="col-sm-6" style="background-color:hsl(177, 30%, 85%);">
            <h1 class="h1">Menu</h1>
            <hr>

            @if( isset($categories))
                @for($i=0; $i<$countCate; $i++)
            <h2 id="{{ $categories[$i]->c_name }}" style="margin-top: 50px; border-left: 4px solid orangered; padding-left: 20px;">{{ $categories[$i]->c_name }}</h2>


                    <div class="products-center1">
                    @foreach($productsND[$i] as $key => $value)
                    <article class="product">
                        <div class="img-container">
                            <img src="{{ pare_url_file($value->pro_avatar) }}" alt="Kafe sữa" class="product-img1">
                        </div>
                        <h3 id="product-name">{{ $value->pro_name }}</h3>
                        <h4>
                            <span id="product-price">{{ number_format($value->pro_price) }}đ</span>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$value->pro_slug}}">
                                <i class='fas fa-plus-circle'></i>
                            </button>
                        </h4>

                        <div class="modal fade" id="{{ $value->pro_slug }}" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">

                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <!--Carousel Wrapper-->
                                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                                                     data-ride="carousel">
                                                    <!--Slides-->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="{{ pare_url_file($value->pro_avatar) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.Carousel Wrapper-->
                                            </div>
                                            <div class="col-lg-7">
                                                <h2 class="h2-responsive product-name">
                                                    <strong>{{ $value->pro_name }}</strong>
                                                </h2>
                                                <h4 class="h4-responsive"><span>+</span>{{ $value->pro_price }}</h4>

                                                <!-- Số lượng-->
                                                <div class="section" style="padding-bottom:20px;">
                                                    <h2 class="title-attr"><small>Số lượng</small></h2>
                                                    <div class="quantity-container">
                                                        <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                                                        <input max="20" min="1" type="text" value="1" class="form-control" name="sl"/>
                                                        <input type="hidden" class="price" value="40000">
                                                        <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                                                    </div>
                                                </div>
                                                <!--Accordion wrapper-->
                                                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

{{--                                                    <!-- Accordion card -->--}}
                                                    <div class="card">

                                                        <!-- Card header -->
                                                        <div class="card-header" role="tab" id="headingOne1">
                                                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                                                               aria-controls="collapseOne1">
                                                                <h5 class="mb-0">
                                                                    Chọn loại <i class="fas fa-angle-down rotate-icon"></i>
                                                                </h5>
                                                            </a>
                                                        </div>

                                                        <!-- Card body -->
                                                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                                                             data-parent="#accordionEx">
                                                            <div class="form-check form-check-inline" style=" margin-right: 7rem;">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Nóng</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">Lạnh</label>
                                                            </div>
                                                        </div>
                                                    </div>


{{--                                                    <!-- Accordion card -->--}}
                                                    <div class="card">

{{--                                                        <!-- Card header -->--}}
                                                        <div class="card-header" role="tab" id="headingTwo2">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                                               aria-expanded="false" aria-controls="collapseTwo2">
                                                                <h5 class="mb-0">
                                                                    Chọn lượng đường<i class="fas fa-angle-down rotate-icon"></i>
                                                                </h5>
                                                            </a>
                                                        </div>

{{--                                                        <!-- Card body -->--}}
                                                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                                                             data-parent="#accordionEx">
                                                            <div class="form-check form-check-inline" style=" margin-right: 7rem;">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">100%</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">70%</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline" style=" margin-right: 7.5rem;">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">50%</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">30%</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">Không đường</label>
                                                            </div>
                                                        </div>

                                                    </div>
{{--                                                    <!-- Accordion card -->--}}

{{--                                                    <!-- Accordion card -->--}}
                                                    <div class="card">

                                                        <!-- Card header -->
                                                        <div class="card-header" role="tab" id="headingThree3">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                                                               aria-expanded="false" aria-controls="collapseThree3">
                                                                <h5 class="mb-0">
                                                                    Chọn lượng đá <i class="fas fa-angle-down rotate-icon"></i>
                                                                </h5>
                                                            </a>
                                                        </div>

                                                        <!-- Card body -->
                                                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                                                             data-parent="#accordionEx">
                                                            <div class="form-check form-check-inline" style=" margin-right: 7rem;">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">100%</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">70%</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline" style=" margin-right: 7.5rem;">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">50%</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">30%</label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">Không đá</label>
                                                            </div>
                                                        </div>

                                                    </div>

{{--                                                    <!-- Accordion card -->--}}
                                                    <div class="card">

                                                        <!-- Card header -->
                                                        <div class="card-header" role="tab" id="headingThree4">
                                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                                                               aria-expanded="false" aria-controls="collapseThree4">
                                                                <h5 class="mb-0">
                                                                    Chọn topping<i class="fas fa-angle-down rotate-icon"></i>
                                                                </h5>
                                                            </a>
                                                        </div>

                                                        <!-- Card body -->
                                                        <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
                                                             data-parent="#accordionEx">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" value="5000">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    Trân châu đen (+5000VNĐ)
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck2" value="6000">
                                                                <label class="form-check-label" for="defaultCheck2">
                                                                    Trân châu trắng(+6000VNĐ)
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck3" value="5000">
                                                                <label class="form-check-label" for="defaultCheck3">
                                                                    Thạch dừa đào(+5000VNĐ)
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck4" value="6000">
                                                                <label class="form-check-label" for="defaultCheck4">
                                                                    Thạch dừa chanh dây(+6000VNĐ)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
{{--                                                        <!-- Accordion wrapper -->--}}
{{--    --}}{{--                                                        href="{{ url('Add-Cart/'.$value->id) }}"--}}
{{--                                                        <!-- Add to Cart -->--}}
                                                        <div class="card-body">
                                                            <div class="text-center">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                                                <a onclick="AddCart({{ $value->id }})" class="btn btn-primary" name="buy-btn">Chọn mua
                                                                    <i class="fas fa-cart-plus ml-2" aria-hidden="true"></i>
                                                                </a>
                                                            </div>
                                                        </div>
{{--                                                        <!-- /.Add to Cart -->--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    </div>
                @endfor
            @endif
        </div>
        <div class="col-sm-3" style="background-color:#e3e8e9;" id="shopping-cart">
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
                                {{ number_format($item['productInfo']->pro_price) }}đ
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
        </div>
            </div>
        </div>

@include('component.footer')
<!-- JavaScript -->
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
            function AddCart(id){
                $.ajax({
                    url: 'Add-Cart/'+id,
                    type: 'GET',
                }).done(function(response){
                    RenderCart(response);
                    alertify.success('Đã thêm sản phẩm mới');
                });
            }

            $("#shopping-cart").on("click",".thaotac button",function(){
                $.ajax({
                    url: 'Delete-Item-Cart/'+$(this).data("id"),
                    type: 'GET',
                }).done(function(response){
                    RenderCart(response);
                    alertify.success('Đã xóa sản phẩm');
                });
            });

            function RenderCart(response){
                $('#shopping-cart').empty();
                $('#shopping-cart').html(response);
            }
            // $(document).ready(function(){
            //     $("a[name='buy-btn']").click(function(){
            //         var productname = $(this).parents(".product").children('#product-name').text();
            //         var price = $(this).parents(".product").children('h4').children('#product-price').text();
            //         var quantity = $('.product-quantity').val();
            //         var tt = $("#tt").text()
            //
            //         var tr = "<tr><td>"+productname+"</td><td>"+quantity+"</td><td>"+price+"</td></tr>"
            //         $("#gh tr:last").before(tr)
            //         $("#tt").text(parseInt(tt)+parseInt(price)+',000đ')
            //     });
            // });
        </script>
</body>
</html>
