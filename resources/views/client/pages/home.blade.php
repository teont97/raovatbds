@extends('client.master')
@section('title','Trang Chủ')
@section('content')
<!-- Banner start -->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner banner" role="listbox">
            <div class="item banner-max-height active">
                <img src="{!! asset('public/client/img/banner.jpg') !!}" alt="banner-slider-1" class="img-responsive">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Nơi An Cư Tốt Cho Gia Đình Bạn  </span></h1>
                        <p data-animation="animated fadeInUp delay-1s">Nếu bạn đang tìm kiếm cho riêng mình một không gian riêng đầy tinh tế và thân thiện thì đây đúng là nơi bạn đáng sống cho gia đình bạn</p>
                        <a href="" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Bắt Đầu Ngay</a>
                        <a href="{{ route('getcontact') }}" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Tìm Hiểu Thêm</a>
                    </div>
                </div>
            </div>
            <div class="item banner-max-height">
                <img src="{!! asset('public/client/img/02.jpg') !!}" alt="banner-slider-1" class="img-responsive">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content">
                        <h1 data-animation="animated fadeInDown delay-1s"><span>Giải Pháp Đầu Tư Sinh Lời Hiệu Quả</span></h1>
                        <p data-animation="animated fadeInUp delay-05s">Bạn sẽ tìm thấy cho riêng mình một giải pháp đầu tư cực kỳ hiệu quả mạng lại cho bạn lợi nhuận cũng như chất lượng cuộc sống cao hơn </p>
                        <a href="#" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Bắt Đầu Ngay</a>
                        <a href="{{ route('getcontact') }}" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Tìm Hiểu Thêm</a>
                    </div>
                </div>
            </div>
            <div class="item banner-max-height">
                <img src="{!! asset('public/client/img/03.jpg') !!}" alt="banner-slider-1" class="img-responsive">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content">
                        <h1 data-animation="animated fadeInLeft delay-05s"><span>Nơi Tốt Nhất Để Tận Hưởng Cuộc Sống </span></h1>
                        <p data-animation="animated fadeInLeft delay-1s">Hãy cùng với gia đình bạn, người thân của ban, đối tác của bạn tận hưởng một không gian sống mới đầy tiện nghi và sang trọng </p>
                        <a href="#" class="btn button-md button-theme" data-animation="animated fadeInLeft delay-15s">Bắt Đầu Ngay</a>
                        <a href="{{ route('getcontact') }}" class="btn button-md border-button-theme" data-animation="animated fadeInLeft delay-20s">Tìm Hiểu Thêm</a>
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
            <li class="active btn filtr-button filtr" data-filter="all">Tất Cả</li>
            @foreach($data_hinhthuc as $iteam_hinhthuc)
        <li data-filter="{{ $iteam_hinhthuc->id}}" class="btn btn-inline filtr-button filtr"><a href="{{ route('getproduct.parent',$iteam_hinhthuc->id)}}"> <span> {{ $iteam_hinhthuc->name}} </span>  </a></li>
            @endforeach
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
                                        <i class="fa fa-phone" ></i>{!! $datalh['sodienthoai']  !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 text-center">
        <a href="#" class="btn button-md button-theme">Xem Thêm</a>
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
                    <?php $data_first=$data_duan->shift();
                    //dd($data_first);
                     ?>
                    <div class="item active">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                             <div class="property-2">
                                <!-- Property img -->
                                 <div class="property-img">
                                    <div class="featured">
                                                Nổi Bật
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
                                            <img src="{!! asset('public/admin/dist/img/'.$data_first['images']) !!}" alt="rp" style="height:175px; width:100%;">
                                            <div class="property-overlay">
                                                <a href="#" class="overlay-link">
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
                                                <a href="{!! URL::route('getblog.detail',$data_first['id']) !!}">{{$data_first['title']}}</a>
                                            </h4>
                                            <!-- Property address -->
                                            <h3 class="property-address">
                                                <a href="{!! URL::route('getblog.detail',$data_first['id']) !!}">
                                                    <i class="fa fa-map-marker"></i>{{$data_first['address']}}
                                                </a>
                                            </h3>
                                        </div>
                                        <!-- Facilities List -->
                                        <ul class="facilities-list clearfix">
                                                {{$data_first['host']}}
                                        </ul>
                                    </div>
                                    <!-- Property 2 end -->
                                </div>
                    </div>
                    @foreach($data_duan as $iteam_duan )
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Property 2 start -->
                                <div class="property-2">
                                    <!-- Property img -->
                                    <div class="property-img">
                                        <div class="featured">
                                            Nổi Bật
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
                                        <img src="{!! asset('public/admin/dist/img/'.$iteam_duan->images) !!}" alt="rp" style="height:175px; width:100%;">
                                        <div class="property-overlay">
                                            <a href="{!! URL::route('getblog.detail',$iteam_duan['id']) !!}" class="overlay-link">
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
                                            <a href="{!! URL::route('getblog.detail',$iteam_duan['id']) !!}">{!! $iteam_duan->title !!}</a>
                                        </h4>
                                        <!-- Property address -->
                                        <h3 class="property-address">
                                            <a href="{!! URL::route('getblog.detail',$iteam_duan['id']) !!}">
                                                <i class="fa fa-map-marker"></i>{{$iteam_duan->address}}
                                            </a>
                                        </h3>
                                    </div>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        {!! $iteam_duan->host !!}
                                    </ul>
                                </div>
                                <!-- Property 2 end -->
                            </div>
                        </div>
                    @endforeach
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
            <h1>Địa Điểm Phổ Biến </h1>
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
<div class="blog mb-70">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Tin Tức</span> Mới</h1>
            </div>
            <div class="row">
                @foreach($data_tintuc as $iteam_tintuc)
                <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="thumbnail blog-box-2 clearfix">
                        <div class="blog-photo">
                            <img src="{!! asset('public/admin/dist/img/'.$iteam_tintuc->images) !!}" alt="blog-1" class="img-responsive">
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li class="profile-user">
                                    <img src={!! asset('public/client/img/avatar/'.$iteam_tintuc->User['avatar']) !!} alt="user-blog">
                                </li>
                            <li><span>{{ $iteam_tintuc->User['name'] }}</span></li>
                                <li><i class="fa fa-calendar"></i></li>
                                <li><i class="fa fa-comments"></i></li>
                            </ul>
                        </div>
                        <!-- Detail -->
                        <div class="caption detail">
                        <h4><a href="{!! URL::route('getblog.detail',$iteam_tintuc['id']) !!}">{{ $iteam_tintuc->title }}</a></h4>
                            <!-- paragraph -->
                            <p>{{ $iteam_tintuc->tomtat }}</p>
                            <div class="clearfix"></div>
                            <!-- Btn -->
                            <a href="{!! URL::route('getblog.detail',$iteam_tintuc['id']) !!}" class="read-more">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
                    <h1>VỀ CHÚNG TÔI </h1>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox"> 
                        <?php $data_about_only=$data_about->shift(); ?>
                            <div class="item content clearfix active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="avatar">
                                            <img src="{!! asset('public/admin/dist/img/about/'.$data_about_only['images']) !!}" alt="avatar-1" style="width:100% ; height:160px;" >
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="testimonials-info">
                                            <div class="text">
                                                <sup>
                                                    <i class="fa fa-quote-left"></i>
                                                </sup>
                                                    {{  $data_about_only['content'] }}
                                                <sub>
                                                    <i class="fa fa-quote-right"></i>
                                                </sub>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @foreach($data_about as $iteam_about)
                             <div class="item content clearfix ">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="avatar">
                                            <img src="{!! asset('public/admin/dist/img/about/'.$iteam_about->images) !!}" alt="avatar-1" style="width:100% ; height:160px;" >
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="testimonials-info">
                                            <div class="text">
                                                <sup>
                                                    <i class="fa fa-quote-left"></i>
                                                </sup>
                                                    {{  $iteam_about->content }}
                                                <sub>
                                                    <i class="fa fa-quote-right"></i>
                                                </sub>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

<!-- Blog end -->

<!-- Partners block start -->

<!-- Partners block end -->
<script>
    var engine = new Bloodhound({
    remote: {
        url: 'autocomplete?key=%QUERY%',
        wildcard: '%QUERY%'
    },
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    });

$(".search").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, 
    {
        source: engine.ttAdapter(),
        name: 'post_list',
        display: function(data) {
            return data.title  //Input value to be set when you select a suggestion. 
    },
    templates: {
        empty: [
            '<div class="list-group search-results-dropdown"><div class="list-group-item">Không Tìm Kiếm Được Kết Quả Như Mong Muốn  </div></div>'
        ],
        header: [
        ],
        suggestion: function (data) {
            return '<a href="product-detail/' + data.id + '" class="list-group-item"> <span>'+ data.title + '</span>  </li>'
        }
    }
});
</script>
@endsection