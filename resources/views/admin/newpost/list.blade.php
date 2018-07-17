@extends('admin.master')
@section('content')
<script>
  $(function(){
    $('#ListPost').DataTable({
     // "scrollX": true
    });
  });
</script>
<section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="ListPost" class="table table-bordered table-striped" style="width:100%;">
                <thead>
                <tr>
                  <th>Tiêu Đề</th>
                  <th>Thể Loại</th>
                  <th>Người Đăng</th>
                  <th>Ngày Đăng</th>
                  <th>Loại Tin</th>
                  <th>Tình Trạng</th>
                  <th>Hành Động</th>              
                </tr>
                </thead>
                <tbody>
                @foreach($data_post as $iteam_post)
                  <tr>
                    <td>{!! $iteam_post->title!!}</td>
                    <td>{!! $iteam_post->loaitin['name'] !!}</td>
                    <td>{!! $iteam_post->User['name'] !!}</td>
                    <td>{!! $iteam_post->created_at !!}</td>
                    <td>{!! $iteam_post->loaiuptin['name'] !!}</td>
                    <?php $status=$iteam_post->status?>
                    @if($status==0)
                    <td><span>Chưa Duyệt</span> </td>
                    @else
                    <td><span>Đã Duyệt</span> </td>
                    @endif
                    <td>
                        <button type="button"> <i class="fa fa-edit" ></i> </button>
                        <button type="button"> <i class="fa fa-eye" ></i> </button>
                        <button type="button"> <i class="fa fa-trash" ></i> </button>
                    </td>
                  </tr>
                @endforeach

 
                </tbody>
                <tfoot>
                <tr>
                    <th>Tiêu Đề</th>
                    <th>Thể Loại</th>
                    <th>Người Đăng</th>
                    <th>Ngày Đăng</th>
                    <th>Loại Tin</th>
                    <th>Tình Trạng</th>
                    <th>Hành Động</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>

@endsection