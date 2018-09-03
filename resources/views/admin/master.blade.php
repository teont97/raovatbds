<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="{{ url('public/client/fonts/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('public/admin/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('public/admin/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('public/admin/dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ url('public/admin/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ url('public/admin/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ url('public/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url('public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('public/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- My Skin CSS -->
  <link rel="stylesheet" href="{{ url('public/admin/dist/css/skins/myskin.css') }}">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- JavaScript -->
  <!-- jQuery 3 -->
<script src="{{ url('public/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('public/admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ url('public/admin/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ url('public/admin/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('public/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ url('public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('public/admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('public/admin/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ url('public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ url('public/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url('public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ url('public/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('public/admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('public/admin/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('public/admin/dist/js/demo.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('public/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('public/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('public/admin/dist/js/myapp.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> <b> Dautubds79.com </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
    <a class="sidebar-toggle" href="#" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a> 

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
          <a href="{{ route('gethome')}}" class="dropdown-toggle" data-toggle="dropdown">
              <span class="d-none d-sm-inline">   View Website </span>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/public/client/img/avatar/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">
                <p>
                    {{ Auth::user()->name }}
                  <small>{{ Auth::user()->created_at }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="text-center">
                  <a href="{!! Route('admin.logout')!!}" class="btn btn-default btn-flat">Đăng Xuất</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/public/client/img/avatar/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">THỐNG KÊ </li>
        <li>
        <a href="{{ route('admin.dashboard') }}">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="header">TỔNG QUAN  </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>BÀI VIẾT </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('admin.newpost.getlist') !!}"><i class="fa fa-circle-o"></i> Danh Sách Bài Viết </a></li>
          </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-database"></i>
              <span>Data </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{!! route('data.email.list') !!}"><i class="fa fa-circle-o"></i>Email Nhận Dự Án </a></li>
            </ul>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i>
            <span>KHÁCH HÀNG</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Thêm Khách Hàng</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sửa Khách Hàng </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Danh Sách Khách Hàng</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments"></i>
            <span>Bình Luận </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('admin.newpost.getlist') !!}"><i class="fa fa-circle-o"></i> Danh Sách Bài Viết </a></li>
          </ul>
        </li>
        <li class="treeview"  >
        <a href="#">
            <i class="fa fa-users"></i>
            <span>THÀNH VIÊN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Mô Giới</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Khách Hàng Chính Chủ </a></li>
            <li><a href="{!! Route('admin.user.getlist')!!}"><i class="fa fa-circle-o"></i> Tài Khoản </a></li>
          </ul>
        </li>
        <li class="header">CHỨC NĂNG</li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Bài Đăng BDS </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{!! route('admin.general.listhinhthuc') !!}"><i class="fa fa-circle-o"></i> Hình Thức </a></li>
              <li><a href="{!! route('admin.general.listtheloai') !!}"><i class="fa fa-circle-o"></i> Thể Loại </a></li>
              <li><a href="{!! route('admin.general.listuptin') !!}"><i class="fa fa-circle-o"></i> Gói Up Tin </a></li>
              <li><a href="{!! route('admin.general.listhuongnha') !!}"><i class="fa fa-circle-o"></i> Hướng Nhà </a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-tags"></i>
              <span>Blog </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{!! route('admin.blog.listBlog') !!}"><i class="fa fa-circle-o"></i> Bài Viết  </a></li>
              <li><a href="{!! route('admin.blog.listTypeBlog') !!}"><i class="fa fa-circle-o"></i>Thể Loại  </a></li>
              <li><a href="{!! route('admin.blog.listTypeBlog') !!}"><i class="fa fa-circle-o"></i>Tag  </a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-cube"></i>
              <span>Địa Chỉ </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{!! route('admin.address.getlistTinh') !!}"><i class="fa fa-circle-o"></i> Tỉnh Thành  </a></li>
              <li><a href="{!! route('admin.address.getlistHuyen') !!}"><i class="fa fa-circle-o"></i> Quận Huyện  </a></li>
              <li><a href="{!! route('admin.address.getlistPhuong') !!}"><i class="fa fa-circle-o"></i> Phường Xã  </a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shield"></i>
            <span>Về Chúng Tôi  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('admin.about.getlist') !!}"><i class="fa fa-circle-o"></i> Danh Sách </a></li>
            <li><a href="{!! route('admin.about.create') !!}"><i class="fa fa-circle-o"></i> Thêm Mới   </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-question-circle"></i>
            <span>Hỏi Đáp  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('admin.faq.getlist') !!}"><i class="fa fa-circle-o"></i>Danh Sách Hỏi Đáp </a></li>
            <li><a href="{!! route('admin.faq.create') !!}"><i class="fa fa-circle-o"></i> Thêm Câu Hỏi </a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->

        @yield('content')

    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.1
    </div>
    <strong>Copyright &copy; 2018 Nguyễn Công Chí  </strong>
  </footer>

<!-- ./wrapper -->


</body>
</html>
