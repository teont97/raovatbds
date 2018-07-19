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
        Danh Sách Bài Viết Bất Động Sản
        <small>Người Dùng</small>
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
              <h3 class="box-title">Danh Sách Bài Viết Bất Động Sản</h3>
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
                    <td><span class="text-danger">Chưa Duyệt</span> </td>
                    @else
                    <td><span class="text-success">Đã Duyệt</span> </td>
                    @endif
                    <td>
                        <button type="button" class="Modal edit" data-catalog="{!!$iteam_post->id!!}" data-toggle="modal" data-target="#ModalUpdate" > <i class="fa fa-edit" ></i> </button>
                        <button type="button" class="Modal eye" > <i class="fa fa-eye"  ></i> </button>
                        <button type="button" class="Modal trash" data-catalog="{!!$iteam_post->id!!}" data-toggle="modal"  data-target="#ModalDelete"  > <i class="fa fa-trash" ></i> </button>
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
<!-- Modal Update Status -->
<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Duyệt Bài Viết </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        ...
      </div>
      <form id="formupdate" role="modal">
      <input type="hidden" name="id_status" id="id_status" value="" >
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
        <button type="button" class="btn btn-primary" id="update">Xác Nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Delete Post  -->
<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Xóa Bài Viết </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
        
      </div>
      <form id="formDelete" role="modal">
      <input type="hidden" name="id_delete" id="id_delete" value="" >
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
        <button type="button" class="btn btn-primary" id="delete">Xác Nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
  
</script>

@endsection