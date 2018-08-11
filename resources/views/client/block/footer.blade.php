<!-- Footer start -->
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <!-- About us -->
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Liên Hệ Chúng Tôi</h1>
                        </div>
                        <p>
                            Tư Vấn Đầu Tư : Đoàn Văn Hưng </br>
                            Vietinbank Khánh Hòa  : 109868316970
                        </p>
                        <ul class="personal-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Số 48, đường số 4, Lê Hồng Phong 2 Nha Trang
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Email:<a href="mailto:sales@hotelempire.com">info@dautubds79.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Phone: <a href="tel:+55-417-634-7071">0898 382 090 </a>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                Fax: 0167 9700 665
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Links -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Liên Kết </h1>
                        </div>
                        <ul class="links">
                            <li>
                                <a href="{{ route('gethome') }}">Trang Chủ </a>
                            </li>
                            <li>
                                <a href="properties-grid-rightside.html">Bất Động Sản </a>
                            </li>
                            <li>
                                <a href="properties-list-rightside.html">Dự Án </a>
                            </li>
                            <li>
                                <a href="blog-single-sidebar-right.html">Tin Tức </a>
                            </li>
                            <li>
                                <a href="{{ route('getabout') }}">Giới Thiệu</a>
                            </li>
                            <li>
                                <a href="{{ route('getservices') }}">Dịch Vụ  </a>
                            </li>
                          
                            <li>
                                <a href="{{ route('getcontact') }}">Liên Hệ</a>
                            </li>
                            
                            <li>
                                <a href="{{ route('getfaq') }}">Hỏi Đáp </a>
                            </li>
                
                   
                        </ul>
                    </div>
                </div>
                <!-- Recent cars -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-item popular-posts">
                        <div class="main-title-2">
                            <h1>Bài Viết Phổ Biến </h1>
                        </div>
                        @foreach($post as $iteam_post )
                        <?php $data=$iteam_post->post_images->shift(); ?>
                            <div class="media">
                                <div class="media-left">
                                    <img class="images-random" src="{!! asset('storage\app\public\upload\images/'.$data['images']) !!}" alt="small-properties-1">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading footer">
                                    <a href="properties-details.html">{{ $iteam_post->title }}</a>
                                    </h3>
                                    <p>{{ $iteam_post->created_at }}</p>
                                    <div class="price">
                                        {{ $iteam_post->price }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Subscribe -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>NHẬN THÔNG TIN DỰ ÁN MỚI  </h1>
                        </div>
                        <div class="newsletter clearfix">
                            <p>
                                Vui lòng để lại địa chỉ email , chúng tôi sẽ gửi tới quý khách những thông tin quan trọng của các dự án đang được giới đầu tư quan tâm .
                            </p>

                            <form action="#" method="post">
                                <div class="form-group">
                                    <input class="nsu-field btn-block" id="nsu-email-0" type="text" name="email" placeholder="Nhập email của bạn" required="">
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="button-sm button-theme btn-block">
                                        Gửi
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Copy right start -->
<div class="copy-right">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-8 col-sm-12">
                &copy;  2018 dautubds79.com. All right reserved. Development by Công Chí
            </div>
            <div class="col-md-4 col-sm-12">
                <ul class="social-list clearfix">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="google">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="rss">
                            <i class="fa fa-rss"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Copy end right-->