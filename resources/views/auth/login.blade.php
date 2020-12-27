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

</style>
<script>
        $(".textos").remove();
</script>
<div class="panel panel-default" style="margin: 100px 300px;">
    <div class="panel-heading">
        <div class="panel-title text-center"><h4><b>ĐĂNG NHẬP</b></h4></div>
    </div>

    <div class="panel-body" >

        <form name="form" id="form" action="{{ route('post.login') }}" class="form-horizontal" enctype="multipart/form-data" method="POST">
        @csrf
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="text" class="form-control" name="email" value="" placeholder="Email" @error('email') is-invalid @enderror">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <!-- Button -->
                <div class="col-sm-12 controls">
                    <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
