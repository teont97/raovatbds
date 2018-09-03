@extends('client.master')
@section('title','Giới thiệu')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Giới Thiệu  </h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('gethome')}}">Trang chủ </a></li>
                    <li class="active">Giới Thiệu</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- About city estate start -->
<div class="about-city-estate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="properties-detail-slider simple-slider">
                    <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                        <div class="carousel-outer">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item">
                                    <img src="http://placehold.it/555x370" class="img-preview img-responsive" alt="properties-1">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/555x370" class="img-preview img-responsive" alt="properties-2">
                                </div>
                                <div class="item active left">
                                    <img src="http://placehold.it/555x370" class="img-preview img-responsive" alt="properties-3">
                                </div>
                                <div class="item next left">
                                    <img src="http://placehold.it/555x370" class="img-preview img-responsive" alt="properties-4">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                <span class="slider-mover-left no-bg t-slider-r pojison" aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                <span class="slider-mover-right no-bg t-slider-l pojison" aria-hidden="true">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="about-text">
                    <h3>Welcome to RealEstast</h3>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. ligula convallis, vel tincidunt ipsum posuere</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula convallis, vel tincidunt
                        ipsum posuere. Fusce sodales lacus ut pellentes sollicitudin.
                        Duis iaculis, arcu ut hendrerit pharetra, elit augue pulvinar magna, a consectetur eros quam  magna, a consectetur eros</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuere.</p>
                    <a href="#" class=" btn button-sm button-theme">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About city estate end -->

<!-- Agent section start -->
<div class="content-area agent-section chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Agent</h1>
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

<!-- Counters strat -->
<div class="counters overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">967</h1>
                    <p>Listings For Sale</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-symbol-1"></i>
                    <h1 class="counter">1276</h1>
                    <p>Listings For Rent</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-people"></i>
                    <h1 class="counter">396</h1>
                    <p>Agents</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow">
                <div class="counter-box">
                    <i class="flaticon-people-1"></i>
                    <h1 class="counter">177</h1>
                    <p>Brokers</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<div class="clearfix"></div>
<!-- testimonials-2 -->
<div class="testimonials-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="sec-title-three">
                    <h4>Happy Clients</h4>
                    <h2>Testimonials</h2>
                    <div class="text">
                        We collect reviews from our customers so you can get an honest opinion of what an apartment is really like!
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php $data_only=$data_about->shift(); ?>
                        <div class="item content active clearfix">
                            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                                <div class="avatar">
                                    <img src="{!! asset('public/admin/dist/img/about/'.$data_only->images) !!}" alt="avatar-2" style="width:220px; height:220px;" >
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                <div class="text">
                                    {{ $data_only->content }}
                                </div>
                            </div>
                        </div>
                        @foreach($data_about as $iteam_about )
                            <div class="item content clearfix">
                                <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                                    <div class="avatar">
                                        <img src="{!! asset('public/admin/dist/img/about/'.$iteam_about->images) !!}" alt="avatar-3" style="width:220px; height:220px;">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <div class="text">
                                       {{ $iteam_about->content }}
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
<!-- Testimonial section end -->
<div class="clearfix"></div>

<!-- Intro section -->
<div class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="img/logos/logo-2.png" alt="logo-2">
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12">
                <h3>Looking To Sell Or Rent Your Property?</h3>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-12">
                <a href="submit-property.html" class="btn button-md button-theme">Submit Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Intro end -->
@endsection