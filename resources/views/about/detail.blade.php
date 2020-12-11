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
    <title>HANI</title>
</head>
@include('component.header')
<style>
    header{
        background: url("https://alltop.vn/backend/media/images/posts/94/Hani_Kafe__Kitchen-9192.jpg");
    }
</style>
<script>
    $(document).ready(function() {
        $(".textos").children("h3").text("A bad day with news is better than a good day without it.")
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
                            @if( isset($articleDetail))
                                <div class="blog-detail">
                                    <img src="{{ pare_url_file($articleDetail->a_avatar) }}" style="width: 98%; padding-top: 20px;">
                                    <h2 class="blog-title">{{ $articleDetail->a_name }}</h2>
                                    <div class="content">
                                        <p>
                                            {{ $articleDetail->a_content}}
                                        </p>
                                    </div>
                                </div>
                            @endif
                            <br>
                            <button class="btn btn-default" href="#">Quay lại</button>
                        </div>
                                                <div class="col-12" style="z-index: 1;">
                                                    <div class="comments">
                                                        <h3 class="comment-title">Comments (3)</h3>
                                                        <!-- Single Comment -->
                                                        <div class="single-comment">
                                                            <img src="https://via.placeholder.com/80x80" alt="#">
                                                            <div class="content">
                                                                <h4>Alisa harm <span>At 8:59 pm On Feb 28, 2018</span></h4>
                                                                <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
                                                                <div class="button">
                                                                    <a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Comment -->
                                                    </div>
                                                </div>
                                                <div class="col-12" style="z-index: 1">
                                                    <div class="reply">
                                                        <div class="reply-head">
                                                            <h2 class="reply-title">Bình luận</h2>
                                                            <!-- Comment Form -->
                                                            <form method="get" class="form-group" action="{{ route('article.detail.comment') }}">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div id="divTen" class="form-group">
                                                                            <label>Tên:<span>*</span></label>
                                                                            <input type="text" name="name" placeholder="" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div id="divEmail" class="form-group">
                                                                            <label>Email:<span>*</span></label>
                                                                            <input type="email" name="email" placeholder="" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Nội dung:<span>*</span></label>
                                                                            <textarea name="comment" placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <p style="padding: 15px 0px 0px 20px;">
                                                                            <button type="submit" class="btn btn-primary">Đăng bình luận </button>
                                                                            hoặc<a class="btn" data-toggle="modal" data-target="#fast_login">Đăng nhập để bình luận</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- End Comment Form -->
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
                            <input type="email" placeholder="Search Here...">
                            <a class="button" href="#"><i class="fa fa-search"></i></a>
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
                                        <h4>{{ $category->c_name }}</h4>
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
</body>

