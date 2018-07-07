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
                    <li>
                        <a href="{!!  route('getlogin') !!}" class="sign-in"><i class="fa fa-sign-in"></i>  Đăng Nhập</a>
                    </li>
                    <li>
                        <a href="{!!  route('getregister') !!}" class="sign-in"><i class="fa fa-user"></i> Đăng Ký</a>
                    </li>
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
                    <img src="{!! url('public/client/img/logos/logo1.png') !!}" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Trang Chủ <span class="caret"></span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Properties<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a tabindex="0">List Layout</a>
                                <ul class="dropdown-menu">
                                    <li><a href="properties-list-rightside.html">Right Sidebar</a></li>
                                    <li><a href="properties-list-leftside.html">Left Sidebar</a></li>
                                    <li><a href="properties-list-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">Grid Layout</a>
                                <ul class="dropdown-menu">
                                    <li><a href="properties-grid-rightside.html">Right Sidebar</a></li>
                                    <li><a href="properties-grid-leftside.html">Left Sidebar</a></li>
                                    <li><a href="properties-grid-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">Map View</a>
                                <ul class="dropdown-menu">
                                    <li><a href="properties-map-leftside-list.html">Map List 1</a></li>
                                    <li><a href="properties-map-rightside-list.html">Map List 2</a></li>
                                    <li><a href="properties-map-leftside-grid.html">Map Grid 1</a></li>
                                    <li><a href="properties-map-rightside-grid.html">Map Grid 2</a></li>
                                    <li><a href="properties-map-full.html">Map FullWidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">Property Detail</a>
                                <ul class="dropdown-menu">
                                    <li><a href="properties-details.html">Property Detail 1</a></li>
                                    <li><a href="properties-details-2.html">Property Detail 2</a></li>
                                    <li><a href="properties-details-3.html">Property Detail 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Agents<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="agent-listing-grid.html">Agent grid</a></li>
                            <li><a href="agent-listing-grid-sidebar.html">Agent Grid sidebarbar</a></li>
                            <li><a href="agent-listing-row.html">Agent list</a></li>
                            <li><a href="agent-listing-row-sidebar.html">Agent List Sidebarbar</a></li>
                            <li><a href="agent-single.html">Agent Detail</a></li>
                        </ul>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Pages <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-lg-3 col-md-3 col-sm-6">
                                <ul>
                                    <li class="dropdown-header">Pages</li>
                                    <li><a href="about.html">About 1</a></li>
                                    <li><a href="about-2.html">About 2</a></li>
                                    <li><a href="services-1.html">Services 1</a></li>
                                    <li><a href="services-2.html">Services 2</a></li>
                                    <li><a href="pricing-tables.html">Pricing Tables 1</a></li>
                                    <li><a href="pricing-tables-2.html">Pricing Tables 2</a></li>
                                    <li><a href="pricing-tables-3.html">Pricing Tables 3</a></li>
                                </ul>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-6">
                                <ul>
                                    <li class="dropdown-header">Pages</li>
                                    <li><a href="faq.html">Faq 1</a></li>
                                    <li><a href="faq-2.html">Faq 2</a></li>
                                    <li><a href="gallery-1.html">Gallery 1</a></li>
                                    <li><a href="gallery-2.html">Gallery 2</a></li>
                                    <li><a href="gallery-3.html">Gallery 3</a></li>
                                    <li><a href="properties-comparison.html">Properties Comparison</a></li>
                                    <li><a href="search-brand.html">Search Brand</a></li>
                                </ul>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-6">
                                <ul>
                                    <li class="dropdown-header">Pages</li>
                                    <li><a href="contact.html">Contact 1</a></li>
                                    <li><a href="contact-2.html">Contact 2</a></li>
                                    <li><a href="contact-3.html">Contact 3</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                    <li><a href="icon.html">Icon</a></li>
                                    <li><a href="404.html">Pages 404</a></li>

                                </ul>
                            </li>
                            <li class="col-lg-3 col-md-3 col-sm-6">
                                <ul>
                                    <li class="dropdown-header">Pages</li>
                                    <li><a href="user-profile.html">User profile</a></li>
                                    <li><a href="my-properties.html">My Properties</a></li>
                                    <li><a href="favorited-properties.html">Favorited properties</a></li>
                                    <li><a href="submit-property.html">Submit Property</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html">Signup</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a  href="{!!  route('getblog') !!}">
                            Blog
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>
                        <a href="{!!  route('getsubmitpost') !!}" class="button">
                            Đăng Tin Rao
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->
