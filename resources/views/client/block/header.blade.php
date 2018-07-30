<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="list-inline">
                    <a href="tel:1-8X0-666-8X88"><i class="fa fa-phone"></i>01685800203</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>ncchi1997@gmail.com</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="top-social-media pull-right">
                @if(!isset($user))
                    <li>
                        <a href="{!!  route('getlogin') !!}" class="sign-in"><i class="fa fa-sign-in"></i>  Đăng Nhập</a>
                    </li>
                    <li>
                        <a href="{!!  route('getregister') !!}" class="sign-in"><i class="fa fa-user"></i> Đăng Ký</a>
                    </li>
                @else
                <li>
                        <a href="{!!  route('personal.profile') !!}" class="sign-in"> <i class="fa fa-user"></i> {!! $user->name !!}</a>
                    </li>
                    <li>
                        <a href="{!!  route('logoutUser') !!}" class="sign-in"> <i class="fa fa-sign-in"></i> Đăng Xuất</a>
                    </li>
                @endif
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{!!  route('gethome') !!}" class="logo1">
                    <img src="{!! url('public/client/img/logos/logo01.png') !!}" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                @foreach($hinhthuc as $iteam_hinhthuc)        
                    <li class="dropdown ">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            {!! $iteam_hinhthuc->name !!} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                @foreach($iteam_hinhthuc->loaitin as $iteam_chothue)
                                    <li><a href="{!!  route('getproduct',$iteam_chothue->id) !!}">{!! $iteam_chothue->name !!}</a></li>
                                @endforeach
                        </ul>
                    </li>
                @endforeach
                 
                    <li class="dropdown">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Dự Án <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="agent-listing-grid.html">Thiết Kế </a></li>
                            <li><a href="agent-listing-grid-sidebar.html">Phong Thủy </a></li>
                            <li><a href="agent-listing-row.html">Tư Pháp </a></li>
                            <li><a href="agent-listing-row-sidebar.html">Thị Trường </a></li>
                            <li><a href="agent-single.html">Khác</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                            <a  href="{!!  route('getblog') !!}">
                                Tin Tức
                            </a>
                        </li>
                </ul>
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>
                        <a href="{!!  route('getsubmitpost') !!}" class="button">
                            Đăng Tin 
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->
