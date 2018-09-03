@extends('client.master')
@section('title','Hỏi Đáp')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Hỏi Đáp </h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('gethome')}}">Trang Chủ </a></li>
                    <li class="active">Hỏi Đáp</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Faq body start -->
<div class="faq-body content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Các Câu Hỏi Thường Gặp</h1>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xm-12">
                <!-- Panel box start -->
                <div class="panel-box">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#generalInformataion" data-toggle="tab" aria-expanded="true">Thông Tin Chung</a></li>
                    </ul>
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="generalInformataion">
                                    <div class="panel-div">
                                        @foreach($data_faq as $iteam_faq)
                                            <div class="panel-group" role="tablist">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading active" role="tab" id="heading1">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false">
                                                                <i class="fa"></i>{{ $iteam_faq->title }}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                        <div class="panel-body panel-body-2">
                                                            <p> {{ $iteam_faq->content }} </p>
                                                            <span>Câu trả lời này có hữu ích không?
                                                                <a href="#" class="yes">Đồng Ý <i class="fa fa-thumbs-o-up"></i></a>
                                                                <a href="#" class="no">Không  <i class="fa fa-thumbs-o-down"></i></a>
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
                    </div>
                </div>
                <!-- Panel box end -->
            </div>
             <!-- Panel box end -->
            @include('client.block.sidebar_blog');
            <!-- Panel box end -->
            
        </div>
    </div>
</div>
<!-- Faq body end -->

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