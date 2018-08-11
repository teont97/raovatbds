@extends('client.master')
@section('title',$data_search  )
@section('content')
<!-- Banner start -->
<div class="blog-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Blog Columns 2 Columns</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog Columns 2 Columns</li>
            </ul>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="row">
                    @if(count($result_search) > 0)
                    <div class="main-title-2">
                        <h4>
                            <span>
                                Khoảng {!! count($result_search)!!} Tin Được Tìm Thấy Với Từ Khóa : <span style="color:#95c41f"> {{$data_search}} </span>
                            </span>
                        </h4>
                        <!-- Option bar end -->
                    </div>
                    @endif
                    @if(count($result_search) > 0)
                        @foreach($result_search as $iteam_blog)
                            <div class="col-lg-6 col-md-6 col-sm-6 ">
                                <div class="thumbnail blog-box-2 clearfix">
                                    <div class="blog-photo">
                                        <img src="{!! asset('public/admin/dist/img/'.$iteam_blog->images) !!}" alt="blog-1" class="img-responsive">
                                    </div>
                                    <div class="post-meta">
                                        <ul>
                                            <li class="profile-user">
                                                <img src="{!! asset('public/client/img/avatar/'.$iteam_blog->User['avatar']) !!}" alt="user-blog">
                                            </li>
                                            <li><span>{!! $iteam_blog->User['name'] !!}</span></li>
                                            <li><i class="fa fa-calendar"></i></li>
                                            <li><i class="fa fa-comments"></i></li>
                                        </ul>
                                    </div>
                                    <!-- Detail -->
                                    <div class="caption detail">
                                        <h4><a href="{!! URL::route('getblog.detail',$iteam_blog['id']) !!}">{!! $iteam_blog->title !!}</a></h4>
                                        <!-- paragraph -->
                                        <p>{!! $iteam_blog->tomtat !!}</p>
                                        <div class="clearfix"></div>
                                        <!-- Btn -->
                                        <a href="{!! URL::route('getblog.detail',$iteam_blog['id']) !!}" class="read-more">Xem Chi Tiết </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                </div>
                <!-- Blog box end -->

                <!-- Page navigation start 
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li class="active"><a href="blog-columns-2col.html">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="blog-columns-3col.html">2</a></li>
                        <li><a href="blog-columns-3col.html">3</a></li>
                        <li>
                            <a href="blog-columns-3col.html" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                Page navigation end -->
            </div>
            <!-- sidebar right start -->
            @include('client.block.sidebar_blog')
            <!-- sidebar right end -->
        </div>
    </div>
</div>
<!-- Blog body end -->

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