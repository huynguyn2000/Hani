@extends('admin::layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.comment') }}">Bình Luận</a></li>
                    <li class="breadcrumb-item active">Trang danh sách</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Bình Luận
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 20%;">Tên người bình luận</th>
                                    <th >Nội dung</th>
                                    <th >Ngày bình luận</th>
                                    <th style="width: 10%;">Thao tác</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 20%;">Tên người bình luận</th>
                                    <th >Nội dung</th>
                                    <th >Ngày bình luận</th>
                                    <th style="width: 10%;">Thao tác</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(isset($comments))
                                    @foreach($comments as $comment)
                                        <tr>
                                            <td>{{ $comment->id }}</td>
                                            <td>
                                                {{ $comment->cmt_name }}
                                            </td>
                                            <td>{{ $comment->cmt_content }}</td>
                                            <td>
                                                {{ $comment->created_at }}
                                            </td>
                                            <td>
                                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.action.comment',['delete',$comment->id]) }}"><i class="fas fa-trash-alt"></i> Xóa</a>
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
