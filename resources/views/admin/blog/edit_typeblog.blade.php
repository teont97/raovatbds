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
              <h3 class="box-title">Chỉnh Sửa Thể Loại  </h3>
            </div>
            <form action="{{ route('admin.blog.edit.postTypeBlog',$data_edit['id']) }}" method="POST">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên Thể Loại </label>
                            <input type="text" class="form-control" value="{{ $data_edit['name']}}"  name="txtname" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hình Thức</label>
                            <select class="form-control" name ="slparent">
                            <option value="{{ $data_edit->id_parent }}" >{{ $data_edit->parent_type['name']}} </option>
                                @foreach($data_parent as $iteam_parent)
                                    <option value="{{ $iteam_parent->id }}"> {{ $iteam_parent->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mô Tả Chi Tiết  </label>
                            <textarea  class="form-control"  name="txtdescript" > {{ $data_edit['description']}} </textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix group-btn-footer text-center">
                    
                        <input type="submit" class="btn btn-success"  value="Lưu Mới " >

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





















