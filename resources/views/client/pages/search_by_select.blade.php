@extends('client.master')
@section('title',$data_search['types']  )
@section('content')
    <!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
            <h1> Tìm Kiếm </h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('gethome')}}">Trang chủ </a></li>
                <li class="active">{{ $data_search['types']}}</li>
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
                @if(count($result_search) > 0)
                <div class="main-title-2">
                <h1>
                    <span>
                         <?php  $data_theloai=DB::table('loaitin')->select('id','name')->where('id',$data_search['types'])->first(); echo $data_theloai->name; ?> Tại <?php  $data_huyen=DB::table('huyen')->select('id','name')->where('id',$data_search['sublocation'])->first(); echo $data_huyen->name; ?>
                    </span>
                </h1>
                <div class="footer">
                    Tìm kiếm theo các tiêu chí: <span class="greencolor">
                    <?php  $data_theloai=DB::table('loaitin')->select('id','name')->where('id',$data_search['types'])->first(); echo $data_theloai->name; ?> 
                    Tại <?php  $data_huyen=DB::table('huyen')->select('id','name')->where('id',$data_search['sublocation'])->first(); echo $data_huyen->name; ?> </span>.
                    Quận/Huyện:<span class="greencolor"> <?php  $data_huyen=DB::table('huyen')->select('id','name')->where('id',$data_search['sublocation'])->first(); echo $data_huyen->name; ?> </span>.
                    Tỉnh/Tp:<span class="greencolor"> <?php  $data_tinh=DB::table('tinh')->select('id','name')->where('id',$data_search['location'])->first(); echo $data_tinh->name; ?> </span>.
                    Diện tích: <span class="greencolor"> {{ $data_search['min_area']}} - {{ $data_search['max_area']}} m2 </span>. Giá: <span class="greencolor"> {{ $data_search['min_price']}} - {{ $data_search['max_price']}}</span>. Có <span class="greencolor"> {{ COUNT($result_search) }}</span> bất động sản.
                </div>
                <!-- Option bar end -->
                 </div>
                 @endif
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
                                        <span>Giá {{ $iteam_post->price }} {{ $iteam_mypost->Unit['name']}}</span>
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
                        <!-- Property end -->
                    </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <!-- Error404 content start -->
                            <h1>Not Found</h1>
                            <h2>Không Tìm Thấy Kết Quả Phù Hợp</h2>
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
                    {{ $result_search->links() }}
                </nav>
                <!-- Page navigation end-->
            </div>
            <!-- sidebar right start -->
            @include('client.block.sidebar_post')
            <!-- sidebar right end -->
        </div>
        
        </div>
    </div>
</div>
<!-- properties section end -->
@include('client.block.brands')

@endsection