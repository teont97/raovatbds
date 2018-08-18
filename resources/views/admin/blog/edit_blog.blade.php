@extends('admin.master')
@section('content')
<style>
    .ck-editor__editable_inline{
        min-height: 400px;
    }
    .margin{
        margin: 0px 10px 0px 10px;
    }
</style>
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
              <h3 class="box-title">Chỉnh Sửa Bài Viết : <b> {{  $data_edit['title']}}  </b> </h3>
            </div>
            <form action="{{ route('admin.blog.edit.postBlog',$data_edit['id']) }}" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Tiêu Đề </label>
                        <input type="text" class="form-control" value="{{ $data_edit['title'] }}"  name="txttieude" >
                        </div>

                        <div class="form-group">
                            <label>Nội Dung </label>
                            <textarea  class="form-control" id="editor" name="content" > {!! $data_edit['content']!!} </textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                             <label>Tóm Tắt </label>
                            <textarea  class="form-control"  name="short"  style="height:100px;">{!!  $data_edit['tomtat'] !!}  </textarea>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Danh Mục</label>
                            <select class="form-control" id="parent" name="slparent">
                            <option value="{{ $data_edit->id_parent }}">{{ $data_edit->parent_type['name']}}</option>
                              @foreach($data_parent as $iteam_parent)
                                 <option value="{{ $iteam_parent->id }}">{{ $iteam_parent->name }}</option>
                              @endforeach
                            </select>
                          </div>
                  
                          <div class="form-group">
                            <label for="sel1">Thể Loại</label>
                            <select class="form-control" id="typeblog"  name="sltypeblog">
                                <option value="{{ $data_edit->id_type }}">{{ $data_edit->typeblog['name']}}</option>
                            </select>
                          </div>
                        <div class="form-group">
                            <label>Địa Chỉ </label>
                        <input type="text" class="form-control" value="{{ $data_edit['address']}}"  name="txtaddress" >
                        </div>
                        <div class="form-group">
                            <label>Chủ Đầu Tư</label>
                            <input type="text" class="form-control" value="{{ $data_edit['host']}}"  name="txthost" >
                        </div>
                        <div class="form-group">
                            <label>Ảnh Đại Diện </label>
                            <input type="file" class="upload" value="{{ $data_edit['images']}}" name="fileupload2">
                        </div>
                        <div class="form-group">
                                <label>Từ Khóa</label>
                        <input type="text" class="form-control" value="{{ $data_edit->tagList}}" name="txtkeyword" >
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix group-btn-footer text-center">
                    
                        <input type="submit" class="btn btn-success margin"  value="Đăng Bài" >
                        <input type="submit" class="btn btn-success margin"  value="Resset" >

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
    ClassicEditor
    .create( document.querySelector( '#editor' ),{
        ckfinder: {
			// eslint-disable-next-line max-len
            uploadUrl: '/public/admin/bower_components/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
		}
    } )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
<script>
        $("#parent").change(function(){
    var id_parent = $(this).val();
        $.get("../../ajax/theloai/"+id_parent,function(data){
            $("#typeblog").html(data)
        });
    });
</script>
@endsection





















