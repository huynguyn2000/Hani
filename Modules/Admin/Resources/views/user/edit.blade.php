@extends('admin::layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.user') }}">Thành Viên</a></li>
                    <li class="breadcrumb-item active">Sửa thành viên</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Thành Viên
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row" style="padding: 10px 200px 50px 200px;">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Tên thành viên: </label>
                                        <input type="text" class="form-control" placeholder="Tên thành viên" value="{{ old('name',isset($user->name) ? $user->name : '') }}" name="name">
                                        @if($errors->has('name'))
                                            <span class="error-text">
                                                {{$errors->first('name')}}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email: </label>
                                        <input type="email" class="form-control" placeholder="Email" value="{{ old('email',isset($user->email) ? $user->email : '') }}" name="email">
                                        @if($errors->has('email'))
                                            <span class="error-text">
                                                {{$errors->first('email')}}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Số điện thoại: </label>
                                        <input type="text" class="form-control" placeholder="Số điện thoại" value="{{ old('phone',isset($user->phone) ? $user->phone : '') }}" name="phone">
                                        @if($errors->has('phone'))
                                            <span class="error-text">
                                                {{$errors->first('phone')}}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="avatar">Avatar:</label>
                                        <input type="file" name="avatar" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-success">Lưu thông tin</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    </div>
@stop
