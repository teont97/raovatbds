@extends('admin.master')
@section('content')

<section class="content-header">
      <h1>
        
        <small></small>
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
            <div class="form-group">
                @if(session('mesage'))
                   <p class="alert alert-success">
                       <span>{!! session('mesage') !!}</span>
                   </p>
               @endif   
            </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Chỉnh sửa tên xã {{ $data_edit['name'] }} </h3>
            </div>
            <form action="{{ route('admin.address.edit.postphuong',$data_edit['id']) }}" method="POST">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <!-- /.box-header -->
                <div class="box-body">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="sel1">Tỉnh</label>
                          <select class="form-control" id="id_tinh" name="sltinh">
                              <option>Chọn Tỉnh Thành </option>
                              @foreach($data_tinh as $iteam_tinh)
                                  <option value="{{ $iteam_tinh->id }}">{{ $iteam_tinh->name }}</option>
                              @endforeach
                          </select>
                      </div>   
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="sel1">Huyện </label>
                          <select class="form-control" id="huyen" name="slhuyen">
                          <option value="{{ $data_edit->huyen['id']}}">{{ $data_edit->huyen['name'] }} </option>
                          </select>
                      </div>   
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Tên Phường \ Xã</label>
                      <input type="text" class="form-control" value="{{ $data_edit['name'] }}"  name="txtphuong" > 
                      </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix group-btn-footer text-center">
                    
                        <input type="submit" class="btn btn-success"  value="Lưu Lại" >
                </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<script>
  $("#id_tinh").change(function(){
    var id_huyen = $(this).val();
      $.get("../../../ajax/huyen/"+id_huyen,function(data){
         $("#huyen").html(data)
    });
  });
</script>
@endsection





















