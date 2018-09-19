@extends('admin.master')
@section('content')
<script>
  $(function(){
    $('#listUser').DataTable();
  })
</script>
<section class="content-header">
      <h1>
        Danh Sách
        <small>Tài Khoản</small>
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
              <h3 class="box-title">Danh Sách Tài Khoản </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="listUser" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ Tên </th>
                  <th>Email</th>
                  <th>Số Điện Thoại</th>
                  <th>Level</th>
                  <th>Hành Động </th>
                </tr>
                </thead>
                <tbody>
                  <?php $stt=0; ?>
                @foreach($data_borker as $iteam_borker)
                  <?php $stt++; ?>
                  <tr>
                    <td>{!! $stt !!}</td>
                    <td>{!! $iteam_borker->name !!}</td>
                    <td>{!! $iteam_borker->email !!}</td>
                    @if(isset($iteam_borker->phone))
                    <td>{!! $iteam_borker->phone !!}</td>
                    @else
                    <td> None </td>
                    @endif
                    <?php $level=$iteam_borker->level?>
                    @if($level==0)
                      <td> Thành Viên </td>
                    @elseif($level==1)
                      <td> Admin </td>
                    @else
                      <td> Nhà Mô Giới </td>
                    @endif
                    <td>
                      <button type="button"  class="Modal edit" data-catalog="{!!$iteam_borker->id!!}" data-toggle="modal" data-target="#ModalUpdate" > <i class="glyphicon glyphicon-ban-circle"   data-toggle="tooltip" data-placement="top" title="Block Tài Khoản" ></i> </button>
                      <button type="button"   class="Modal eye"  data-catalog="{!!$iteam_borker->id!!}" data-toggle="modal"  data-target="#ModalUnBlock"  > <i class="fa fa-fw fa-unlock-alt" data-toggle="tooltip" data-placement="top" title="Mở Khóa Tài Khoản"   ></i> </button>
                      <button type="button"   class="Modal trash" data-catalog="{!!$iteam_borker->id!!}" data-toggle="modal"  data-target="#ModalDelete"  > <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Xóa Tài Khoản" ></i> </button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>STT</th>
                  <th>Họ Tên </th>
                  <th>Email</th>
                  <th>Số Điện Thoại</th>
                  <th>Level</th>
                  <th>Hành Động </th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix group-btn-footer">
              <a href="{{ route('admin.user.getcreate') }}" class="btn btn-success" > Thêm Mới Tài Khoản </a>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<!-- Modal Block User -->
  <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog"     aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  
  <!-- Modal Delete User  -->
  <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Xóa Tài Khoản </h4>
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
  <!-- Modal UnBlock User  -->
  <div class="modal fade" id="ModalUnBlock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Xóa Tài Khoản </h4>
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
@endsection





















