@extends('layouts.app')

@section('content')
<style>
    header{
        height: 200px;
    }
    body {
        background-color: white;
    }

    #loginbox > div:first-child {
        padding-bottom: 10px;
    }

    #form > div {
        margin-bottom: 25px;
    }

    #form > div:last-child {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .panel {
        background-color: transparent;
    }

    .panel-body {
        padding-top: 30px;
        background-color: rgba(2555,255,255,.3);
    }

    .input-group .form-control{
        z-index: 1;
    }
</style>
<script>
        $(".textos").remove();
</script>
<div class="panel panel-default" style="margin: 0px 300px 50px;">
    <div class="panel-heading">
        <div class="panel-title text-center"><h4><b>ĐĂNG KÝ KHÁCH HÀNG</b></h4></div>
    </div>

    <div class="panel-body" >

        <form name="form" id="form" action="{{ route('post.register') }}" class="form-horizontal" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-signature"></i></span>
                <input  id="name" type="text" class="form-control" name="name" value="" placeholder="Name" @error('name') is-invalid @enderror">
                @error('name')
                <span style="color: red" class="error-text" role="alert">
                    <i>{{ $message }}</i>
                </span>
                @enderror
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                @error('email')
                <span style="color: red" class="error-text" role="alert">
                    <i>{{ $message }}</i>
                </span>
                @enderror
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                @error('password')
                <span class="error-text" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-check-circle"></i></span>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone">
                @error('phone')
                <span style="color: red" class="error-text" role="alert">
                    <i>{{ $message }}</i>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <!-- Button -->
                <div class="col-sm-12 controls">
                    <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Register</button>
                </div>
            </div>

        </form>

    </div>
</div>
@endsection
