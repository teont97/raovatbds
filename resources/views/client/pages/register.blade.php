@extends('client.master')
@section('title','Đăng ký tài khoản ')
@section('content')
<!-- Content area start -->
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                @if(Session::has('flash_messages'))
                        <div class="alert alert-{!! Session::get('flash_level') !!}" style="width: 50%; margin: 10px auto; text-align: center;">
                            {!! Session::get('flash_messages') !!}
                        </div>
                 @endif
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Main title -->
                        <div class="main-title">
                            <h1><span>Đăng Ký Tài Khoản </span></h1>
                        </div>
                        <!-- Form start-->
                        <form action="{!! route('postregister') !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <input type="text" name="fullname" class="input-text" placeholder="Họ Tên">
                            </div>
                            <div class="form-group">
                                    <input type="text" name="phone" class="input-text" placeholder="Số Điện Thoại ">
                                </div>
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Địa Chỉ Email ">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Mật Khẩu">
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm_Password" class="input-text" placeholder="Xác Nhận Mật Khẩu">
                            </div>
                            <div class="form-group">
                                <label class="radio-inline"><input type="radio" name="user_type" class="user-type" value="2">Nhà Mô Giới</label>
                                <label class="radio-inline"><input type="radio" name="user_type" class="user-type" value="0">Chính Chủ</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block">Đăng Ký</button>
                            </div>

                        </form>
                        <!-- Form end-->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            Tôi Muốn Quay <a href="{{ route('getlogin') }}">Trở Lại Đăng Nhập</a>
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