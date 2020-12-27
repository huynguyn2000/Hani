@extends('layouts.app')

@section('content')
<style>
    header .contenedor{
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
<html>
<body>
<div class="panel panel-default" style="margin: 100px 300px;">
      <div class="panel-heading">
            <div class="panel-title text-center">
                <b style="font-size: 20px; text-align: center">THÔNG TIN KHÁCH HÀNG</b>
                <span style="float: right">
                    <a style="cursor: pointer" data-id="{{ get_data_user('web','id') }}" name="editInfo" >Thay đổi thông tin</a>
                </span>
            </div>
      </div>
    <div class="row">
        <div class="col-sm-7">
            <div class="panel-body" >
                <label style="font-size: 17px;" >Tên khách hàng: </label><span style="margin-left: 45px">{{ get_data_user('web','name') }}</span>
                <br>
                <label style="font-size: 17px;">Email khách hàng: </label><span style="margin-left: 30px">{{ get_data_user('web','email') }}</span>
                <br>
                <label style="font-size: 17px;">Số điện thoại: </label><span style="margin-left: 67px">{{ get_data_user('web','phone') }}</span>
                <br>
                <label style="font-size: 17px;">Điểm tích lũy: </label><span style="margin-left: 67px">{{ get_data_user('web','total_pay')*10 }}</span>
            </div>
            <a href="{{ route('userinfo.history',get_data_user('web','id')) }}" style="margin: 0px 0px 20px 20px;" class="btn btn-primary">Lịch sử đặt hàng</a>
        </div>
        <div class="col-sm-5">
            @if( get_data_user('web','avatar') != null)
            <img style="width: 200px; margin: 20px; border-radius: 50%;" src="{{ pare_url_file(get_data_user('web','avatar')) }}">
            @else
                <img style="width: 100px; margin: 20px; border-radius: 50%;" src="{{ asset('theme_admin/image/default-user-image.png') }}">
            @endif
        </div>
    </div>

</div>
<script>
    $(document).ready(function(){
        $("a[name='editInfo']").click(function(){
            var $this = $(this);
            console.log($(this).data("id"));
            $.ajax({
                url: 'edit-Info/'+$(this).data("id"),
                type: 'GET',
            }).done(function(response){
                console.log('OK');
                $('.panel').html(response);
            });
        });
    });
</script>
</body>
</html>
@endsection
