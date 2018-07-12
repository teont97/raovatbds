@extends('client.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Submit Property</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Submit Property</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Submit Property start -->
<div class="content-area-7 submit-property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="notification-box">
                    <h3>Don't Have an Account?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="submit-address">
                    <form method="GET">
                        <div class="main-title-2">
                            <h1><span>Thông Tin Cơ Bản</span></h1>
                        </div>
                        <div class="search-contents-sidebar mb-30">
                            <div class="form-group">
                                <label>Tiêu Đề</label>
                                <input type="text" class="input-text" name="your name" placeholder="Vui Lòng Nhập Vào Tiêu Đề ">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Hình Thức</label>
                                        <select class="selectpicker search-fields"  id="hinhthuc" data-live-search="true" data-live-search-placeholder="Search value">
                                            <option>Chọn Hình Thức</option>
                                            @foreach($data_hinhthuc as $iteam_hinhthuc)
                                            <option value="{!! $iteam_hinhthuc->id !!}">{!! $iteam_hinhthuc->name !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group" >
                                        <label>Loại</label>
                                        <select class="selectpicker search-fields"  id="loaitin" >
                                            <option>Thể Loại </option>
                                        {{-- @foreach($data_theloai as $iteam_theloai)
                                            <option value="{!! $iteam_theloai->id !!}">{!! $iteam_theloai->name !!}</option>
                                        @endforeach
                                        --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input type="text" class="input-text" name="gia" >
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>Diện Tích</label>
                                        <input type="text" class="input-text" name="dientich">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>Phòng Ngủ</label>
                                        <input type="text" class="input-text" name="phongngu">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>Phòng Tắm</label>
                                        <input type="text" class="input-text" name="phongtam">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Hình Ảnh Và Video</span></h1>
                        </div>
                        <div id="myDropZone" class="dropzone dropzone-design mb-50">
                            <div class="dz-default dz-message"><span>Click để tải ảnh hoặc video</span></div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Vị Trí</span></h1>
                        </div>
                        <div class="row mb-30 ">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Địa Chỉ</label>
                                    <input type="text" class="input-text" name="address" >
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Tỉnh/Thành Phố</label>
                                    <select class="selectpicker search-fields" name="choose-city" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Choose City</option>
                                        <option>New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Brooklyn</option>
                                        <option>Queens</option>
                                        <option>Houston</option>
                                        <option>Manhattan</option>
                                        <option>Philadelphia</option>
                                        <option>Phoenix</option>
                                        <option>San Antonio</option>
                                        <option>Bronx</option>
                                        <option>San Diego</option>
                                        <option>Dallas</option>
                                        <option>San Jose</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Quận/Huyện</label>
                                    <select class="selectpicker search-fields" name="choose-state" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Choose State</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Arizona</option>
                                        <option>Arkansas</option>
                                        <option>California</option>
                                        <option>Colorado</option>
                                        <option>Connecticut</option>
                                        <option>Delaware</option>
                                        <option>Florida</option>
                                        <option>Georgia</option>
                                        <option>Hawaii</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Phường/Xã</label>
                                    <select class="selectpicker search-fields" name="choose-state" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Choose State</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Arizona</option>
                                        <option>Arkansas</option>
                                        <option>California</option>
                                        <option>Colorado</option>
                                        <option>Connecticut</option>
                                        <option>Delaware</option>
                                        <option>Florida</option>
                                        <option>Georgia</option>
                                        <option>Hawaii</option>
                                    </select>
                                </div>
                            </div>      
                        </div>

                        <div class="main-title-2">
                            <h1><span>Mô Tả Chi Tiết </span> </h1>
                        </div>

                        <div class="row mb-30">
                            <div class="col-md-12">
                                <div class="form-group">   
                                    <textarea class="input-text" name="message" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="main-title-2">
                            <h1><span>Thông Tin Khác</span></h1>
                        </div>
                        <div class="row mb-30 ">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Mặt Tiền</label>
                                    <input type="text" class="input-text"     >
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Đường Vào (m)</label>
                                    <input type="text" class="input-text">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Hướng Nhà</label>
                                    <select class="selectpicker search-fields" name="choose-state" data-live-search="true" data-live-search-placeholder="Search value">
                                            <option>Không Xác Định </option>
                                        @foreach($data_huong as $iteam_huong)
                                            <option value="{!! $iteam_huong->id !!}">{!! $iteam_huong->name !!} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Số Tầng </label>
                                    <input type="text" class="input-text">
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">   
                                    <label>Nội Thất</label>
                                    <textarea class="input-text" name="message" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="main-title-2">
                            <h1><span>Thông Tin Liên Hệ </span> </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Họ Và Tên</label>
                                    <input type="text" class="input-text" name="name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="input-text" name="email" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Số Điện Thoại</label>
                                    <input type="text" class="input-text" name="phone"  >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="btn button-md button-theme">Đăng Tin </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Submit Property end -->

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