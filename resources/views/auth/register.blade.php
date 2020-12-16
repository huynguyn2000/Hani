@extends('layouts.app')

@section('content')
{{--<div class="container" style="margin-top: 50px;">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header" style="margin-bottom: 20px;">{{ __('Đăng ký') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('post.register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Họ tên') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Địa chỉ E-Mail') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khẩu') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Xác nhận mật khẩu  ') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Số điện thoại') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="phone" type="text" class="form-control" name="phone">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Đăng ký') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
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
    $(document).ready(function() {
        $(".textos").remove();
    });
</script>
<div class="panel panel-default" style="margin: 100px 300px;">
    <div class="panel-heading">
        <div class="panel-title text-center">Đăng kí khách hàng Hani</div>
    </div>

    <div class="panel-body" >

        <form name="form" id="form" action="{{ route('post.register') }}" class="form-horizontal" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-signature"></i></span>
                <input required id="name" type="text" class="form-control" name="name" value="" placeholder="Name" @error('name') is-invalid @enderror">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email">
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

            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-check-circle"></i></span>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
            </div>

            <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-phone"></i></span>
                <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone">
                @error('phone')
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
