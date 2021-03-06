<div class="col-lg-4 col-md-4 col-xs-12">
    <div class="sidebar">
        <!-- Search box -->
        <div class="sidebar-widget search-box">
        <form  action="{{ route('getseacrh.blog')}}" class="form-inline form-search" method="GET">
                <div class="form-group">
                    <label class="sr-only" for="textsearch2">Search</label>
                    <input type="text" name="key" class="form-control" id="textsearch2" placeholder="Tìm Kiếm Từ Khóa Tiếng Việt Có Dấu">
                </div>
                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- Category posts -->
        <div class="sidebar-widget category-posts">
            <div class="main-title-2">
                
                <h1><span>Chuyên Mục</span> Phổ Biến</h1>
                
            </div>
            <ul class="list-unstyled list-cat">
                @foreach($typeblog_random as $iteam_typeblog)
            <li><a href="{{ route('getblog',$iteam_typeblog->id)}}">{{$iteam_typeblog->name }}</a> <span> {{ count($iteam_typeblog->blog) }}  </span></li>
                @endforeach
            </ul>
        </div>
        <!-- Popular posts -->
        <div class="sidebar-widget popular-posts">
            <div class="main-title-2">
                <h1><span>Bài Viết</span> Đề Xuất </h1>
            </div>
            @foreach($blog_random as $iteam_blog)
                <div class="media">
                    <div class="media-left">
                        <img class="images-random" src="{!! asset('public/admin/dist/img/'.$iteam_blog['images']) !!}" alt="small-properties-1">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                        <a href="{{ route('getblog.detail',$iteam_blog->id)}}">{{ $iteam_blog->title }}</a>
                        </h3>
                        <p>{{ $iteam_blog->created_at }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Archives posts -->
        <div class="sidebar-widget popular-posts">
                <div class="main-title-2">
                    <h1><span>Dự Án </span>Tiêu Biểu </h1>
                </div>
                @foreach($duan_random as $iteam_duan)
                    <div class="media">
                        <div class="media-left">
                            <img class="images-random" src="{!! asset('public/admin/dist/img/'.$iteam_duan['images']) !!}" alt="small-properties-1">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="{{ route('getblog.detail',$iteam_duan->id)}}">{{ $iteam_duan->title }}</a>
                            </h3>
                            <p>{{ $iteam_duan->created_at }}</p>
                        </div>
                    </div>
                @endforeach
        </div>
        <!-- Tags box -->
        <div class="sidebar-widget tags-box">
            <div class="main-title-2">
                <h1><span>Thẻ</span> Tags</h1>
            </div>
            <ul class="tags">
                @foreach($tags as $tag)
                    <li><a href="#">{{ $tag->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- Social media -->
        <div class="social-media sidebar-widget clearfix">
            <!-- Main Title 2 -->
            <div class="main-title-2">
                <h1><span>Theo dõi qua </span> mạng xã hội </h1>
            </div>
            <!-- Social list -->
            <ul class="social-list">
                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
        <!-- Latest reviews -->
        <div class="sidebar-widget latest-reviews">
            <div class="main-title-2">
                <h1><span>Kênh Youtube</span> dautubds79 </h1>
            </div>
            <div class="media">
                <div class="media-img">
                    <a href="https://www.youtube.com/channel/UCPH8vD6-mqqthUrv_39OXxw">
                        <img class="media-object" src="{!! asset('public/client/img/youtube.jpg') !!}" alt="avatar-1">
                    </a>
                </div>
                <div class="media-body text-center">
                    <p>Kênh Youtube chia sẽ về thông tin thị trường Bất Động Sản Nghỉ Dưỡng Nha Trang rất bổ ích.Nhớ <a href="https://www.youtube.com/channel/UCPH8vD6-mqqthUrv_39OXxw">ghé thăm và Subscribe nhé! </a>  </p>
                </div>
                <div class="media-youtube text-center">
                    <div class="g-ytsubscribe text-center" data-channelid="UCPH8vD6-mqqthUrv_39OXxw" data-layout="full" data-count="default"></div> 
                </div>
            </div>
        </div>
        <!-- Latest tweet -->
        <div class="sidebar-widget latest-reviews mb-0">
            <div class="main-title-2">
                <h1><span>fanpage</span> của chúng tôi </h1>
            </div>
            <div class="media">
                <div class="fb-page" data-href="https://www.facebook.com/tintucbatdongsannghiduong" data-tabs="messages" data-width="320" data-height="382" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tintucbatdongsannghiduong" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tintucbatdongsannghiduong">Đoàn Văn Hưng - Bất Động Sản Nghỉ Dưỡng Nha Trang</a></blockquote></div>
            </div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script src="https://apis.google.com/js/platform.js"></script>
