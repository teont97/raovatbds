<div class="col-lg-4 col-md-4 col-sm-12">
                <!-- User account box start -->
                <div class="user-account-box">
                    <div class="header clearfix">
                        <form enctype="multipart/form-data" action="/personal/upload-avatar" method="POST">
                            <div class="edit-profile-photo">
                                <img src="/public/client/img/avatar/{{ Auth::user()->avatar }}" alt="agent-1" class="img-avatar">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload" name="avatar">  
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-sm btn-primary">
                        </form>
                        <h3>{{  Auth::user()->name }}</h3>
                        <p>{{Auth::user()->email}}</p>
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
                    <div class="content">
                        <ul>
                            <li>
                                <a href="{!!  route('personal.profile') !!}">
                                    <i class="flaticon-social"></i>Thông Tin Cá Nhân
                                </a>
                            </li>
                            <li>
                                <a href="{!!  route('personal.mypost') !!}">
                                    <i class="flaticon-apartment"></i>Bài Viết Của Tôi
                                </a>
                            </li>
                            <li>
                                <a href="{!!  route('personal.myfavorited') !!}" class="active">
                                    <i class="fa fa-heart"></i>Bài Viết Yêu Thích
                                </a>
                            </li>
                            <li>
                                <a href="{!!  route('getsubmitpost') !!}">
                                    <i class="fa fa-plus"></i>Đăng Tin Mới 
                                </a>
                            </li>
                            <li>
                                <a href="{!!  route('personal.changepassword') !!}">
                                    <i class="flaticon-security"></i>Thay Đổi Mật Khẩu
                                </a>
                            </li>
                            <li>
                                <a href="{!!  route('logoutUser') !!}">
                                    <i class="flaticon-sign-out-option"></i>Đăng Xuất
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User account box end -->
            </div>