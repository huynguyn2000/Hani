<!DOCTYPE html>
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

    <title>HANI - ABOUT</title>
</head>
@include('component.header')
<style>
    header{
        background: url("https://scontent.fvca1-1.fna.fbcdn.net/v/t1.15752-9/129351148_585190945664474_3181927127833128853_n.jpg?_nc_cat=105&ccb=2&_nc_sid=ae9488&_nc_eui2=AeEF_9mRg1TzsoDqCu9NP9cYli5y1f8UPO-WLnLV_xQ8794T7TakeDK6K_mKW3la3xNQ3Cxl-tTlnGFd_ENQEOXe&_nc_ohc=D9XLLxca7l8AX_Zxd0q&_nc_ht=scontent.fvca1-1.fna&oh=c0b998b3e8e8fceec5c9c6af6774e426&oe=5FF33DCB");
        height: 400px;
    }

    header .contenedor{
        height: 400px;
    }

    .panel-login {
        border-color: #ccc;
        -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    }
    .panel-login>.panel-heading {
        color: #00415d;
        background-color: #fff;
        border-color: #fff;
        text-align:center;
    }
    .panel-login>.panel-heading a{
        text-decoration: none;
        color: #666;
        font-weight: bold;
        font-size: 15px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-login>.panel-heading a.active{
        color: #029f5b;
        font-size: 18px;
    }
    .panel-login>.panel-heading hr{
        margin-top: 10px;
        margin-bottom: 0px;
        clear: both;
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    }
    .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
        height: 45px;
        border: 1px solid #ddd;
        font-size: 16px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }
    .panel-login input:hover,
    .panel-login input:focus {
        outline:none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-color: #ccc;
    }
    .btn-login {
        background-color: #59B2E0;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #59B2E6;
    }
    .btn-login:hover,
    .btn-login:focus {
        color: #fff;
        background-color: #53A3CD;
        border-color: #53A3CD;
    }
    .forgot-password {
        text-decoration: underline;
        color: #888;
    }
    .forgot-password:hover,
    .forgot-password:focus {
        text-decoration: underline;
        color: #666;
    }

    .btn-register {
        background-color: #1CB94E;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #1CB94A;
    }
    .btn-register:hover,
    .btn-register:focus {
        color: #fff;
        background-color: #1CA347;
        border-color: #1CA347;
    }
</style>
<script>
        $(".textos").children("h3").text("A bad day with news is better than a good day without it.")
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
</script>
<body>
<section class="blog-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12" style="position: initial;">
                <div class="blog-single-main">
                    <div class="row">
                        <div class="col-12">
                            @if( isset($articles))
                                @foreach($articles as $article)
                                    <div class="blog-detail">

                                    <h2 class="blog-title">{{ $article->a_name }}</h2>
                                        <img style="height: 370px; width: 90%; margin-bottom: 20px;" src="{{ pare_url_file($article->a_avatar) }}">
                                    <div class="content">
                                        <p>
                                            {{ substr($article->a_content,0,400) }} ...
                                        </p>
                                    </div>
                                    <br>
                                    <a style="color: blue; cursor: pointer" data-id="{{ $article->id }}" name="ctn-btn">CONTINUE READING</a>
                                    <div class="blog-meta">
                                        <span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>{{ $article->created_at }}</a></span>
                                    </div>

                                    </div>
                                @endforeach
                                {{ $articles->links() }}
                            @endif
                                <div class="col-12" style="z-index: 1;">
                                    <div class="comments">
                                        <h3 class="comment-title">Comments ({{ $countCMT }})</h3>
                                        <!-- Single Comment -->
                                        @if(isset($comments))
                                        @foreach($comments as $comment)
                                        <div class="single-comment">
                                            <img src="{{ asset('theme_admin/image/default-user-image.png') }}" alt="#">
                                            <div class="content">
                                                <h4>{{ $comment->cmt_name }}<span>At {{ $comment->created_at }}</span></h4>
                                                <p>{{ $comment->cmt_content }}</p>
                                                <div class="button">
                                                    <a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        <!-- End Single Comment -->
                                    </div>
                                </div>
                                <div class="col-12" style="z-index: 1">
                                    <div class="reply">
                                        <div class="reply-head">
                                            <h2 class="reply-title">Bình luận</h2>
                                            @if(\Illuminate\Support\Facades\Auth::check())
                                            <!-- Comment Form -->
                                            <form>
                                                <div class="form-group">
                                                    <label>Tên:</label>
                                                    <input type="text" class="comment_name" name="comment_name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="email" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nội dung:</label>
                                                    <textarea name="comment_content" class="comment_content" required></textarea>
                                                </div>
                                                    <button id="btnAddCmt" class="btn btn-primary send-comment">Đăng bình luận</button>
                                                @else
                                                    <button class="btn btn-primary send-comment" data-toggle="modal" data-target="#loginModal">
                                                        Đăng nhập để bình luận
                                                    </button>
                                                @endif
                                                <div id="notify-comment"></div>
                                            </form>
                                            <!-- End Comment Form -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
{{--------------------LOGIN MODAL-------------------------------------}}
            <div class="modal fade" id="loginModal" role="dialog">
                <div class="modal-dialog" style="max-width:1000px; width: 1000px;">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <b>ĐĂNG NHẬP HOẶC ĐĂNG KÝ</b>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" id="md_content">
                            <div style="width: 90%" class="container">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="panel panel-login">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <a class="active" id="login-form-link">Login</a>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <a  id="register-form-link">Register</a>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form id="login-form" action="{{ route('allpage.post.login') }}" method="post" role="form" style="display: block;">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="text" name="email" id="username" tabindex="1" class="form-control" @error('email') is-invalid @enderror" placeholder="Username" value="">

                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" @error('password') is-invalid @enderror" placeholder="Password">

                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group text-center">
                                                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                                <label for="remember"> Remember Me</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-sm-offset-3">
                                                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="text-center">
                                                                            <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <form id="register-form" action="{{ route('allpage.post.register') }}" method="post" role="form" style="display: none;">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Username" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="phone" id="phone" tabindex="1" class="form-control" placeholder="Phone Number" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-sm-offset-3">
                                                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
{{--------------------MAIN-SIDEBAR-------------------------------------}}
            <div class="col-lg-4 col-12" style="position: initial;">
                <div class="main-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget search">
                        <div class="form">
                            <form method="get" action="{{ route('get.article.list') }}">
                                <input type="text" name="searchInfo" placeholder="Search Here..." maxlength="128">
                                <button type="submit" class="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget recent-post">
                        <h3 class="title">Categories</h3>
                        @if( isset($categories))
                        <!-- Single Post -->
                        <div class="single-post">
                            <div class="content">
                                @foreach($categories as $category)
                                <a style="color: black;" href="{{ route('order') }}#{{ $category->c_name }}">{{ $category->c_name }}</a><br>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <!-- End Single Post -->
                    </div>
                    <!--/ End Single Widget -->
                    <div class="single-widget recent-post">
                        <h3 class="title">Featured Products</h3>
                        <div class="single-post">
                            <div class="content">
                                <img src="{{ asset('theme_admin/image/128812484_3506156009499048_3375755073180637359_o.jpg') }}" class="p02">

                            <div class="detail">
                                <h4 class="min01">Bánh kem trứng sữa<br/></h4>
                                <p class="min04">40000 VNĐ</p>
                            </div>
                                <br>
                                <img src="{{ asset('theme_admin/image/129003028_3506156162832366_4680126327750079344_o.jpg') }}" class="p02">
                            <div class="detail">
                                <h4 class="min02">Bánh sừng trâu</h4>
                                <p class="min02">40000 VNĐ</p>
                            </div>
                                <br>
                                <img src="{{ asset('theme_admin/image/129897150_3506155819499067_3945939008353199087_o.jpg') }}" class="p02">

                            <div class="detail">
                                <h4 class="min03">Bánh chà bông hạnh nhân<br/></h4>
                                <p class="min06">40000 VNĐ </p>
                            </div>

                            </div>
                        </div>
                        <!-- End Single Post -->
                    </div>
                    <!-- Single Widget -->
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget side-tags">
                        <h3 class="title">Tags</h3>
                        <ul class="tag">
                            <li><a href="#">Milktea</a></li>
                            <li><a href="#">Tea</a></li>
                            <li><a href="#">Kafe</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Pizza</a></li>
                        </ul>
                    </div>
                    <!--/ End Single Widget -->
                </div>
            </div>
        </div>
    </div>
</section>
{{--<a href="#contenedor" style="margin: 0px 0px 30px 50px; width: 50px; border: 1px solid black"><i class="fas fa-arrow-up" style="margin: 20px;"></i></a>--}}
<a id="scrollUp" href="#contenedor" style="position: fixed; z-index: 2147483647; display: none;"><span><i class="fa fa-angle-up"></i></span></a>
@include('component.footer')
<script>
    $(document).ready(function(){
        $("a[name='ctn-btn']").click(function(){
            var $this = $(this);
            console.log($(this).data("id"));
            $.ajax({
                url: 'article-Detail/'+$(this).data("id"),
                type: 'GET',
            }).done(function(response){
                console.log($this.data("id"));
                    $this.parent('.blog-detail').html(response);
            });
        });

        load_comment();
        function load_comment(){
            $.ajax({
                url: 'Load-Comment',
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}"
                },
            }).done(function(response){
                console.log(response)
                $(".comments").empty();
                $(".comments").html(response);
            });
        }

        $("#btnAddCmt").click(function(){
            var comment_name = $('.comment_name').val();
            var comment_content = $('.comment_content').val();
            console.log(comment_name)
            $.ajax({
                url: 'Send-Comment',
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    comment_name : comment_name,
                    comment_content : comment_content
                },
            }).done(function(){
                load_comment();
                $('#notify-comment').html('<p class="text text-success">Thêm bình luận thành công</p>');
            });
        });
    });
</script>
</body>
</html>

