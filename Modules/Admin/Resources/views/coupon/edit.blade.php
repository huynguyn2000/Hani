@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}">Trang chủ</a></li>
            <li><a href="{{ route('admin.get.list.coupon') }}" title="Danh mục">Mã khuyến mãi</a></li>
            <li class="active">Cập nhật</li>
        </ol>
    </div>
    <div class="">
        @include("admin::coupon.form")
    </div>
@stop
