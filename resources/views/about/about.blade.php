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
                            @if( isset($articles))
                            <div class="blog-detail">
                                @foreach($articles as $article)
                                <h2 class="blog-title">{{ $article->a_name }}</h2>
                                <div class="content">
                                    <p>
                                        {{ $article->a_content }}
                                    </p>
                                </div>
                                    <p style=" cursor:pointer; font-weight:bold" >CONTINUE READING   <i class="fas fa-arrow-right"></i> </p>
                                <div class="blog-meta">
                                    <span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>{{ $article->created_at }}</a><a href="#"><i class="fa fa-comments"></i>Comment (15)</a></span>
                                </div>
                                @endforeach
                            </div>
                            @endif

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
                                    <form class="form" action="#">
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
                                                    <label>Bình luận:<span>*</span></label>
                                                    <textarea name="message" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <table>
                                                    <tbody><tr>
                                                        <td>
                                                            <div class="form-group button">
                                                                <button type="submit" class="btn">Đăng bình luận</button>
                                                            </div>
                                                        </td>
                                                        <td><div id="divHoac"><p><strong>Hoặc:</strong></p></div></td>
                                                        <td>
                                                            <div id="btnLogin" class="form-group button">
                                                                <a class="btn" data-toggle="modal" data-target="#fast_login">Đăng nhập để bình luận</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
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
                                <img src="https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.15752-9/122741016_356260332290745_7321967067279618206_n.png?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=NbXIz5bAkMUAX94BEDB&_nc_ht=scontent.fsgn5-5.fna&oh=b9a3968ab6ad619776218ab2bccf2b34&oe=5FBACFF2" class="p02">

                                {{--<img src="https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.15752-9/122149344_1040171176443862_335627744303319336_n.png?_nc_cat=110&ccb=2&_nc_sid=ae9488&_nc_ohc=VnE5QT0sm0AAX8ttYsB&_nc_ht=scontent.fsgn2-6.fna&oh=d608b0a5df8aa8c1507ff59caef10663&oe=5FB8B7CD" class="p01">--}}
                            <div class="detail">
                                <h4 class="min01">Salad trứng<br/></h4>
                                <p class="min04">40000 VNĐ</p>
                            </div>
                                <br>
                                <img src="https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.15752-9/122741016_356260332290745_7321967067279618206_n.png?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=NbXIz5bAkMUAX94BEDB&_nc_ht=scontent.fsgn5-5.fna&oh=b9a3968ab6ad619776218ab2bccf2b34&oe=5FBACFF2" class="p02">
                            <div class="detail">
                                <h4 class="min02">Cold Brew Cam Sả</h4>
                                <p class="min02">40000 VNĐ</p>
                            </div>
                                <br>
                                <img src="https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.15752-9/122741016_356260332290745_7321967067279618206_n.png?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=NbXIz5bAkMUAX94BEDB&_nc_ht=scontent.fsgn5-5.fna&oh=b9a3968ab6ad619776218ab2bccf2b34&oe=5FBACFF2" class="p02">

                                {{--<img src="https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-9/120757130_3338448682936449_3847794334232231967_o.jpg?_nc_cat=105&ccb=2&_nc_sid=730e14&_nc_ohc=PImeX1Cia0MAX-pIfZt&_nc_ht=scontent-sin6-2.xx&oh=e5bf3fddfeb4833053cd79fd88eb7e18&oe=5FB77AA4" class="p03">--}}
                            <div class="detail">
                                <h4 class="min03">Trà phúc bồn tử <br/></h4>
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
{{--<section class="about">--}}
{{--<div class="container">--}}
{{--    <img src="https://scontent.fsgn2-5.fna.fbcdn.net/v/t1.15752-9/121965362_453528702290442_1771613819877640618_n.png?_nc_cat=104&ccb=2&_nc_sid=ae9488&_nc_ohc=V74wg0-oI5EAX8jefQm&_nc_ht=scontent.fsgn2-5.fna&oh=ae9d0378200c34365becc4ec9bc60eb7&oe=5FB60029" alt="" class="blog-img">--}}
{{--    <img src="https://scontent.fsgn2-5.fna.fbcdn.net/v/t1.0-9/83117015_2678484475567119_1295343938697166848_n.jpg?_nc_cat=104&ccb=2&_nc_sid=e3f864&_nc_ohc=t7SP8QOeXsIAX_zCdff&_nc_ht=scontent.fsgn2-5.fna&oh=1e0f0bd63abfb9653fea484767c4a1fb&oe=5FB6E615" alt="" class="blog02-img">--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-8">--}}
{{--            @if( isset($articles))--}}
{{--            <div class="article">--}}
{{--             @foreach($articles as $article)--}}
{{--                <h1 style="cursor:pointer">{{ $article->a_name }}</h1>--}}
{{--                <p>{{ $article->a_content }}</p>--}}
{{--                <p>Created At: {{ $article->created_at }}</p>--}}
{{--                <p style=" cursor:pointer; font-weight:bold" >CONTINUE READING   <i class="fas fa-arrow-right"></i> </p>--}}
{{--             @endforeach--}}
{{--            </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="col-lg-4">--}}
{{--            <input type="text" name="" value="" class="aaa" placeholder="Search Something ... ">--}}
{{--            <h3 class="categories">Categories</h3>--}}


{{--            <h3 class="categories2">Tags</h3>--}}
{{--            <h2 class="tag01">MilkTea</h2>--}}
{{--            <h2 class="tag02">Tea</h2>--}}
{{--            <h2 class="tag03">Kafe</h2>--}}
{{--            <h2 class="tag04">Food</h2>--}}
{{--            <h2 class="tag05">Pizza</h2>--}}
{{--    <video autoplay muted loop id="myVideo">--}}
{{--        <source src="https://www.facebook.com/messenger_media/?thread_id=100006522578447&attachment_id=349280556289546&message_id=mid.%24cAAAAAfY6VC17lM-KO11Y4hNIRmHB" type="video/mp4">--}}
{{--    </video>--}}

{{--    <img src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.0-9/123373137_3426867490761234_4216530995973617545_o.jpg?_nc_cat=111&ccb=2&_nc_sid=8bfeb9&_nc_ohc=RW_xFbh96IIAX8JcwuQ&_nc_ht=scontent.fsgn2-1.fna&oh=313f619fc9437113666ccf9548d80ee3&oe=5FD042A6" alt="" class="blog02-img">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</section>--}}
{{--    <button class="add-to-top"><i class="fas fa-arrow-up"></i></button>--}}
@include('component.footer')
</body>

