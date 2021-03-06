@extends('client.master')
@section('title',$data_tintuc_detail['title'])
@section('description',$data_tintuc_detail['tomtat'])
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
            <h1>{{$data_tintuc_detail->typeblog['name']}}</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('gethome')}}">Trang chủ</a></li>
                    <li class="active">{{  $data_tintuc_detail['title'] }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

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
                                        @foreach($data_tintuc_detail->tags as $tag)
                                            <li><a href="#">{{ $tag->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Tags box end -->
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <!-- Blog Share start -->
                                <div class="social-media clearfix blog-share">
                                    <h2>Chia Sẽ</h2>
                                    <!-- Social list -->
                                    <ul class="social-list">
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="https://twitter.com/intent/tweet?text={{$data_tintuc_detail['tomtat']}} &url={{ url()->full() }}" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="https://plus.google.com/share?url={{ url()->full() }}" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
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
                                <h1> <span>Bình Luận</span></h1>
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
                        @foreach($data_cmtblog as $iteam_cmt)
                        <li>
                            <div class="comment">
                                <div class="comment-author">
                                    <a href="#">
                                    <img src="{!! asset('public\client\img\avatar/'.$iteam_cmt->User['avatar']) !!}" alt="avatar-5">
                                    </a>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <div class="comment-meta-author">
                                            {{ $iteam_cmt->User['name'] }}
                                        </div>
                                        
                                        <div class="comment-meta-reply">
                                            <a href="javascript:void(0)"  cid="{{ $iteam_cmt->id }}"  token="{{ csrf_token() }}" class="reply">Reply</a>
                                        </div>
                                        <div class="comment-meta-date">
                                        <span class="hidden-xs">{{ $iteam_cmt->created_at}}</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="comment-body">
                                        <input type="hidden" id="datalog" value="{{$iteam_cmt->id}}">
                                        <div class="comment-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>{!! $iteam_cmt->content !!}</p>
                                    </div>
                                </div>
                            </div>
                            <ul>
                             
                                <li class="iteam-reply{{$iteam_cmt->id}}">
                                            @foreach($iteam_cmt->repliesblog  as $iteam_rep)
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <a href="#">
                                                        <img src="{!! asset('public\client\img\avatar/'.$iteam_rep->User['avatar']) !!}" alt="avatar-5">
                                                    </a>
                                                    
                                                </div>
                                    
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <div class="comment-meta-author">
                                                           {{$iteam_rep->User['name'] }}
                                                        </div>
                                                        
                                                        
                                    
                                                        <div class="comment-meta-date">
                                                            <span class="hidden-xs">{{ $iteam_rep->created_at}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="comment-body">
                                                        <div class="comment-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p style="word-wrap: break-word;">{{ $iteam_rep->reply }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </li>
                           
                            </ul>
                            <div class="reply-form reply-form{{$iteam_cmt->id}} " style="display:none">
                                <form method="post" id="sub-menu{{$iteam_cmt->id}}" >
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
                                    <input type="hidden" id="comment_id"  name="comment_id" value="{{$iteam_cmt->id}}">
                                    <input type="hidden" name="name" value="{{$iteam_cmt->id}}">
                                <div class="form-group"><textarea class="form-control" id="mesreply{{$iteam_cmt->id}}" name="mesreply" placeholder="nhap vao day" > </textarea> </div>
                                    <div class="form-group"> <input class="btn btn-primary sub-btn" catalog="{{$iteam_cmt->id}}"  type="button" value="Gửi"> </div>
                                </form>
                                    
                            </div>
                        </li>
                        @endforeach
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
@include('client.block.brands')


@endsection
@section('javascript')
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


     function checkuser(){
            var id_user = $('#id_user').val(); 
            if(id_user==0){
                $('.reply').css('display','none');
            }
            else {
                $('.reply').css('display','block');
            }
        }
        checkuser();
        $('.reply').click(function(){
            var cid = $(this).attr("cid");
            //console.log(cid)
            $('.reply-form'+cid).toggle();
            $('.reply-form'+cid).focus();
        });
    
        $('.sub-btn').click(function (e) {
        e.preventDefault();
        // 1 dong cmt id thi no lay caui id dau tien phai  chắc vậy đó bác . bác 
        // debug em nhìn thấy chỗ sai rồi
        
      //  var comment_id = $(this).closest("form").find('input#comment_id').val();
        var comment_id =$(this).closest("form").find('input#comment_id').val();

        //var mesreply = $('#mesreply'+comment_id).val();
        var mesreply = $('#mesreply'+comment_id).val(); 
        //console.log(comment_id); 
        //return false;
        
        $.ajax({
            type: "POST",
            url: '{{url("/reply-blog")}}',
            dataType: 'JSON',
            data: {comment_id: comment_id, mesreply: mesreply},
            success: function(data) {
                if(data.error != '')
            {   
                $('#sub-menu'+comment_id)[0].reset();
                $(".iteam-reply"+comment_id).empty();
                load_repcmt(comment_id);
                console.log(data);
            }
        },
        error: function (xhr, textStatus, thrownError) {
                console.log(xhr.status);
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(thrownError);
         }
        });
    
    });
    //getcmtpost.blade.php load_repcmt();
    function load_repcmt(id_cmt)
    { 
        //var cid = $(this).attr("comment_id");
        //console.log(cid);
       // return false;
        $.get("../ajax/reply-blog/"+id_cmt, function(data){
            //muon k bi lap phai empty truoc khi append 
			$(".iteam-reply"+id_cmt).append(data);
    });
}
    
</script>
<div id="fb-root"></div>

@endsection