<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="{{ asset('theme_admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="icon" href="../../favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">
    <link href="{{ asset('theme_admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme_admin/css/dashboard.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>HANI - ADMIN</title>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $(".js_order_item").click(function(event){
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                $('#md_content').html('');
                $(".transaction_id").text('').text($this.attr('data-id'));
                $("#myModal").modal('show');
                $.ajax({
                    url: url,
                }).done(function (result){
                    $('#md_content').append(result);
                });
            });
        })
    </script>
    <style>
        .sb-sidenav-menu-heading span{
            font-size: 18px;
        }
        .nav-link{
            font-size: 16px;
        }
    </style>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('admin.home') }}">Hani</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" style="width: 80%" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{{ route('admin.login') }}}">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading"><span>Core</span></div>
                    <a class="nav-link" href="{{ route('admin.home') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Trang chủ
                    </a>
                    <div class="sb-sidenav-menu-heading"><span>Addons</span></div>
                    <a class="nav-link" href="{{ route('admin.get.list.category') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Danh Mục
                    </a>
                    <a class="nav-link" href="{{ route('admin.get.list.product') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-coffee"></i></div>
                        Sản Phẩm
                    </a>
                    <a class="nav-link" href="{{ route('admin.get.list.article') }}">
                        <div class="sb-nav-link-icon"><i class="far fa-newspaper"></i></div>
                        Bài Viết
                    </a>
                    <a class="nav-link" href="{{ route('admin.get.list.user') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Thành Viên
                    </a>
                    <a class="nav-link" href="{{ route('admin.get.list.coupon') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
                        Mã Giảm Gía
                    </a>
                    <a class="nav-link" href="{{ route('admin.get.list.comment') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                        Bình Luận
                    </a>
                    <a class="nav-link" href="{{ route('admin.get.list.transaction') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                        Đơn Hàng
                    </a>
                    <a class="nav-link" href="{{ route('admin.get.list.delivery') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-shipping-fast"></i></div>
                        Giao Hàng
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as: Admin</div>
            </div>
        </nav>
    </div>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('theme_admin/js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('theme_admin/assets/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('theme_admin/assets/demo/chart-bar-demo.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('theme_admin/assets/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('theme_admin/js/bootstrap.min.js') }}"></script>

</body>
</html>
