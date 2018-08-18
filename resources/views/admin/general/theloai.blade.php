@extends('admin.master')
@section('content')
<script>
  $(function(){
    $('#Listtheloai').DataTable({
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
              <table id="Listtheloai" class="table table-bordered table-striped" style="width:100%;">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Thể Loại</th>
                  <th>Tên Hình Thức </th>
                  <th>Hành Động</th>              
                </tr>
                </thead>
                <tbody>
                    <?php $stt=0 ?>
                        @foreach($data_theloai as $iteam_theloai)
                        <?php $stt++ ?>
                        <tr>
                          <td>{!! $stt !!}</td>
                          <td>{!! $iteam_theloai->name !!}</td>
                          <td>{!! $iteam_theloai->hinhthuc['name'] !!}</td>
                          <td>
                                <button type="button" class="Modal edit" data-name="{!!$iteam_theloai->name!!}" data-catalog="{!!$iteam_theloai->id!!}" data-toggle="modal" data-target="#ModalUpdateTheLoai" > <i class="fa fa-edit" ></i> </button>
                                <button type="button" class="Modal trash" data-catalog="{!!$iteam_theloai->id!!}" data-toggle="modal"  data-target="#ModalDelete"  > <i class="fa fa-trash" ></i> </button>
                          </td>
                        </tr>
                      @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Tên Thể Loại</th>
                    <th>Tên Hình Thức </th>
                    <th>Hành Động</th>    
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix group-btn-footer">
                <button class="btn btn-success" data-toggle="modal" data-target="#ModalCreateTheLoai"  > Thêm Mới  </button>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<!-- Modal Update Status -->
<div class="modal fade" id="ModalCreateTheLoai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Thêm Mới Thể Loại </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formupdate" role="modal">
      <div class="modal-body">
          <div class="form-group">
              <label>Hình Thức</label>
              <select class="form-control" id ="id_hinhthuc">
                  <option >Chọn Hình Thức </option> 
                  @foreach($data_hinhthuc as $iteam_hinhthuc)
                  <option value="{{ $iteam_hinhthuc->id }}"> {{ $iteam_hinhthuc->name }}</option>
                 @endforeach
              </select>
          </div>
          <div class="form-group">
              <label>Tên Thể Loại  </label>
              <input type="text" id="nametheloai" class="form-control" name="nametheloai" >
          </div>
      </div>
     
      <input type="hidden" name="theloai_update" id="theloai_update" value="" >
      <input type="hidden" name="id_theloai_update" id="id_theloai_update" value="" >
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
        <button type="button" class="btn btn-primary" id="create_theloai">Xác Nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Update Status -->
<div class="modal fade" id="ModalUpdateTheLoai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Duyệt Bài Viết </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formupdate" role="modal">
      <div class="modal-body">
          <div class="form-group">
              <label>Tên Hình Thức  </label>
              <input type="text" id="namehinhthuc1" class="form-control" name="namehinhthuc1" >
            </div>
      </div>
     
      <input type="hidden" name="theloai_update" id="theloai_update" value="" >
      <input type="hidden" name="id_theloai_update" id="id_theloai_update" value="" >
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
        <button type="button" class="btn btn-primary" id="update_theloai">Xác Nhận</button>
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
        <button type="button" class="btn btn-primary" id="delete_theloai">Xác Nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
    $('#create_theloai').click(function(){ 
          var string = $('#nametheloai').val();
          var id_hinhthuc = $('#id_hinhthuc').val(); 
          $.ajax({
                url: "/admin/general/post-create-theloai",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {string:string ,id_hinhthuc:id_hinhthuc},
                success:function(data){
                    $('#ModalCreateTheLoai').modal('hide');
                    location.reload();
                }   
          });
    });
    $('#Listtheloai tbody').on( 'click','button.edit', function(){
      var name_data = $(this).attr('data-name');  
      var id_data = $(this).attr('data-catalog');  
      var input = $('#namehinhthuc1').val(name_data); 
      var input = $('#id_theloai_update').val(id_data);    
    });
    $("#ModalUpdateTheLoai").on("show.bs.modal", function(evt) {
            var name_data = $('#namehinhthuc1').val();
            var string = ""+name_data+"" ;
            var title = "Chỉnh sửa tên hình thức: "+name_data+"" ;
            $('.modal-body #namehinhthuc1').val(string);
            $('.modal-header .modal-title').html(title);
        });
    $('#update_theloai').click(function(){ 
          var id = $('#id_theloai_update').val();
          var string = $('#namehinhthuc1').val();
          var mytbl = $("#Listtheloai").dataTable();
          $.ajax({
                url: "/admin/general/post-edit-theloai",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id:id , string:string },
                success:function(data){
                    $('#ModalUpdateTheLoai').modal('hide');
                    location.reload();
                }   
          });
    });
    $('#Listtheloai tbody').on( 'click','button.trash', function(){ 
      var id_data = $(this).attr('data-catalog');  
      var input = $('#id_delete').val(id_data);  
    });
    $('#delete_theloai').click(function(){ 
        var id = $('#id_delete').val();
        $.ajax({
          url: "/admin/general/post-delete-theloai",
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