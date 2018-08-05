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
                    <li><a href="#">{{$iteam_typeblog->name }}</a> <span> {{ count($iteam_typeblog->blog) }}  </span></li>
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
                            <a href="properties-details.html">{{ $iteam_blog->title }}</a>
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
                                <a href="properties-details.html">{{ $iteam_duan->title }}</a>
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
                <li><a href="#">Image</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Typography</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Slideshow</a></li>
                <li><a href="#">Post Formats</a></li>
                <li><a href="#">Sellers</a></li>
                <li><a href="#">WooCommerce</a></li>
                <li><a href="#">Shortcodes</a></li>
            </ul>
        </div>
        <!-- Social media -->
        <div class="social-media sidebar-widget clearfix">
            <!-- Main Title 2 -->
            <div class="main-title-2">
                <h1><span>Social</span> Media</h1>
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
                <h1><span>Latest</span> Reviews</h1>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="http://placehold.it/50x50" alt="avatar-1">
                    </a>
                </div>
                <div class="media-body">
                    <h3 class="media-heading"><a href="#">John Antony</a></h3>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                        Etiamrisus tortor, accumsan at nisi et,
                    </p>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="http://placehold.it/50x50" alt="avatar-2">
                    </a>
                </div>
                <div class="media-body">
                    <h3 class="media-heading"><a href="#">Karen Paran</a></h3>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                        Etiamrisus tortor, accumsan at nisi et,
                    </p>
                </div>
            </div>
        </div>
        <!-- Latest tweet -->
        <div class="sidebar-widget latest-tweet">
            <div class="main-title-2">
                <h1><span>Latest</span> Tweet</h1>
            </div>
            <p><a href="#">@Lorem ipsum dolor</a> sit amet, consectetur adipiscing elit. Aenean id dignissim justo. Maecenas urna lacus, bibendum </p>
            <p>@Lorem ipsum dolor<a href="#">sit amet, consectetur</a> adipiscing elit. Aenean id dignissim justo. Maecenas urna lacus, bibendum quis orci </p>
        </div>
    </div>
</div>