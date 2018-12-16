<!DOCTYPE html>
<html lang="vn">
<head>
    <title> @yield('title')  - Dautubds79.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:locale"        content="vi_VN" >
    <meta property="og:url"           content="{{ url()->full() }}" >
    <meta property="og:type"          content="website" >
    <meta property="og:title"         content=" @yield('title') - Dautubds79.com" >
    <meta property="og:description"   content=" @yield('description')" >
    <meta property="og:image"         content="{{ asset('public/client/img/03.jpg')}}" />
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/bootstrap-submenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/client/css/leaflet.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ url('public/client/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ url('public/client/css/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ url('public/client/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ url('public/client/css/bootstrap-datepicker.min.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/skins/default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/mystyle.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ url('public/client/img/favicon.ico') }}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/client/css/ie10-viewport-bug-workaround.css') }}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    

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

    <script src="{{ url('public/client/js/jquery-2.2.0.min.js') }}"></script>
    <script src="{{ url('public/client/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/client/js/bootstrap-submenu.min.js') }}"></script>
    <script src="{{ url('public/client/js/rangeslider.js') }}"></script>
    <script src="{{ url('public/client/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ url('public/client/js/wow.min.js') }}"></script>
    <script src="{{ url('public/client/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('public/client/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('public/client/js/jquery.scrollUp.js') }}"></script>
    <script src="{{ url('public/client/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('public/client/js/leaflet.js') }}"></script>
    <script src="{{ url('public/client/js/leaflet-providers.min.js') }}"></script>
    <script src="{{ url('public/client/js/leaflet.markercluster.js') }}"></script>
    <script src="{{ url('public/client/js/dropzone.min.js') }}"></script>
    <script src="{{ url('public/client/js/jquery.filterizr.min.js') }}"></script>
    <script src="{{ url('public/client/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('public/client/js/app.min.js') }}"></script>
    <script src="{{ url('public/client/js/bloodhound.min.js') }}"></script>
    <script src="{{ url('public/client/js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ url('public/client/js/typeahead.jquery.min.js') }}"></script>
    <script src="{{ url('public/client/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ url('public/client/js/ie10-viewport-bug-workaround.js') }}"></script>
    <!-- Custom javascript -->
    <script src="{{ url('public/client/js/ie10-viewport-bug-workaround.js') }}"></script>
    <script src="{{ url('public/client/js/myapp.js') }}"></script>
    <script src="{{ url('public/client/js/main.js') }}"></script>
    <script src="{{ url('public/client/js/ckeditor.js') }}"></script>
    <script src="{{ url('public/client/js/ie-emulation-modes-warning.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125823495-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'UA-125823495-1');
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ba10858c666d426648adf50/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
        @yield('javascript')

</body>
</html>