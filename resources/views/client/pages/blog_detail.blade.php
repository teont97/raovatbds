@extends('client.master')
@section('content')
<!-- Banner start -->
<div class="blog-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Blog Details Right Sidebar</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog Details Right Sidebar</li>
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
                <!-- Blog box start -->
                <div class="thumbnail blog-box clearfix">
                    <img src="{!! asset('public/admin/dist/img/'.$data_tintuc_detail['images']) !!}" alt="blog-1" class="img-blog-detail">
                    <input type="hidden" id="id_blog" value="{{ $data_tintuc_detail->id }}">
                    <?php
                        if(!isset($user))
                        $data_user=0;
                        else
                        $data_user=$user->id;
                     ?>
                    <input type="hidden" id="id_user" value="{{ $data_user}} ">
                    <!-- detail -->
                    <div class="clearfix"></div>
                    <blockquote>
                       {{$data_tintuc_detail->tomtat}}
                    </blockquote>
               
                    <div class="caption detail">
                        <!--Main title -->
                        <h3 class="title">
                        <a href="blog-single-sidebar-right.html">{{$data_tintuc_detail->title}}</a>
                        </h3>
                        <!-- Post meta -->
                        <div class="post-meta">
                            <span><a href="#"><i class="fa fa-user"></i>{{$data_tintuc_detail->User['name']}}</a></span>
                            <span><a><i class="fa fa-calendar "></i>{{$data_tintuc_detail->created_at}}</a></span>
                            <span><a href="#"><i class="fa fa-bars"></i>{{$data_tintuc_detail->typeblog['name']}}</a></span>
                            <span><a href="#"><i class="fa fa-comments"></i>7 Comment</a></span>
                        </div>
                        <!-- paragraph -->
                        {!! $data_tintuc_detail->content !!}
                        <div class="row clearfix t-s">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <!-- Tags box start -->
                                <div class="tags-box">
                                    <h2>Tags</h2>
                                    <ul class="tags">
                                        <li><a href="#">Image</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Slideshow</a></li>
                                    </ul>
                                </div>
                                <!-- Tags box end -->
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <!-- Blog Share start -->
                                <div class="social-media clearfix blog-share">
                                    <h2>Share</h2>
                                    <!-- Social list -->
                                    <ul class="social-list">
                                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Blog Share end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog box end -->
                     @if(!isset($user))
                    <div class="contact-1 sidebar-widget">
                        <h4 class="title comment-blog"> Vui Lòng<a href="{{ route('getlogin') }}"> Đăng Nhập </a> Hoặc  <a href="{{ route('getregister') }}"> Tạo Tài Khoản Mới </a>  Để Có Thể Bình Luận </h3>
                    </div>
                    @else
                     <!-- Contact 1 start -->
                     <div class="contact-1 sidebar-widget">

                            <div class="main-title-2">
                                <h1> <span>Bình Luận</span> Trao Đổi</h1>
                            </div>
                            <div class="contact-form">
                            <form id="contact_form_blog" action="{{ route('post.comment.blog') }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <input type="hidden" id="IdBlog"  name="IdBlog" value="{!! $data_tintuc_detail->id !!}">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                        <div class="form-group message">
                                            <textarea class="input-text"  id="message" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group send-btn mb-0 pull-right">
                                            <button type="submit" class="button-md button-theme">Bình Luận</button>
                                     </div>
                                </div>
                            </div>
                         </form>
                        
                    </div>
                    </div>
                @endif
                <!-- Contact end -->
                <!-- Comments section start -->
  
                <div class="comments-section sidebar-widget">
                    <!-- Main Title 2
                    <div class="main-title-2">
                        <h1><span>Comments </span> Section</h1>
                    </div>
                     -->
                    <ul class="comments">
                        <!--  Nơi Hứng List Cmt  Ajax  Đổ Về  -->
                    </ul>
                </div>
   
                <!-- Comments section end -->

           
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
<script>
 $.ajaxSetup({  
       headers: {  
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  
        } 
    });  
$('.button-theme').click(function (e) {
            e.preventDefault();
            var IdBLog = $('#IdBlog').val();
            //console.log(IdBLog);
            //return false;
            var message = $('#message').val();
            $.ajax({
                type: "POST",
                url: '{{url("/comment-blog")}}',
                dataType: 'JSON',
                data: {IdBLog: IdBLog, message: message},
                success: function(data) {
        
                    $('#contact_form_blog')[0].reset();
                    $(".comments ").empty();
                    //console.log('ok');
                    // ok chua bác 
                    //empty cho nay cung dc
                    load_commentblog(); // còn đây là khi submit thành công thì nó load lại danh sach
            
            },
            error: function (xhr, textStatus, thrownError) {
                console.log(xhr.status);
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(thrownError);
  }
            });
    });
    load_commentblog(); //nay de lam gi v
    // để load danh sách cmt khi chưa submit đó bác
    
    function load_commentblog()
     {
            var	IdBLog =$('#id_blog').val();
            //console.log(IdBLog);
            //return false;
            $.get("../ajax/comment-blog/"+IdBLog, function(data){
                //muon k bi lap phai empty truoc khi append 
                $(".comments").append(data);
            });
    }
    
</script>
@endsection