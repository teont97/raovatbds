@extends('client.master')
@section('title','Thay đổi mật khẩu ')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Thay Đổi Mật Khẩu </h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('gethome')}}">Trang chủ </a></li>
                    <li class="active">Thay Đổi Mật Khẩu</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Change password start -->
<div class="content-area change-password">
    <div class="container">
        <div class="row">
        @include('client.block.account')
            
            <div class="col-lg-8 col-md-8 col-sm-7">
                    @if(session('mesage'))
		            <p class="alert alert-warning">
			            {!! session('mesage') !!}
		             </p>
                    @endif      
                <!-- My address start -->
                <div class="my-address">
                    <div class="main-title-2">
                        <h1><span>Thay Đổi </span> Mật Khẩu</h1>
                    </div>
                <form action="{{ route('personal.post.changepassword',Auth::user()->id)}}" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <label>Mật Khẩu Cũ</label>
                            <input type="password" class="input-text" name="current" >
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu Mới </label>
                            <input type="password" class="input-text" name="new" >
                        </div>
                        <div class="form-group">
                            <label>Xác Nhận Lại Mật Khẩu</label>
                            <input type="password" class="input-text" name="confirm-new-password" >
                        </div>
                        <button type="submit" class="btn button-md button-theme">Lưu Thay Đổi</button>
                    </form>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>
<!-- Change password end -->


@include('client.block.brands')
@endsection