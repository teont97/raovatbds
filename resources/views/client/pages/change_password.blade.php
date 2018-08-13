@extends('client.master')
@section('title','Thay đổi mật khẩu ')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Change Password</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Change Password</li>
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

<!-- Partners block start -->
<div class="partners-block">
    <div class="container">
        <h3>Brands & Partners</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel our-partners slide" id="ourPartners">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner-2">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner-3">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner-4">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner-5">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners block end -->
@endsection