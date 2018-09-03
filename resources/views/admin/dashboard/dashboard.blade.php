@extends('admin.master')
@section('content')
<section class="content-header">
      <h1>
        Bảng Thống Kê
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="info-box">
              <span class="info-box-icon bg-aqua">
              <i class="fa fa-users"> </i>
              <span> Users</span>
              </span>
            <div class="info-box-content">
              <span class="info-box-text">Tổng Số User </span>
              <span class="info-box-number">{{ count(Auth::user()->all()) }} </span>
            <a href="{{ route('admin.user.getlist')}}" class="info-box-link">Xem Chi Tiết  <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="info-box">
            <span class="info-box-icon bg-green">
            <i class="fa fa-external-link"> </i>
            <span> Bài Post  </span>
            </span>
          <div class="info-box-content">
            <span class="info-box-text">Tổng Bài Viết </span>
            <span class="info-box-number"> {{ count($data_post) }} </span>
            <a href="{{ route('admin.newpost.getlist')}}" class="info-box-link">Xem Chi Tiết  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
           <!-- small box -->
          <div class="info-box">
              <span class="info-box-icon bg-yellow">
              <i class="fa fa-building-o"> </i>
              <span>Dự Án</span>
              </span>
            <div class="info-box-content">
              <span class="info-box-text">Tổng Số Dự Án </span>
              <span class="info-box-number">{{ count($data_project) }}</span>
              <a href="{{ route('admin.blog.listBlog')}}" class="info-box-link">Xem Chi Tiết  <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
           <!-- small box -->
           <div class="info-box">
              <span class="info-box-icon bg-red">
              <i class="fa fa-envelope-o"> </i>
              <span>Data Email</span>
              </span>
          <div class="info-box-content">
              <span class="info-box-text">Email Dự Án </span>
              <span class="info-box-number">{{ $data_email }} </span>
              <a href="{{ route('data.email.list')}}" class="info-box-link">Xem Chi Tiết  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="pull-left header"><i class="fa fa-inbox"></i> Biểu Đồ Chính Chủ / Nhà Mô Giới </li>
            </ul>
            <div class="tab-content no-padding" style="position: relative" >
              <!-- Morris chart - Sales -->
              <canvas id="line-chart" ></canvas>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Dự Án Được Quan Tâm</li>
              </ul>
              <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <table id="ListProject" class="table table-bordered table-striped" style="width:100%;">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th style="max-width:350px;">Tên Dự Án </th>
                    <th>View </th>             
                  </tr>
                  </thead>
                  <tbody>
                      <?php $stt=0; ?>
                  @foreach($data_project as $iteam_project) 
                  <?php $stt++ ?>
                    <tr>
                      <td>{!! $stt !!}</td>
                      <td>{!! $iteam_project->title !!}</td>
                      <td>{!! $iteam_project->view !!}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.nav-tabs-custom -->
        </section>
        <!-- right col -->
      </div>
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Tin Tức Được Đọc Nhiều </li>
              </ul>
              <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <table id="ListBlogNew" class="table table-bordered table-striped" style="width:100%;">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th style="max-width:350px;">Tiêu Đề </th>
                    <th>View </th>             
                  </tr>
                  </thead>
                  <tbody>
                      <?php $stt=0; ?>
                  @foreach($data_blog as $iteam_blog) 
                  <?php $stt++ ?>
                    <tr>
                      <td>{!! $stt !!}</td>
                      <td>{!! $iteam_blog->title !!}</td>
                      <td>{!! $iteam_blog->view !!}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.nav-tabs-custom -->
        </section>
        <!-- right col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">
                <li class="pull-left header"><i class="fa fa-inbox"></i> Bài BDS Mới Nhất</li>
              </ul>
              <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <table id="ListPost" class="table table-bordered table-striped" style="width:100%;">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th style="width:200px;">Tiêu Đề </th>
                    <th>Gói Up </th>
                    <th>User</th>              
                  </tr>
                  </thead>
                  <tbody>
                      <?php $stt=0; ?>
                  @foreach($data_post as $iteam_post) 
                  <?php $stt++ ?>
                    <tr>
                      <td>{!! $stt !!}</td>
                      <td>{!! $iteam_post->title !!}</td>
                      <td>{!! $iteam_post->loaiuptin['name'] !!}</td>
                      <td>{!! $iteam_post->User['name'] !!}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.nav-tabs-custom -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
      
</section>
<style>
  #ListBlogNew_wrapper{
    padding: 10px 10px;
  }
  #ListProject_wrapper{
    padding: 10px 10px;
  }
  #ListPost_wrapper{
    padding: 10px 10px;
  }
</style>
<script>
  $(function(){
    $('#ListProject').DataTable({
      "scrollY": "160px",
      "scrollCollapse": true,
      "paging": false
    });
  })
  $(function(){
    $('#ListBlogNew').DataTable({
      "scrollY": "200px",
      "scrollCollapse": true,
      "paging": false
    });
  })
  $(function(){
    $('#ListPost').DataTable({
      "scrollY": "200px",
      "scrollCollapse": true,
      "paging": false
    });
  })
</script>
<script>
  window.onload = function () {
        var Brokers = new Array();
        var Customers = new Array();
        $.get("../ajax/chart-line/", function(response){
            response.forEach(function(data){
              if(data.level==0){
                Customers.push(data.total);
              }
              if(data.level==2){
                Brokers.push(data.total);
              }
        });
        //console.log(Customers);
        //console.log(Brokers);
        Chart.defaults.global.defaultFontColor = '#000000';
        Chart.defaults.global.defaultFontFamily = 'Arial';
        var lineChart = document.getElementById('line-chart');
        var myChart = new Chart(lineChart, {
            type: 'line',
            data: {
                labels: ["Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11","Tháng 12"],
                datasets: [
                    {
                        label: 'Chính Chủ',
                        data: Customers,
                        backgroundColor: 'rgba(0, 0, 0, 0)',
                        borderColor: "#dd4b39",
                        pointHoverBackgroundColor: "#dd4b39",
                        borderWidth: 2
                    },
                    {
                        label: 'Nhà Mô Giới',
                        data: Brokers,
                        backgroundColor: 'rgba(0, 0, 0, 0)',
                        pointHoverBackgroundColor: "#00a65a",
                        borderColor: '#00a65a',
                        borderWidth: 2
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                          fontColor: "rgba(0,0,0,0.5)",
                          fontStyle: "bold",
                          beginAtZero: true,
                          responsive:false,
                        }
                    }]
                },
            }
        });
      });
    };
</script>
@endsection