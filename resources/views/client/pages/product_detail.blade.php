@extends('client.master')
@section('title',$post_detail->title)
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Properties Detail</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Properties Detail</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="content-area  properties-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!-- Header -->
                <div class="heading-properties clearfix sidebar-widget">
                    <div class="pull-left" style="max-width: 75%;">
                        <?php
                            if(!isset($user))
                            $data_user=0;
                            else
                            $data_user=$user->id;
                         ?>
                        <h3>{{ $post_detail['title'] }}</h3>
                        <p>
                            <input type="hidden" id="id_post" name="id_post" value="{{ $post_detail->id }}">
                            <input type="hidden" id="id_user" value="{{ $data_user}} ">
                            <i class= "fa fa-map-marker"></i>{{ $post_detail['address'] }}
                        </p>
                    </div>
                    <div class="pull-right">
                        <h3><span>{!! $post_detail['price'] !!}</span></h3>
                        <h5>
                            Per Manth
                        </h5>
                    </div>
                </div>
                <?php 
                $data=$post_detail->post_images->shift();
                 //dd($data);   
                 //dd($data);
                // $data1=$post_detail->post_images;
                 //dd($data1);
                 ?>
                <!-- Properties details section start -->
                <div class="Properties-details-section sidebar-widget">
                    <!-- Properties detail slider start -->
                    <div class="properties-detail-slider simple-slider mb-40">
                        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                            <div class="carousel-outer">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @foreach($post_detail->post_images as $iteam)
                                    <div class="item">
                                        <img src={{ asset('storage\app\public\upload\images/'.$iteam->images) }} class="thumb-preview" alt="Chevrolet Impala">
                                    </div>
                                    @endforeach
                                    <div class="item active">
                                        <img src={{ asset('storage\app\public\upload\images/'.$data->images) }}  class="thumb-preview" alt="Chevrolet Impala">
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
                            <!-- Indicators -->
                            <ol class="carousel-indicators thumbs visible-lg visible-md">
                                    
                                @foreach($post_detail->post_images as $iteam)
                                    <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="{{ asset('storage\app\public\upload\images/'.$iteam->images) }}" alt="Chevrolet Impala"></li>
                                @endforeach 
                                    <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="{{ asset('storage\app\public\upload\images/'.$data->images) }}" alt="Chevrolet Impala"></li>
                            </ol>
                        </div>
                    </div>
                    <!-- Properties detail slider end -->



                    <!-- Property description start -->
                    <div class="panel-box properties-panel-box Property-description">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Mô Tả  </a></li>
                            <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Thông Tin Khác</a></li>
                            <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Liên Hệ</a></li>
                            <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Tiện Ích</a></li>
                            <li class=""><a href="#tab5default" data-toggle="tab" aria-expanded="false">Video</a></li>
                        </ul>
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1default">
                                        <div class="main-title-2">
                                            <h1><span>Thông Tin Chi Tiết </span></h1>
                                        </div>
                                        <p>
                                            {!! $post_detail['description'] !!}
                                        </p>
                                    </div>
                                    <div class="tab-pane fade features" id="tab2default">
                                        <!-- Properties condition start -->
                                        <div class="properties-condition">
                                            <div class="main-title-2">
                                                <h1><span>Liên Hệ </span></h1>
                                            </div>
                                            <?php $lienhe=$post_detail->lienhe->first();//dd($lienhe);  ?>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                           <span> Họ Tên </span> : {!! $lienhe['hoten']!!}
                                                        </li>
                                                        <li>
                                                            <span> Số Điện Thoại </span> : {!! $lienhe['email']!!}
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                          <span> Email </span>: {{$lienhe['sodienthoai']}}
                                                        </li>
                                                        <li>
                                                            <span> Địa Chỉ  </span> :
                                                        </li>           
                                                    </ul>
                                                </div>
                        
                                            </div>
                                        </div>
                                        <!-- Properties condition end -->
                                    </div>
                                    <div class="tab-pane fade technical" id="tab3default">
                                        <!-- Properties amenities start -->
                                        <div class="properties-amenities">
                                            <div class="main-title-2">
                                                <h1><span>Amenities</span></h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Air conditioning
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Balcony
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Pool
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>TV
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Gym
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Wifi
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Parking
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Double Bed
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Iron
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Telephone
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Jacuzzi
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Alarm
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Garage
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Properties amenities end -->
                                    </div>
                                    <div class="tab-pane fade" id="tab4default">
                                        <!-- Floor Plans start -->
                                        <div class="floor-plans">
                                            <div class="main-title-2">
                                                <h1><span>Floor Plans</span></h1>
                                            </div>
                                            <table>
                                                <tbody><tr>
                                                    <td><strong>Size</strong></td>
                                                    <td><strong>Rooms</strong></td>
                                                    <td><strong>2 Bathrooms</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>1600</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <img src="http://placehold.it/708x359" alt="floor-plans" class="img-responsive">
                                        </div>
                                        <!-- Floor Plans end -->
                                    </div>
                                    <div class="tab-pane fade" id="tab5default">
                                        <!-- Inside properties start  -->
                                        <div class="inside-properties">
                                            <!-- Main Title 2 -->
                                            <div class="main-title-2">
                                                <h1><span>Video</span></h1>
                                            </div>
                                            <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                                        </div>
                                        <!-- Inside properties end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Property description end -->
                </div>
                <!-- Properties details section end -->

                <!-- Location start -->

                <!-- Location end -->

                <!-- Properties details section start -->
                <div class="Properties-details-section sidebar-widget">
                     <!-- Contact 1 start -->
                     @if(!isset($user))
                     <div class="contact-1">
                         <h4 class="title comment-blog"> Vui Lòng<a href="{{ route('getlogin') }}"> Đăng Nhập </a> Hoặc <a href="{{ route('getregister') }}"> Tạo Tài Khoản Mới </a>  Để Có Thể Bình Luận </h3>
                     </div>
                     @else
                    <div class="contact-1">
                            <div class="contact-form">
                                <!-- Main Title 2 -->
                                <div class="main-title-2">
                                    <h1><span>Bình Luận Trao Đổi </span> </h1>
                                </div>
                                <form id="contact_form" action="{{ route('post.comment.post') }}" method="POST" enctype="multipart/form-data" style="border-bottom:1px solid #ccc;">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <input type="hidden" id="IdPost" name="IdPost" value="{!! $post_detail->id !!}">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group message">
                                                <textarea class="input-text" id="message" name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  pull-right">
                                            <div class="form-group send-btn mb-0  pull-right" style="padding-bottom:20px;">
                                                
                                                <button type="button" class="button-md button-theme">Bình Luận</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                    @endif
                        <!-- Contact 1 end -->
                    <!-- Properties comments start -->
                    <div class="properties-comments mb-40 mt-40">
                        <!-- Comments section start -->
                        <div class="comments-section">
                            <!-- Main Title 2
                            <div class="main-title-2">
                                <h1><span>Comments </span> Section</h1>
                            </div>
                             -->
                            <ul class="comments">
                             <!-- Noi Chua Ajax Load Comment -->
                            </ul>
                        </div>
                        <!-- Comments section end -->
                    </div>
                    <!-- Properties comments end -->

                   
                </div>
                <!-- Properties details section end -->
            </div>
                <!-- sidebar right start -->
            @include('client.block.sidebar_post')
                <!-- sidebar right end -->
        </div>
    </div>
</div>
<!-- Properties details page end -->

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
<script>


$.ajaxSetup({  
   headers: {  
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  
    } 
});  
$('.button-theme').click(function (e) {
        e.preventDefault();
        var IdPost = $('#IdPost').val();
        var message = $('#message').val();
        $.ajax({
            type: "POST",
            url: '{{url("/comment-post")}}',
            dataType: 'JSON',
            data: {IdPost: IdPost, message: message},
            success: function(data) {
                if(data.error != '')
            {   
                $('#contact_form')[0].reset();
                $(".comments ").empty();
                //sua gi nua nhi
                // ok chua bác 
                //empty cho nay cung dc
                load_comment(); // còn đây là khi submit thành công thì nó load lại danh sach
            }
        }
            
        });
});
load_comment(); //nay de lam gi v
// để load danh sách cmt khi chưa submit đó bác

function load_comment()
 {
        var	id_post =$('#id_post').val();
        //console.log(id_post);
        $.get("../ajax/comment-post/"+id_post, function(data){
            //muon k bi lap phai empty truoc khi append 
			$(".comments ").append(data);
		});
}

</script>
@endsection