@extends('client.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>My Profile</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">My Profile</li>
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
                    <form action="index.html" method="GET">
                        <div class="form-group">
                            <label>Họ Và Tên</label>
                            <input type="text" class="input-text" name="your name" placeholder="John Antony">
                        </div>
                        <div class="form-group">
                            <label>Tên Thường Gọi</label>
                            <input type="text" class="input-text" name="agent" placeholder="Your title">
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" class="input-text" name="phone" placeholder="+55 4XX-634-7071">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="input-text" name="email" placeholder="johndoe@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Cơ Bản Về Bạn</label>
                            <textarea class="input-text" name="message" placeholder="Etiam luctus malesuada quam eu aliquet. Donec eget mollis tortor. Donec pellentesque eros a nisl euismod, ut congue orci ultricies. Fusce aliquet metus non arcu varius ullamcorper a sit amet nunc. Donec in lacus neque. Vivamus ullamcorper sed ligula vitae "></textarea>
                        </div>
                        <a href="#" class="btn button-md button-theme">Save Changes</a>
                    </form>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>
<!-- My profile end -->

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