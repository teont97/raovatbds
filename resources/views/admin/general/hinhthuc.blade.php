@extends('admin.master')
@section('content')
<script>
  $(function(){
    $('#Listhinhthuc').DataTable({
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
              <table id="Listhinhthuc" class="table table-bordered table-striped" style="width:100%;">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Hình Thức </th>
                  <th>Ngày Khởi Tạo </th>
                  <th>Hành Động</th>              
                </tr>
                </thead>
                <tbody>
                    <?php  $stt=0; ?>
                        @foreach($data_hinhthuc as $iteam_hinhthuc)
                        <?php $stt++ ?>
                        <tr>
                          <td>{!! $stt !!}</td>
                          <td>{!! $iteam_hinhthuc->name !!}</td>
                          <td>{!! $iteam_hinhthuc->created_at !!}</td>
                          <td>
                                <button type="button" class="Modal edit" data-catalog="{!!$iteam_hinhthuc->id!!}" data-toggle="modal" data-target="#ModalUpdate" > <i class="fa fa-edit" ></i> </button>
                                <button type="button" class="Modal trash" data-catalog="{!!$iteam_hinhthuc->id!!}" data-toggle="modal"  data-target="#ModalDelete"  > <i class="fa fa-trash" ></i> </button>
                          </td>
                        
                        </tr>
                      @endforeach
                </tbody>
                <tfoot>
                <tr>
                        <th>STT</th>
                        <th>Tên Hình Thức </th>
                        <th>Ngày Khởi Tạo </th>
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