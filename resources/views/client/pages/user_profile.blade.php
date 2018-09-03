@extends('client.master')
@section('title','Thông tin tài khoản')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Thông tin cá nhân </h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('gethome')}}">Trang chủ </a></li>
                    <li class="active">Thông tin cá nhân</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- My profile start -->
<div class="content-area my-profile">
    <div class="container">
        <div class="row">
            @include('client.block.account')
            <div class="col-lg-8 col-md-8 col-sm-12">
                <!-- My address start-->
                <div class="my-address">
                    <div class="main-title-2">
                        <h1><span>Cập Nhật Lại Thông Tin Cá Nhân </span> </h1>
                    </div>
                <form action="{{ route('personal.update.profile',Auth::user()->id)}}" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <label>Họ Và Tên</label>
                            <input type="text" class="input-text" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>Tên Thường Gọi</label>
                            <input type="text" class="input-text" name="alias" value="{{ $user->alias }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="input-text" name="email" value="{{ $user->email }}" disabled="true"> 
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" class="input-text" name="phone" value="{{ $user->phone }}">
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ </label>
                            <input type="text" class="input-text" name="address" value="{{ $user->address }}">
                        </div>
                        <div class="form-group">
                            <label>Cơ Bản Về Bạn</label>
                            <textarea class="input-text" name="aboutme"  > {{ $user->aboutme }} </textarea>
                        </div>
                        <button type="submit" value="Lưu Thay Đổi" class="btn button-md button-theme"> Lưu Thay Đổi </button>
                    </form>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>
<!-- My profile end -->
@include('client.block.brands')

@endsection