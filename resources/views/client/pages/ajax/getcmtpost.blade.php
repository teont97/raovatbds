
        @foreach($data_cmtpost as $iteam_cmt)


        <li>
            <div class="comment">
                <div class="comment-author">
                    <a href="#">
                        <img src="{!! asset('public\client\img\avatar/'.Auth::user()->avatar) !!}" alt="avatar-5">
                    </a>
                </div>
                <div class="comment-content">
                    <div class="comment-meta">
                        <div class="comment-meta-author">
                            {{ Auth::user()->name }}
                        </div>
                        
                        <div class="comment-meta-reply">
                            <a href="javascript:void(0)"  cid="{{ $iteam_cmt->id }}" token="{{ csrf_token() }}" class="reply">Reply</a>
                        </div>
                        <div class="comment-meta-date">
                        <span class="hidden-xs">{{ $iteam_cmt->created_at }}</span>
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
                            @foreach($iteam_cmt->repliespost  as $iteam_rep)
                            <div class="comment">
                                <div class="comment-author">
                                    <a href="#">
                                        <img src="{!! asset('public\client\img\avatar/'.Auth::user()->avatar) !!}" alt="avatar-5">
                                    </a>
                                    
                                </div>
                    
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <div class="comment-meta-author">
                                           {{  Auth::user()->name }}
                                        </div>
                                        
                                        
                    
                                        <div class="comment-meta-date">
                                            <span class="hidden-xs">{{ $iteam_rep->created_at }}</span>
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
                                        <p style="word-wrap: break-word;">{{ $iteam_rep->rely }}</p>
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
<script>
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
            url: '{{url("/reply-post")}}',
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
        }  
        });
    
    });
    //getcmtpost.blade.php load_repcmt();
function load_repcmt(id_cmt)
    { 
        //var cid = $(this).attr("comment_id");
        //console.log(cid);
       // return false;
        $.get("../ajax/reply-post/"+id_cmt, function(data){
            //muon k bi lap phai empty truoc khi append 
			$(".iteam-reply"+id_cmt).append(data);
    });
}

</script>