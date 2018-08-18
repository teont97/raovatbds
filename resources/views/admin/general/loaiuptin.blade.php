@extends('admin.master')
@section('content')
<script>
  $(function(){
    $('#ListUptin').DataTable({
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
              <table id="ListUptin" class="table table-bordered table-striped" style="width:100%;">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Loại Tin </th>
                  <th>Giá Tiền </th>
                  <th>Hành Động</th>              
                </tr>
                </thead>
                <tbody>
                    <?php $stt=0; ?>
                        @foreach($data_uptin as $iteam_uptin)
                        <?php $stt++ ?>
                        <tr>
                            <td>{!! $stt!!}</td>
                          <td>{!! $iteam_uptin->name!!}</td>
                          <td>{!! $iteam_uptin->value !!}</td>
                          <td>
                            <button type="button" class="Modal edit"  data-name="{!!$iteam_uptin->name!!}" data-value="{!!$iteam_uptin->value!!}"  data-catalog="{!!$iteam_uptin->id!!}" data-toggle="modal" data-target="#ModalUpdateUptin" > <i class="fa fa-edit" ></i> </button>
                            <button type="button" class="Modal trash" data-catalog="{!!$iteam_uptin->id!!}" data-toggle="modal"  data-target="#ModalDelete"  > <i class="fa fa-trash" ></i> </button>
                          </td>
                        </tr>
                      @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Tên Loại Tin </th>
                    <th>Giá Tiền </th>
                    <th>Hành Động</th> 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix group-btn-footer">
                <button  data-toggle="modal"  data-target="#ModalCreateUpTin"   class="btn btn-success" > Thêm Mới  </button>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<!-- Modal Create Loai Up Tin -->
<div class="modal fade" id="ModalCreateUpTin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Thêm Gói Đăng Bài</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Tên Loại Tin </label>
                <input type="text" id="LoaiUptin_create" class="form-control" name="LoaiUptin_create" >
            </div>
            <div class="form-group">
                <label>Giá Trị Của Tin  </label>
                <input type="text" id="Value_create" class="form-control" name="Value_create" >
            </div>
        </div>
        <form id="formupdate" role="modal">
        <input type="hidden" name="id_status" id="id_status" value="" >
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
          <button type="button" class="btn btn-primary" id="create_uptin">Xác Nhận</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
<!-- Modal Update Status -->
<div class="modal fade" id="ModalUpdateUptin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Duyệt Bài Viết </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label>Tên Loại Tin </label>
              <input type="text" id="LoaiUptinUpdate" class="form-control" name="LoaiUptinUpdate" >
          </div>
          <div class="form-group">
              <label>Giá Trị Của Tin  </label>
              <input type="text" id="Value" class="form-control" name="Value" >
          </div>
      </div>
      <input type="hidden" name="id_update_loaiuptin" id="id_update_loaiuptin" value="" >
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
        <button type="button" class="btn btn-primary" id="update_loaiuptin">Xác Nhận</button>
      </div>
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
        <button type="button" class="btn btn-primary" id="delete_uptin">Xác Nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
    $('#create_uptin').click(function(){ 
          var string = $('#LoaiUptin_create').val();
          var value = $('#Value_create').val();
          //var id_hinhthuc = $('#id_hinhthuc').val(); 
          $.ajax({
                url: "/admin/general/post-create-uptin",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {string:string , value:value},
                success:function(data){
                    $('#ModalCreateTheLoai').modal('hide');
                    location.reload();
                }   
          });
    });
    $('#ListUptin tbody').on( 'click','button.edit', function(){
      var name_data = $(this).attr('data-name');  
      var id_data = $(this).attr('data-catalog'); 
      var value = $(this).attr('data-value');  
      var input = $('#LoaiUptinUpdate').val(name_data); 
      var input = $('#id_update_loaiuptin').val(id_data);    
      var input = $('#Value').val(value);    
    });
    $("#ModalUpdateUptin").on("show.bs.modal", function(evt) {
            var name_data = $('#LoaiUptinUpdate').val();
            var value_data = $('#Value').val();
            var string = ""+name_data+"" ;
            var title = "Chỉnh sửa tên hình thức: "+name_data+"" ;
            $('.modal-body #LoaiUptinUpdate').val(string);
            $('.modal-body #Value').val(value_data);
            $('.modal-header .modal-title').html(title);
        });
    $('#update_loaiuptin').click(function(){ 
          var id = $('#id_update_loaiuptin').val();
          var string = $('#LoaiUptinUpdate').val();
          var value = $('#Value').val();
          $.ajax({
                url: "/admin/general/post-edit-uptin",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id:id , string:string ,value:value},
                success:function(data){
                    $('#ModalUpdateUptin').modal('hide');
                    location.reload();
                }   
          });
    });
    $('#ListUptin tbody').on( 'click','button.trash', function(){ 
      var id_data = $(this).attr('data-catalog');  
      var input = $('#id_delete').val(id_data);  
    });
    $('#delete_uptin').click(function(){ 
        var id = $('#id_delete').val();
        $.ajax({
          url: "/admin/general/post-delete-uptin",
          type: 'POST',
          headers: {  
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {id:id},
          success:function(data){
            location.reload();
          }   
        });
    });
  </script>
@endsection