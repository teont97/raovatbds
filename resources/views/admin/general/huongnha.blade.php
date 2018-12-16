@extends('admin.master')
@section('content')

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
              <table id="ListHuongNha" class="table table-bordered table-striped" style="width:100%;">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Hướng </th>
                  <th>Ngày Tạo </th>
                  <th>Hành Động</th>              
                </tr>
                </thead>
                <tbody>
                    <?php $stt=0;  ?>
                        @foreach($data_huongnha as $iteam_huongnha)
                        <?php $stt++ ?>
                        <tr>
                          <td>{!! $stt !!}</td>
                          <td>{!! $iteam_huongnha->name !!}</td>
                          <td>{!! $iteam_huongnha->created_at !!}</td>
                          <td>
                                <button type="button" class="Modal edit" data-name="{!!$iteam_huongnha->name!!}" data-catalog="{!!$iteam_huongnha->id!!}" data-toggle="modal" data-target="#ModalUpdateHuongNha" > <i class="fa fa-edit" ></i> </button>
                                <button type="button" class="Modal trash" data-catalog="{!!$iteam_huongnha->id!!}" data-toggle="modal"  data-target="#ModalDelete"  > <i class="fa fa-trash" ></i> </button>
                          </td>
                        
                        </tr>
                      @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Tên Hướng </th>
                    <th>Ngày Tạo </th>
                    <th>Hành Động</th>     
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix group-btn-footer">
                <button data-toggle="modal" data-target="#ModalCreateHuongNha"  class="btn btn-success" > Thêm Mới  </button>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<!-- Modal Create Huong Nha  -->
<div class="modal fade" id="ModalCreateHuongNha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <label>Tên Hướng Nhà   </label>
                <input type="text" id="namehuongnha" class="form-control" name="namehuongnha" >
            </div>
        </div>
        <form id="formupdate" role="modal">
        <input type="hidden" name="id_status" id="id_status" value="" >
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
          <button type="button" class="btn btn-primary" id="create_huongnha">Xác Nhận</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<!-- Modal Update Status -->
<div class="modal fade" id="ModalUpdateHuongNha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <label>Tên Hướng Nhà  </label> 
              <input type="text" id="namehinhthuc1" class="form-control" name="namehinhthuc1" >
          </div>
      </div>
      <form id="formupdate" role="modal">
      <input type="hidden" name="id_huongnha_update" id="id_huongnha_update" value="" >
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
        <button type="button" class="btn btn-primary" id="update_huongnha">Xác Nhận</button>
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
        <button type="button" class="btn btn-primary" id="delete_huongnha">Xác Nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection
@section('javascript')
<script>
    $(function(){
      $('#ListHuongNha').DataTable({
       // "scrollX": true
      });
    });
  </script>
  <script>
    $('#create_huongnha').click(function(){ 
      var string = $('#namehuongnha').val();
      //var id_hinhthuc = $('#id_hinhthuc').val(); 
      $.ajax({
        url: "{{ route('admin.general.create.huongnha')  }}",
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {string:string },
        success:function(data){
            $('#ModalCreateTheLoai').modal('hide');
            location.reload();
        }   
      });
    });
      $('#ListHuongNha tbody').on( 'click','button.edit', function(){
        var name_data = $(this).attr('data-name');  
        var id_data = $(this).attr('data-catalog');  
        var input = $('#namehinhthuc1').val(name_data); 
        var input = $('#id_huongnha_update').val(id_data);    
      });
      $("#ModalUpdateHuongNha").on("show.bs.modal", function(evt) {
              var name_data = $('#namehinhthuc1').val();
              var string = ""+name_data+"" ;
              var title = "Chỉnh sửa tên hình thức: "+name_data+"" ;
              $('.modal-body #namehinhthuc1').val(string);
              $('.modal-header .modal-title').html(title);
          });
      $('#update_huongnha').click(function(){ 
        var id = $('#id_huongnha_update').val();
        var string = $('#namehinhthuc1').val();
        var mytbl = $("#Listtheloai").dataTable();
        $.ajax({
              url: "{{ route('admin.general.edit.huongnha') }}",
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
      $('#ListHuongNha tbody').on( 'click','button.trash', function(){ 
        var id_data = $(this).attr('data-catalog');  
        var input = $('#id_delete').val(id_data);  
      });
      $('#delete_huongnha').click(function(){ 
        var id = $('#id_delete').val();
        $.ajax({
          url: "{{ route('admin.general.delete.huongnha') }}",
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