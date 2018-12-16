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
                          <td class="tdhinhthuc">{!! $iteam_hinhthuc->name !!}</td>
                          <td>{!! $iteam_hinhthuc->created_at !!}</td>
                          <td>
                                <button type="button" class="Modal edit" data-id="{!!$iteam_hinhthuc->id!!}" data-catalog="{!!$iteam_hinhthuc->name!!}" data-toggle="modal" data-target="#ModalUpdateHinhThuc" > <i class="fa fa-edit" ></i> </button>
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
            <div class="box-footer clearfix group-btn-footer">
                <button data-toggle="modal" data-target="#ModalCreateHinhThuc" class="btn btn-success" value="" > Thêm Mới  </button>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
<!-- Modal Create  -->
<div class="modal fade" id="ModalCreateHinhThuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel"> Thêm Mới Hình Thức</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formupdate" role="modal">
          <div class="modal-body">
            <div class="form-group">
              <label>Tên Hình Thức  </label>
              <input type="text" id="namehinhthuc" class="form-control" name="namehinhthuc" >
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
            <button type="button" class="btn btn-primary" id="create_hinhthuc">Xác Nhận</button>
          </div>
          </form>
          </div>
    </div>
  </div>
  
<!-- Modal Update Status -->
<div class="modal fade" id="ModalUpdateHinhThuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"></h4>
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
        
        <input type="hidden" name="name_update" id="name_update" value="" >
        <input type="hidden" name="id_update" id="id_update" value="" >
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
          <button type="button" class="btn btn-primary" id="update_hinhthuc">Xác Nhận</button>
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
        <button type="button" class="btn btn-primary" id="delete_hinhthuc">Xác Nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection
@section('javascript')
<script>
    $(function(){
      $('#Listhinhthuc').DataTable({
       // "scrollX": true
      });
    });
</script>
<script>
    $('#create_hinhthuc').click(function(){ 
      var string = $('#namehinhthuc').val();
      $.ajax({
        url: "{{ route('admin.general.create.hinhthuc') }}",
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {string:string },
        success:function(data){
            $('#ModalCreateHinhThuc').modal('hide');
            location.reload();
        }   
      });
    });
    $('#Listhinhthuc tbody').on( 'click','button.edit', function(){
      var name_data = $(this).attr('data-catalog');  
      var id_data = $(this).attr('data-id');  
      var input = $('#name_update').val(name_data); 
      var input = $('#id_update').val(id_data);    
    });
    $("#ModalUpdateHinhThuc").on("show.bs.modal", function(evt) {
            var name_data = $('#name_update').val();
            var string = ""+name_data+"" ;
            var title = "Chỉnh sửa tên hình thức: "+name_data+"" ;
            $('.modal-body #namehinhthuc1').val(string);
            $('.modal-header .modal-title').html(title);
        });
    $('#update_hinhthuc').click(function(){ 
          var id = $('#id_update').val();
          var string = $('#namehinhthuc1').val();
          var mytbl = $("#Listhinhthuc").dataTable();
          $.ajax({
                url: "{{ route('admin.general.edit.hinhthuc') }}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id:id , string:string },
                success:function(data){
                    $('#ModalUpdateHinhThuc').modal('hide');
                    location.reload();
                }   
          });
    });
    $('#Listhinhthuc tbody').on( 'click','button.trash', function(){ 
      var id_data = $(this).attr('data-catalog');  
      var input = $('#id_delete').val(id_data);  
    });
    $('#delete_hinhthuc').click(function(){ 
        var id = $('#id_delete').val();
        $.ajax({
          url: "{{ route('admin.general.delete.hinhthuc') }}",
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