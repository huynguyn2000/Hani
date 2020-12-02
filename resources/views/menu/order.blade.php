
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
    <title>HANI</title>
</head>
{{--<div class="contenedor">--}}
{{--    <nav class="navbar">--}}
{{--        <div class="navbar-center">--}}
{{--            <img src="https://scontent-hkg4-2.xx.fbcdn.net/v/t1.0-9/39925165_1817478455033487_1753332579395698688_o.jpg?_nc_cat=104&ccb=2&_nc_sid=09cbfe&_nc_ohc=HaOTP2uH7bwAX8JO7u0&_nc_ht=scontent-hkg4-2.xx&oh=87cf12622631db34db26aca22c263d64&oe=5FD4A824" alt="logo" class="hani-img"/>--}}
{{--            <a href="Hani11.1.html">Home</a>--}}
{{--            <a href="about.html">About</a>--}}
{{--            <a href="order.html">Menu</a>--}}
{{--            <a href="blog.html">Store</a>--}}
{{--            <span class=nav-icon></span>--}}
{{--            <a href="https://www.facebook.com/HaniKafeKitchen"><i class="fa fa-facebook" ></i></a>--}}
{{--            <a href="https://www.instagram.com/hanikafekitchen148/"><i class="fa fa-instagram"></i></a>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</div>--}}
@include('component.header')
<style>
    header{
        background: url("https://alltop.vn/backend/media/images/posts/94/Hani_Kafe__Kitchen-9191.jpg");
    }
</style>
<script>
    $(document).ready(function() {
        $(".textos").children("h3").text("A bad day with Hani's menu is better than a good day without it.")
    });
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    .col-sm-2{
        padding-left: 80px;
        padding-top: 30px ;
        max-width: 600px;
    }
    .row .col-sm-2 .h2{
        font-family: 'Open Sans', sans-serif;
    }
</style>
<body>
<div class="row">
    @if( isset($categories))
    <div class="col-sm-2">
        <h2>Menu</h2>
        @foreach($categories as $category)
        <a href="#{{ $category->c_name }}">{{ $category->c_name }}</a><br>
        @endforeach
    </div>
    @endif

    <div class="col-sm-10 " style="margin-bottom: 50px; position: initial;">
        @if( isset($categories))
           @for($i=0; $i<$countCate; $i++)
        <h2 id="{{ $categories[$i]->c_name }}" style="margin-top: 50px; border-left: 4px solid orangered; padding-left: 20px;">{{ $categories[$i]->c_name }}</h2>
        <div class="products-center">
            <!-- products -->
            @foreach($productsND[$i] as $key => $value)
            <article class="product">
                <div class="img-container">
                    <img src="{{ pare_url_file($value->pro_avatar) }}" alt="item" class="product-img">

                    <a href="{{ route('order.cart') }}">
                        <button class="bag-btn" data-id="1">
                            <i class="fa fa-coffee"></i>
                            Đặt hàng
                        </button>
                    </a>
                </div>
                <h3><b>{{ $value->pro_name }}</b></h3>
                <h4 style="font-size: 17px;">{{ number_format($value->pro_price) }}đ</h4>
            </article>

            @endforeach
        </div>
            @endfor
            @endif
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

