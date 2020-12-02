<header>
    <div class="contenedor" id="contenedor">
        <nav style="position: fixed" class="navbar">
            <div class="navbar-header">
                <img src="https://scontent-hkg4-2.xx.fbcdn.net/v/t1.0-9/39925165_1817478455033487_1753332579395698688_o.jpg?_nc_cat=104&ccb=2&_nc_sid=09cbfe&_nc_ohc=HaOTP2uH7bwAX8JO7u0&_nc_ht=scontent-hkg4-2.xx&oh=87cf12622631db34db26aca22c263d64&oe=5FD4A824" alt="logo" class="hani-img"/>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('article') }}">About</a> </li>
                <li><a href="{{ route('order') }}">Menu</a></li>
                <li><a href="blog.html">Store</a></li>
                <li><a href="https://www.facebook.com/HaniKafeKitchen"><i class="fa fa-facebook" ></i></a></li>
                <li><a href="https://www.instagram.com/hanikafekitchen148/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fas fa-search"></i></a></li>
                <div class="dropdown show" style="padding: 0px 77px 0px 20px;">
                    <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user"></i>
                    </a>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Giỏ hàng</a>
                            <br>
                            <a class="dropdown-item" href="{{ route('get.logout.user') }}">Thoát</a>
                        </div>
                    @else
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('get.register') }}">Đăng ký</a>
                            <br>
                            <a class="dropdown-item" href="{{ route('get.login') }}">Đăng nhập</a>
                        </div>
                    @endif
                </div>
            </ul>
        </nav>
    </div>
    <div class="textos">
        <h1 class="nombre">Hani <span> kafé & kitchen </span></h1>
        <h3>A bad day with coffee is better than a good day without it.</h3>
    </div>
</header>
