@extends('client.master')
@section('content')
<!-- Banner start -->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner banner" role="listbox">
            <div class="item banner-max-height active">
                <img src="{!! asset('public/client/img/01.jpg') !!}" alt="banner-slider-1" class="img-responsive">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Find your </span> Dream House</h1>
                        <p data-animation="animated fadeInUp delay-1s">Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                        <a href="#" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Get Started Now</a>
                        <a href="#" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="item banner-max-height">
                <img src="{!! asset('public/client/img/02.jpg') !!}" alt="banner-slider-1" class="img-responsive">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content">
                        <h1 data-animation="animated fadeInDown delay-1s"><span>Sweet Home For</span> Small Family</h1>
                        <p data-animation="animated fadeInUp delay-05s">Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                        <a href="#" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Get Started Now</a>
                        <a href="#" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="item banner-max-height">
                <img src="{!! asset('public/client/img/03.jpg') !!}" alt="banner-slider-1" class="img-responsive">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content">
                        <h1 data-animation="animated fadeInLeft delay-05s"><span>Best Place To</span> Find Home</h1>
                        <p data-animation="animated fadeInLeft delay-1s">Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                        <a href="#" class="btn button-md button-theme" data-animation="animated fadeInLeft delay-15s">Get Started Now</a>
                        <a href="#" class="btn button-md border-button-theme" data-animation="animated fadeInLeft delay-20s">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Banner end -->

<!-- Search area start -->
<div class="search-area">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">
                <form method="GET" role="search" action="{!! route('getseacrh') !!}" >
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-7 col-xs-7 ">
                            <div class="form-group">
                                <input type="text"  id="search" name="key" class="input-text search" placeholder="Tìm Kiếm" >
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 ">
                            <div class="form-group">
                                <button class="search-button">Tìm Kiếm  </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search area start -->

<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Bất Động Sản Vip </h1>
        </div>
        <ul class="list-inline-listing filters filters-listing-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">House</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">Office</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">Apartment</li>
            <li data-filter="4" class="btn btn-inline filtr-button filtr">Residential</li>
        </ul>
        <div class="row">
            <div class="filtr-container">
                @foreach($data_post as $iteam_post)
                    <?php 
                    $data=$iteam_post->post_images->shift();
                    //dd($data); 
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Hot</div>
                                <div class="property-tag button sale">{{ $iteam_post->hinhthuc['name'] }}</div>
                                <div class="property-price">{{ $iteam_post->price }} VND </div>
                                <img src={!! asset('storage\app\public\upload\images/'.$data['images']) !!} alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="{!! route('getproductdetail',$iteam_post->id) !!}" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href={!! route('getproductdetail',$iteam_post->id) !!}>{{ $iteam_post->title }}</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>{{ $iteam_post->address }}
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>{{ $iteam_post->area }}</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>{{ $iteam_post->room }} Beds</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>{{ $iteam_post->bathroom }} Baths</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>{!! $iteam_post->User['name']; !!}</a>
                                    </span>
                                    <?php $datalh=$iteam_post->lienhe->shift(); ?>
                                    <span class="right">
                                        <i class="fa fa-phone" style="color:#95c41f;"></i>{!! $datalh['sodienthoai']  !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Our service start -->
<div class="mb-100 our-service">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Bạn Đang Tìm Kiếm </span> Thứ Gì ?</h1>
        </div>

        <div class="row mgn-btm wow">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="content">
                    <i class="flaticon-shape"></i>
                    <h4>Tin Rao Vip</h4>
                    <p>Tổng hợp những bài đăng Vip nhất theo tuần </P>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="content">
                    <i class="flaticon-internet"></i>
                    <h4>BDS Mới Nhất</h4>
                    <p>Tin rao BDS mới nhất trong vòng 3 ngày </P>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                <div class="content">
                    <i class="flaticon-apartment"></i> 
                    <h4>BDS Đang Hot</h4>
                    <p>Những dự án BDS đang được quý nhà đầu từ quan tâm nhất </P>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                <div class="content">
                    <i class="fa fa-search"></i>
                    <h4>Top View</h4>
                    <p>Tin rao mua bán , cho thuê BDS được truy cập và tìm kiếm nhiều nhất</P>
                </div>
            </div>
        </div>
        <a href="#" class="btn button-md button-theme">Xem Thêm</a>
    </div>
</div>
<!-- Our service end -->

<!-- Recently properties start -->
<div class="mb-70 recently-properties chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Dự Án Đầu Tư Nổi Bật </span>  </h1>
        </div>
        <div class="row">
            <div class="carousel our-partners slide" id="ourPartners2">
                <div class="col-lg-12 mrg-btm-30">
                    <a class="right carousel-control" href="#ourPartners2" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners2" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="http://placehold.it/262x175" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="http://placehold.it/750x540" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="http://placehold.it/750x540" class="hidden"></a>
                                            <a href="http://placehold.it/750x540" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Big Head House</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="http://placehold.it/262x175" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="http://placehold.it/750x540" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="http://placehold.it/750x540" class="hidden"></a>
                                            <a href="http://placehold.it/750x540" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Masons Villas</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="http://placehold.it/262x175" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="http://placehold.it/750x540" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="http://placehold.it/750x540" class="hidden"></a>
                                            <a href="http://placehold.it/750x540" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Park Avenue</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="http://placehold.it/262x175" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="http://placehold.it/750x540" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="http://placehold.it/750x540" class="hidden"></a>
                                            <a href="http://placehold.it/750x540" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Sweet Family Home</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners block end -->

<div class="clearfix"></div>
<!-- Categories strat -->
<div class="categories">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Popular Places</h1>
        </div>
        <div class="clearfix"></div>
        <div class="row wow">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                         <div class="category-subtitle">14 Properties</div>
                                        <h3 class="category-title">
                                            <a href="#">Florida</a>
                                        </h3>
                                    </div><!-- /.category-content -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                         <div class="category-subtitle">24 Properties</div>
                                        <h3 class="category-title">
                                            <a href="#">California</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-pad wow fadeInUp delay-04s">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                         <div class="category-subtitle">9 Properties</div>
                                         <h3 class="category-title"><a href="#">New York</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 col-pad wow fadeInRight delay-04s">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg">
                        <div class="category-overlay">
                            <div class="category-content">
                                <div class="category-subtitle">14 Properties</div>
                                <h3 class="category-title"><a href="#">San Francisco</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories end-->

<!-- Agent section start -->
<div class="mb-70 agent-section chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Nhà Mô Giới Tiêu Biểu</h1>
        </div>
        <div class="row">
            <div class="carousel our-partners slide" id="ourPartners3">
                <div class="col-lg-12 mrg-btm-30">
                    <a class="right carousel-control" href="#ourPartners3" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners3" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Agent 1 start -->
                            <div class="agent-1">
                                <!-- Agent img -->
                                <a href="properties-details.html" class="agent-img">
                                    <img src="http://placehold.it/262x200" alt="team-1" class="img-responsive">
                                </a>
                                <!-- Agent content -->
                                <div class="agent-content">
                                    <h5><a href="agent-single.html">John Antony</a></h5>
                                    <h6>Web Developer</h6>
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Agent 1 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Agent 1 start -->
                            <div class="agent-1">
                                <!-- Agent img -->
                                <a href="properties-details.html" class="agent-img">
                                    <img src="http://placehold.it/262x200" alt="team-2" class="img-responsive">
                                </a>
                                <!-- Agent content -->
                                <div class="agent-content">
                                    <h5><a href="agent-single.html">Karen Paran</a></h5>
                                    <h6>Creative Director</h6>
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Agent 1 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Agent 1 start -->
                            <div class="agent-1">
                                <!-- Agent img -->
                                <a href="properties-details.html" class="agent-img">
                                    <img src="http://placehold.it/262x200" alt="team-3" class="img-responsive">
                                </a>
                                <!-- Agent content -->
                                <div class="agent-content">
                                    <h5><a href="agent-single.html">John Maikel</a></h5>
                                    <h6>Office Manager</h6>
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Agent 1 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Agent 1 start -->
                            <div class="agent-1">
                                <!-- Agent img -->
                                <a href="properties-details.html" class="agent-img">
                                    <img src="http://placehold.it/262x200" alt="team-4" class="img-responsive">
                                </a>
                                <!-- Agent content -->
                                <div class="agent-content">
                                    <h5><a href="agent-single.html">Eliane Pereira</a></h5>
                                    <h6>Support Manager</h6>
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Agent 1 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Agent section end -->

<!-- Testimonial section start-->
<div class="testimonials-3 overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                    <h1>Our Testimonial</h1>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item content clearfix active">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src="http://placehold.it/160x160" alt="avatar-1" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            John Antony
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item content clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src="http://placehold.it/160x160" alt="avatar-2" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            John Mery
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item content clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src="http://placehold.it/160x160" alt="avatar-4" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            John Top
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item content clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src="http://placehold.it/160x160" alt="avatar-3" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                            <sup>
                                                <i class="fa fa-quote-right"></i>
                                            </sup>
                                        </div>
                                        <div class="author-name">
                                            John Pitarshon
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
                        <span class="slider-mover-left t-slider-l" aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
                        <span class="slider-mover-right t-slider-r" aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial  end -->
<div class="clearfix"></div>

<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Tin Tức</span> Mới</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">
                        <img src="http://placehold.it/360x200" alt="blog-1" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="http://placehold.it/75x75" alt="user-blog">
                            </li>
                            <li><span>John Doe</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="blog-single-sidebar-right.html">Buying a Home</a></h4>
                        <!-- paragraph -->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="blog-single-sidebar-right.html" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm wow fadeInUp delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">
                        <img src="http://placehold.it/360x200" alt="blog-2" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="http://placehold.it/75x75" alt="user-blog">
                            </li>
                            <li><span>Karen Paran</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="blog-single-sidebar-right.html">Why Live in New York</a></h4>
                        <!-- paragraph -->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="blog-single-sidebar-right.html" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInRight delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">
                        <img src="http://placehold.it/360x200" alt="blog-3" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="http://placehold.it/75x75" alt="user-blog">
                            </li>
                            <li><span>John Antony</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="blog-single-sidebar-right.html">Selling Your Home</a></h4>
                        <!-- paragraph -->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="blog-single-sidebar-right.html" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Partners block start -->
<div class="partners-block">
    <div class="container">
        <h3>Thông Tin Chủ Đầu Tư</h3>
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