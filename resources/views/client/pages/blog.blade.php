@extends('client.master')
@section('title',$data_type['name'])
@section('content')
<!-- Banner start -->
<div class="blog-banner">
    <div class="container">
        <div class="breadcrumb-area mt-60">
        <h1>{{ $data_type['name']}}</h1>
            <ul class="breadcrumbs">
                <li><a href="{{ route('gethome')}}">Trang chủ</a></li>
                <li class="active">{{ $data_type['name']}}</li>
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
                    @foreach($data_blog as $iteam_blog)
                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                            <div class="thumbnail blog-box-2 clearfix">
                                <div class="blog-photo">
                                    <img src="{!! asset('public/admin/dist/img/'.$iteam_blog->images) !!}" alt="blog-1" class="img-responsive">
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
                </div>
                <!-- Blog box end -->

                <!-- Page navigation start -->
                <nav aria-label="Page navigation">
                    {{ $data_blog->links() }}
                </nav>
                <!-- Page navigation end -->
            </div>
            <!-- sidebar right start -->
            @include('client.block.sidebar_blog')
            <!-- sidebar right end -->
        </div>
    </div>
</div>
<!-- Blog body end -->
@include('client.block.brands')

@endsection