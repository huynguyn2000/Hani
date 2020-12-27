<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('theme_admin/css/Hani11.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <title>HANI</title>
</head>
@include('component.header')
<style>
    header{
        background: url("https://alltop.vn/backend/media/images/posts/94/Hani_Kafe__Kitchen-9191.jpg");
        height: 500px;
    }

    .bs-tag {
        position: absolute;
        top: 16px;
        right: 5px;

        color: #000;
        font-family: 'montserrat';
        font-size: 3vw;
        letter-spacing: 1vw;
        max-width: 700px;
        background: rgba(255, 253, 160, 1);
        background: -webkit-linear-gradient( left, #00ffff 0%, #97fba0 25%, #97b1fb 50%, #00ffff 100%) repeat;
        -webkit-background-clip: text;
        -ms-background-clip: text;
        -moz-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        -ms-text-fill-color: transparent;
        -moz-text-fill-color: transparent;
        text-fill-color: transparent;
        -webkit-animation-name: masked-animation;
        -webkit-animation-duration: 50s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
    }

    @-webkit-keyframes masked-animation {
        0% {
            background-position: 0 0;
        }
        100% {
            background-position: -8000px -3000px;
        }
    }

    @import url('https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nerko+One&family=Ubuntu:wght@300&display=swap');
    .col-sm-2{
        padding-left: 80px;
        padding-top: 30px ;
        max-width: 600px;
        font-family: 'Fredoka One', cursive;
        font-size:25px;
    }
    .col-sm-10{
        font-family: 'Fredoka One', cursive;
    }
    .product{
        font-family: 'M PLUS 1p', sans-serif;
    }
</style>
<script>
    $(document).ready(function() {
        $(".textos").children("h3").text("A bad day with Hani's menu is better than a good day without it.")
    });
</script>
<body>
<div class="row">
    @if( isset($categories))
        <div class="col-sm-2">
            <h2>Menu</h2>
            @foreach($categories as $category)
            <a style="font-size: 24px;" href="#{{ $category->c_name }}">{{ $category->c_name }}</a><br>
            @endforeach
        </div>
    @else
        <div class="col-sm-2">
            <h2>Menu</h2>
        </div>
    @endif

    <div class="col-sm-10 " style="margin-bottom: 50px; position: initial; ">
           @for($i=0; $i<$countCate; $i++)
            @if( isset($categories))
                <h2 id="{{ $categories[$i]->c_name }}" style="margin-top: 50px; border-left: 4px solid orangered; padding-left: 20px;">{{ $categories[$i]->c_name }}</h2>
            @else
                <h2 id="searchProducts" style="margin-top: 50px; border-left: 4px solid orangered; padding-left: 20px;">Sản phẩm tìm kiếm</h2>
            @endif
            <div class="products-center">
            <!-- products -->
            @foreach($productsND[$i] as $key => $value)
            <article class="product">
                <div class="img-container">
                    <img style="height: 345px;" src="{{ pare_url_file($value->pro_avatar) }}" alt="item" class="product-img">



                    <a href="{{ route('order.cart') }}">
                        <button class="bag-btn" data-id="1">
                            <i class="fa fa-coffee"></i>
                            Đặt hàng
                        </button>
                    </a>
                    @if($value->pro_hot == 1)
                            <div class="bs-tag"><i class="fas fa-thumbs-up"></i></div>
                    @endif
                </div>
                <h3 style="color: black;"><i>{{ $value->pro_name }}</i></h3>
                <h4 style="font-size: 17px; color: black;">{{ number_format($value->pro_price) }}đ</h4>
            </article>

            @endforeach
        </div>
            @endfor
    </div>
</div>
@include('component.footer')
</body>

<!-- add to cart
 <div class="cart-overlay">
   <div class="cart">

       <span class="close-cart">
            <i class="fas fa-window-close"></i>
       </span>
       <h3>YOUR CART</h3>
      <div class="cart-content">

      </div>
      <div class="cart-footer">
        <h3>Total : $ <span class="cart-total">0</span></h3>
      <div class="clear-cart banner-btn">

      </div>
      </div>
  </div>
</div> -->

