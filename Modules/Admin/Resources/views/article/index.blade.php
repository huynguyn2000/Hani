@extends('admin::layouts.master')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.get.list.article') }}">Bài Viết</a></li>
                    <li class="breadcrumb-item active">Trang danh sách</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Bài Viết
                        <a href="{{ route('admin.get.create.article') }}" class="pull-right">Thêm mới</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 20%;">Tên bài viết</th>
                                    <th >Hình ảnh</th>
                                    <th style="width: 10%;">Mô tả</th>
                                    <th style="width: 10%;">Trạng thái</th>
                                    <th >Ngày tạo</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 20%;">Tên bài viết</th>
                                    <th >Hình ảnh</th>
                                    <th style="width: 10%;">Mô tả</th>
                                    <th style="width: 10%;">Trạng thái</th>
                                    <th >Ngày tạo</th>
                                    <th>Thao tác</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(isset($articles))
                                    @foreach($articles as $article)
                                        <tr>
                                            <td>{{ $article->id }}</td>
                                            <td>
                                                {{ $article->a_name }}
                                            </td>
                                            <td>
                                                <img src="{{ pare_url_file($article->a_avatar) }}" alt="" class="img img-responsive" style="width: 80px; height: 80px;">
                                            </td>
                                            <td>
                                                {{ $article->a_description }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.get.action.article',['active',$article->id]) }}" class="label {{ $article->getStatus($article->a_active)['class'] }} " >{{ $article->getStatus($article->a_active)['name'] }}</a>
                                            </td>
                                            <td>
                                                {{ $article->created_at }}
                                            </td>
                                            <td>
                                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.edit.article',$article->id) }}"><i class="fas fa-pen"></i> Cập nhật</a>
                                                <a style="padding: 5px 10px; border: 1px solid #eee; font-size: 11px;" href="{{ route('admin.get.action.article',['delete',$article->id]) }}"><i class="fas fa-trash-alt"></i> Xóa</a>
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
