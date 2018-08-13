@extends('client.master')
@section('title','Đăng Nhập')
@section('content')
<!-- Content area start -->
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                @if(session('mesage'))
		            <p class="alert alert-warning" style="width: 40%; margin: 0px auto;">
			            <span>{!! session('mesage') !!}</span>
		            </p>
                @endif          
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Main title -->
                        <div class="main-title">
                            <h1>Đăng Nhập </h1>
                        </div>
                        <!-- Form start -->
                        <form action="{!! route('postlogin') !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Địa Chỉ Email ">
                            </div>
                            <div class="form-group">
                                <input type="password" name="Password" class="input-text" placeholder="Mật Khẩu">
                            </div>
                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label>
                                        <input type="checkbox" class="ez-hide">
                                            Ghi Nhớ Mật Khẩu
                                    </label>
                                </div>
                                <a href="forgot-password.html" class="link-not-important pull-right">Quên Mật Khẩu</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block">Đăng Nhập</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            Thành Viên Mới <a href="{{ route('getregister') }}">Đăng Ký Ngay</a>
                        </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Content area end -->
@endsection