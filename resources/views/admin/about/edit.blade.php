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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="padding-left:10px;">Chỉnh sửa nội dung</h3>
            </div>
            <form action="{{ route('admin.about.postedit',$data_edit['id']) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Upload Hình Ảnh </label>
                            <input type="file" class="upload" name="fileupload2" title="{{ $data_edit['images'] }}"  value="{{ $data_edit['images'] }}"> 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mô Tả Chi Tiết  </label>
                            <textarea  class="form-control"  name="txtdescript"  style="height:250px;"> {{ $data_edit['content'] }} </textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix group-btn-footer text-center">
                    
                        <input type="submit" class="btn btn-success"  value="Cập Nhật " >

                </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


@endsection





















