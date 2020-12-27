@extends('admin::layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.user') }}">Thành viên</a></li>
                    <li class="breadcrumb-item active">Trang danh sách</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Thành viên
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên hiển thị</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Điểm tích lũy</th>
                                    <th>Hình ảnh</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tên hiển thị</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Điểm tích lũy</th>
                                    <th>Hình ảnh</th>
                                    <th>Thao tác</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(isset($users))
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id}}</td>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $user->email}}</td>
                                            <td>{{ $user->phone}}</td>
                                            <td>{{ $user->total_pay*10 }}</td>
                                            <td>
                                                <img src="{{ pare_url_file($user->avatar) }}" alt="" class="img img-responsive" style="width: 80px; height: 80px;">
                                            </td>
                                            <td>
                                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.edit.user',$user->id) }}"><i class="fas fa-pen"></i> Cập nhật</a>
                                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.action.user',$user->id) }}"><i class="fas fa-trash-alt"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
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
