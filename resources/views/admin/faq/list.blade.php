@extends('admin.master')
@section('content')
<script>
  $(function(){
    $('#ListFaq').DataTable({
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
              <table id="ListFaq" class="table table-bordered table-striped" style="width:100%;">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tiêu Đề </th>
                  <th>Thể Loại</th>
                  <th>Ngày Tạo </th>
                  <th>Hành Động</th>              
                </tr>
                </thead>
                <tbody>
                    <?php $stt=0; ?>
                @foreach($data_faq as $iteam_faq) 
                <?php $stt++ ?>
                  <tr>
                    <td>{!! $stt !!}</td>
                    <td>{!! $iteam_faq->title !!}</td>
                    <td>{!! $iteam_faq->role !!}</td>
                    <td>{!! $iteam_faq->created_at !!}</td>
                    <td>
                    <a href="{{ route('admin.faq.edit',$iteam_faq->id)}}" class="Modal edit" data-catalog="{!!$iteam_faq->id!!}"  > <i class="fa fa-edit" ></i> </a>
                        <button type="button" class="Modal eye" > <i class="fa fa-eye"  ></i> </button>
                        <button type="button" class="Modal trash" data-catalog="{!!$iteam_faq->id!!}" data-toggle="modal"  data-target="#ModalDelete"  > <i class="fa fa-trash" ></i> </button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Tiêu Đề </th>
                    <th>Thể Loại</th>
                    <th>Ngày Tạo </th>
                    <th>Hành Động</th>     
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix group-btn-footer">
                    <a href="{{ route('admin.faq.create') }}" class="btn btn-success" > Thêm Mới Câu Hỏi </a>
             </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>

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
        <button type="button" class="btn btn-primary" id="delete_faq">Xác Nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
  $('#ListFaq tbody').on( 'click','button.trash', function(){
   //console.log('ok');   
    var id_data = $(this).attr('data-catalog');  
    //alert(id_data);
    var input = $('#id_delete').val(id_data); 
    //var input = $('#input_hidden1').val(id_data);     
});
$('#delete_faq').click(function(){ 
    var id = $('#id_delete').val();
    // alert(id);
    //alert(id);
    $.ajax({
            url: "/admin/faq/delete",
            type: 'POST',
            headers: {  
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id:id},
            success:function(data){
               // $('#exampleModal').modal('hide');
                location.reload();
                //$("#dataTables-example").ajax.reload();
            }   
        });
});
</script>
@endsection