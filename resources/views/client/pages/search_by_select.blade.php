@extends('client.master')
@section('content')
    <!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Properties Grid</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Properties Grid</li>
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
                <div class="main-title-2">
                <h1>
                    <span>
                         Khoảng {!! count($result_search)!!} Tin Bất Động Sản Được Tìm Thấy
                    </span>
                </h1>
                <!-- Option bar end -->
                 </div>
                <div class="clearfix"></div>
            @if(count($result_search) > 0)
                <div class="row">
                    @foreach($result_search as $iteam_post)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <?php 
                                    $data=$iteam_post->post_images->shift(); 
                                ?>
                                <div class="property-tag button alt featured">Featured</div>
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
                                        <span>{!! $iteam_post->area !!}</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>{!! $iteam_post->room !!} Beds</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>{!! $iteam_post->bathroom !!} Baths</span>
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
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>{!! $iteam_post->created_at !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <!-- Error404 content start -->
                            <h1>Not Found</h1>
                            <h2>Không Tìm Thấy Kết Quả  Với Từ Khóa "{!! $data_search !!} "</h2>
                            <p> Hãy thử các từ khóa khác nhau hoặc xóa bộ lọc tìm kiếm</p>
                            <a href="{!! route('gethome') !!}">
                                <button type="submit" class="button-sm out-line-btn">Quay Lại Trang Chủ</button>
                            </a>
                        <!-- Error404 content end -->
                    </div>
                </div>
            @endif
                <!-- Page navigation start -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="active"><a href="properties-grid-rightside.html">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="properties-grid-leftside.html">2</a></li>
                        <li><a href="properties-grid-fullwidth.html">3</a></li>
                        <li>
                            <a href="properties-grid-fullwidth.html" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Page navigation end-->
            </div>
        </div>
        <!-- sidebar right start -->
            @include('client.block.sidebar_post')
        <!-- sidebar right end -->
        </div>
    </div>
</div>
<!-- properties section end -->


@endsection