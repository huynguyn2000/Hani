<div class="panel-heading">
    <div class="panel-title text-center">
        <b style="font-size: 20px; text-align: center">SỬA THÔNG TIN KHÁCH HÀNG</b>
        <span style="float: right">
             <a href="{{ route('userinfo') }}" >Thông tin khách hàng</a>
        </span>
    </div>
</div>
<div class="row">
        <div class="panel-body" >
            <form  method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ get_data_user('web','id') }}">
                <div class="form-group" style="padding: 5px">
                    <label style="font-size: 17px;" >Tên khách hàng: </label>
                    <input class="form-control" name="name" value="{{ get_data_user('web','name') }}">
                </div>
                <div class="form-group" style="padding: 5px">
                    <label style="font-size: 17px;">Email khách hàng: </label>
                    <input class="form-control" type="email"  name="email" value="{{ get_data_user('web','email') }}">
                </div>
                <div class="form-group" style="padding: 5px">
                    <label style="font-size: 17px;">Số điện thoại: </label>
                    <input class="form-control"  name="phone" value="{{ get_data_user('web','phone') }}">
                </div>
                <div class="form-group" style="padding: 5px">
                    <label style="font-size: 17px;">Avatar:</label>
                    <input class="form-control" type="file" name="avatar">
                </div>
                <button style="float: right; margin-right: 40px;" type="submit" class="btn btn-success">Submit</button>
            </form>
    </div>
</div>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

