@extends('client.master')
@section('title',$data_parent['name'])
@section('content')
    <!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
            <h1>{{ $data_parent['name'] }}</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('gethome')}}">Trang chủ</a></li>
                    <li class="active">{{ $data_parent['name'] }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties section body start -->
<div class="properties-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                       <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                           <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-large"></i>
                                </span>
                                <span class="hidden-xs">Properties Grid</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                            <div class="sorting-options">
                                <select class="sorting">
                                   <option>New To Old</option>
                                   <option>Old To New</option>
                                   <option>Properties (High To Low)</option>
                                   <option>Properties (Low To High)</option>
                                </select>
                                <a href="properties-list-rightside.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-rightside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                           </div>
                       </div>
                    </div>
                </div>
                <!-- Option bar end -->
                <div class="clearfix"></div>
                <div class="row">
                    @foreach($data_post_parent as $iteam_post)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <?php 
                                    $data=$iteam_post->post_images->shift(); 
                                ?>
                                <div class="property-tag button alt featured">Hot</div>
                                <div class="property-tag button sale">{!!  $iteam_post->hinhthuc['name']; !!}</div>
                                <div class="property-price">{!! $iteam_post->price !!}</div>
                                 
                                <img src="{!! asset('storage\app\public\upload\images/'.$data['images']) !!}" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="{!! route('getproductdetail',$iteam_post->id) !!}" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="#" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" class="hidden"></a>
                                        <a href="#" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="{!! route('getproductdetail',$iteam_post->id) !!}">{!! $iteam_post->title !!}</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>{!! $iteam_post->address !!}
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span> Diện tích {{ $iteam_post->area }} m2</span>
                                    </li>
                                    <li>
                                        <i class="glyphicon glyphicon-usd"></i>
                                        <span>Giá {{ $iteam_post->price }} {{ $iteam_post->Unit['name']}}</span>
                                    </li>
                                </ul>
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
                        <!-- Property end -->
                    </div>
                    @endforeach
                </div>
                <!-- Page navigation start -->
                <nav aria-label="Page navigation">
                    {{ $data_post_parent->links() }}
                </nav>
                <!-- Page navigation end-->
            </div>
            <!-- sidebar right start -->
            @include('client.block.sidebar_post')
            <!-- sidebar right end -->
        </div>
    </div>
</div>
<!-- properties section end -->
@include('client.block.brands')

@endsection