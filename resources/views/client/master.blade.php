<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>The Nest - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/client/css/leaflet.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('public/client/css/map.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ url('public/client/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ url('public/client/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ url('public/client/css/magnific-popup.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/skins/default.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ url('public/client/img/favicon.ico') }}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/ie10-viewport-bug-workaround.css') }}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ url('public/client/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="page_loader"></div>
<!-- header start -->

@include('client.block.header')

<!-- header end -->
@yield('content')
<!-- Footer start -->
@include('client.block.footer')
<!-- Car Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="carModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carModalLabel">
                    Find Your Dream House
                </h5>
                <p>
                    123 Kathal St. Tampa City,
                </p>
                <span class="ratings">
                    <i class="fa fa-star s1 active" data-score="1"></i>
                    <i class="fa fa-star s2 active" data-score="2"></i>
                    <i class="fa fa-star s3 active" data-score="3"></i>
                    <i class="fa fa-star s4 active" data-score="4"></i>
                    <i class="fa fa-star s5 active" data-score="5"></i>
                </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row modal-raw">
                    <div class="col-lg-5 modal-left">
                        <div class="modal-left-content">
                            <div class="bs-example" data-example-id="carousel-with-captions">
                                <div class="carousel slide" id="properties-carousel" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item">
                                            <img src="http://placehold.it/450x300 " alt="best-properties">
                                        </div>
                                        <div class="item">
                                            <img src="http://placehold.it/450x300 " alt="best-properties">
                                        </div>
                                        <div class="item active">
                                            <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <a class="control control-prev" href="#properties-carousel" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="control control-next" href="#properties-carousel" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="description">
                                <h3>Description</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <div class="features">
                                    <ul class="bullets">
                                        <li><i class="flaticon-air-conditioner"></i>Air conditioning</li>
                                        <li><i class="flaticon-wifi"></i>Wifi</li>
                                        <li><i class="flaticon-transport"></i>Parking</li>
                                        <li><i class="flaticon-people-2"></i>Pool</li>
                                        <li><i class="flaticon-weightlifting"></i>Gym</li>
                                        <li><i class="flaticon-building"></i>Alarm</li>
                                        <li><i class="flaticon-old-telephone-ringing"></i>Balcony</li>
                                        <li><i class="flaticon-monitor"></i>TV</li>
                                    </ul>
                                </div>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Model</dt>
                                    <dd>Maxima</dd>
                                    <dt>Condition</dt>
                                    <dd>Brand New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <section>
                                <h3>Last Review</h3>
                                <div class="ratings" data-rating="5">
                                    <span>
                                        <i class="fa fa-star s1 active" data-score="1"></i>
                                        <i class="fa fa-star s2 active" data-score="2"></i>
                                        <i class="fa fa-star s3 active" data-score="3"></i>
                                        <i class="fa fa-star s4 active" data-score="4"></i>
                                        <i class="fa fa-star s5 active" data-score="5"></i>
                                    </span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                            </section>
                            <a href="properties-details.html" class="btn button-sm button-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ url('public/client/js/jquery-2.2.0.min.js') }}"></script>
<script src="{{ url('public/client/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/client/js/bootstrap-submenu.js') }}"></script>
<script src="{{ url('public/client/js/rangeslider.js') }}"></script>
<script src="{{ url('public/client/js/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ url('public/client/js/wow.min.js') }}"></script>
<script src="{{ url('public/client/js/bootstrap-select.min.js') }}"></script>
<script src="{{ url('public/client/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ url('public/client/js/jquery.scrollUp.js') }}"></script>
<script src="{{ url('public/client/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ url('public/client/js/leaflet.js') }}"></script>
<script src="{{ url('public/client/js/leaflet-providers.js') }}"></script>
<script src="{{ url('public/client/js/leaflet.markercluster.js') }}"></script>
<script src="{{ url('public/client/js/dropzone.js') }}"></script>
<script src="{{ url('public/client/js/jquery.filterizr.js') }}"></script>
<script src="{{ url('public/client/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('public/client/js/maps.js') }}"></script>
<script src="{{ url('public/client/js/app.js') }}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ url('public/client/js/ie10-viewport-bug-workaround.js') }}"></script>
<!-- Custom javascript -->
<script src="{{ url('public/client/js/ie10-viewport-bug-workaround.js') }}"></script>
<script src="{{ url('public/client/js/myapp.js') }}"></script>

</body>
</html>