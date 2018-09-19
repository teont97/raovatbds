@extends('client.master')
@section('title','Chỉnh Sửa Bài Viết')
@section('content')
<style>
    .ck-editor__editable_inline{
     min-height: 250px;
 }
</style>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Đăng tin bất động sản </h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('gethome')}}">Trang Chủ </a></li>
                    <li class="active">Đăng tin bất động sản</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->
<!-- Submit Property start -->
<div class="content-area-7 submit-property">
    <div class="container">
            @if (count($errors) > 0 )
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="h5">{!!$error!!}</li>
                                @endforeach
                            </ul>
                        </div>
                     </div>
                </div>
             @endif    
            @include('client.block.account') 
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="submit-address">
                    <div class="main-title">
                        <h1><span>CẬP NHẬT TIN RAO BÁN, CHO THUÊ NHÀ ĐẤT</span> </h1>
                    </div>
                    <form  id="my-form-edit" action="{!! route('personal.edit.post.mypost',$EditMyPost['id']) !!}"  method="POST" enctype="multipart/form-data">
                        <input  type="hidden" name="_token" value="{!!csrf_token() !!}">
                        <input  type="hidden" id="id_mypost" name="id_mypost" value="{!! $EditMyPost['id'] !!}">
                        <div class="main-title-2">
                            <h1><span>Thông Tin Cơ Bản</span></h1>
                        </div>
                        <div class="search-contents-sidebar mb-30">
                            <div class="form-group">
                                <label>Tiêu Đề (<span class="red">*</span>)</label>
                            <input type="text" class="input-text" id="txttitle" name="txttitle" value="{{ $EditMyPost['title'] }}"  placeholder="Vui Lòng Nhập Vào Tiêu Đề ">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Hình Thức (<span class="red">*</span>)</label>
                                        <select class="selectpicker search-fields"  id="hinhthuc" name="slhinhthuc" data-live-search="true" data-live-search-placeholder="Search value" >
                                            <option value="{{ $EditMyPost['id_hinhthuc'] }}">{{ $EditMyPost->hinhthuc['name'] }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group" >
                                        <label>Loại (<span class="red">*</span>)</label>
                                        <select class="selectpicker search-fields"  id="loaitin" name="slloaitin" data-live-search="true" data-live-search-placeholder="Search value" >
                                            <option value="{{ $EditMyPost['id_theloai'] }}">{{ $EditMyPost->loaitin['name'] }}</option>
                                        {{-- @foreach($data_theloai as $iteam_theloai)
                                            <option value="{!! $iteam_theloai->id !!}">{!! $iteam_theloai->name !!}</option>
                                        @endforeach
                                        --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>Giá(<span class="red">*</span>)</label>
                                        <input type="text" class="input-text" value="{{ $EditMyPost['price'] }}" id="txtgia" name="txtgia" >
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group" >
                                        <label>Đơn Vị  (<span class="red">*</span>)</label>
                                        <select class="selectpicker search-fields"  id="unit" name="slunit" data-live-search="true" data-live-search-placeholder="Search value" >
                                            <option value="{{ $EditMyPost['id_unit'] }}">{{ $EditMyPost->unit['name'] }}</option>
                                        {{-- @foreach($data_theloai as $iteam_theloai)
                                            <option value="{!! $iteam_theloai->id !!}">{!! $iteam_theloai->name !!}</option>
                                        @endforeach
                                        --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>Diện Tích(<span class="red">*</span>)</label>
                                        <input type="text" class="input-text" value="{{ $EditMyPost['area'] }}" id="dientich" name="txtdientich">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>Phòng Ngủ(<span class="red">*</span>) </label>
                                        <input type="text" class="input-text" value="{{ $EditMyPost['room'] }}"  id"txtphongngu" name="txtphongngu">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Hình Ảnh Và Video(<span class="red">*</span>)</span></h1>
                        </div>
                        <div id="myDropZoneEditMyPost" class="dropzone dropzone-design mb-50" name="myDropZoneEditMyPost" >
                            <div class="dz-default dz-message"><span>Click để tải ảnh kích cỡ ảnh 750 x 500 </span></div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Vị Trí</span></h1>
                        </div>
                        <div class="row mb-30 ">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Địa Chỉ(<span class="red">*</span>)</label>
                                    <input type="text" class="input-text" value="{{ $EditMyPost['address'] }}"  id="diachi" name="txtdiachi" >
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Tỉnh/Thành Phố(<span class="red">*</span>)</label>
                                    <select class="selectpicker search-fields" id="submittinh" name="sltinh" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option value="{{ $EditMyPost['id_tinh'] }}"> {{ $EditMyPost->tinh['name'] }} </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Quận/Huyện(<span class="red">*</span>)</label>
                                    <select class="selectpicker search-fields" id="submithuyen" name="slhuyen" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option value="{{$EditMyPost['id_huyen'] }}">{{ $EditMyPost->huyen['name'] }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Phường/Xã(<span class="red">*</span>)</label>
                                    <select class="selectpicker search-fields" id="submitphuong"name="slphuong" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option value="{{$EditMyPost['id_duong'] }}">{{ $EditMyPost->phuong['name'] }}</option>
                                    </select>
                                </div>
                            </div>      
                        </div>

                        <div class="main-title-2">
                            <h1><span>Mô Tả Chi Tiết(<span class="red">*</span>) </span> </h1>
                        </div>

                        <div class="row mb-30">
                            <div class="col-md-12">
                                <div class="form-group">   
                                    <textarea class="input-text" rows="10"  name="message"  id="editor">{{ $EditMyPost['description'] }} </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="main-title-2">
                            <h1><span>Thông Tin Khác</span></h1>
                        </div>
                        <div class="row mb-30 ">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Mặt Tiền</label>
                                    <input type="text" class="input-text"  name="txtmattien" >
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Đường Vào (m)</label>
                                    <input type="text" class="input-text" name="txtduongvao">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Hướng Nhà</label>
                                    <select class="selectpicker search-fields"  name="slhuong" data-live-search="true" data-live-search-placeholder="Search value">
                                            <option>Không Xác Định </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Số Tầng </label>
                                    <input type="text" class="input-text" name="txtsotang">
                                </div>
                            </div> 
                            <div class="col-md-12">
                                <div class="form-group">   
                                    <label>Nội Thất</label>
                                    <textarea class="input-text" name="textnoithat" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="main-title-2">
                            <h1><span>Thông Tin Liên Hệ </span> </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                 <?php    $lienhe=$EditMyPost->lienhe->first(); ?>
                                <div class="form-group">
                                    <label>Họ Và Tên(<span class="red">*</span>)</label>
                                    <input type="text" class="input-text" value="{{ $lienhe['hoten'] }}" id="txtname" name="txtname">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Email(<span class="red">*</span>)</label>
                                    <input type="email" class="input-text" value="{{ $lienhe['email'] }}" id="txtemail" name="txtemail" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Số Điện Thoại(<span class="red">*</span>)</label>
                                    <input type="text" class="input-text" value="{{ $lienhe['sodienthoai'] }}" id="txtphone" name="txtphone"  >
                                </div>
                            </div>
                        </div>
                        <div class="main-title-2">
                            <h1><span>Lịch Đăng Tin  </span> </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Loai Tin Đăng (<span class="red">*</span>)</label>
                                    <select class="selectpicker search-fields"  id="sluptin" name="sluptin" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option value="{{$EditMyPost['id_uptin']}}"> {{ $EditMyPost->loaiuptin['name'] }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Ngày Bắt Đầu(<span class="red">*</span>) </label>
                                <input type="text" class="input-text datepicker" value="{{ $EditMyPost['date_start']}}"  disabled="true" name="dateStart" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Ngày Kết Thúc(<span class="red">*</span>) </label>
                                    <input type="text" class="input-text datepicker" value="{{ $EditMyPost['date_end']}}" disabled="true" name="dateEnd"  >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input class="btn button-md button-theme" id="submit-edit" type="submit" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('client.block.brands')

@endsection
@section('javascript')
<script>

    var theEditor;
    ClassicEditor
    .create( document.querySelector( '#editor' ),{
        ckfinder: {
			// eslint-disable-next-line max-len
            uploadUrl: '/public/admin/bower_components/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
		}
    } )
    .then( editor => {
        theEditor=editor;
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
<script>
$( "#submit-edit" ).click(function() {
  $( "#my-form-edit" ).submit();
});</script>
<script>
        var id_post=$("#id_mypost" ).val()
     // edit my post with dropzone 
     var myDropZone = new Dropzone("#myDropZoneEditMyPost",{
         
        url: '/personal/post-edit-my-post/'+id_post,
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        autoProcessQueue: false,
        uploadMultiple:true,
        parallelUploads: 16,
        maxFilesize: 8,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        dictFileTooBig: 'Image is bigger than 5MB',
        addRemoveLinks: true,
        previewsContaniner : null,
        hiddenInputContainer: "body",
        removedfile: function(file) {
            var name = file.name;    
            $.ajax({
                type: 'POST',
                url: '../../personal/delete-images-dropzone',
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: "id="+name,
                dataType: 'html',
                success: function(data) {
                        //$("#msg").html(data);
                        console.log('ok');

                }
            });
            var _ref;
            if (file.previewElement) {
            if ((_ref = file.previewElement) != null) {
            _ref.parentNode.removeChild(file.previewElement);
            }
            }
            return this._updateMaxFilesReachedClass();
            },
        init: function(){
            var myDropzone = this; // Makes sure that 'this' is understood inside the functions below.
            // for Dropzone to process the queue (instead of default form behavior):
            var id_post=$("#id_mypost" ).val();
            $.get("../../personal/get-images/"+id_post, function(data){
            $.each(data, function (key, value) {
            var file = {name: value.id, size: 50000};
            myDropzone.options.addedfile.call(myDropzone, file);
            myDropzone.options.thumbnail.call(myDropzone, file, value.url);
            });
            });
   
            document.getElementById("submit-edit").addEventListener("click", function(e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
                
            });
            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.append("id",jQuery("#id_mypost").val());
                formData.append("txttitle",jQuery("#txttitle").val());
                formData.append("slhinhthuc",jQuery("#hinhthuc") .val());
                formData.append("slloaitin",jQuery("#loaitin") .val());
                formData.append("txtgia",jQuery("#txtgia").val());
                formData.append("txtdientich",jQuery("#dientich") .val());
                formData.append("txtphongngu",jQuery("#txtphongngu") .val());
                formData.append("txtphongtam" ,jQuery("#phongtam").val());
                formData.append("txtdiachi" ,jQuery("#diachi").val());
                formData.append("sltinh" ,jQuery("#submittinh").val());
                formData.append("slhuyen" ,jQuery("#submithuyen").val());
                formData.append("slphuong" ,jQuery("#submitphuong").val());
                formData.append("slunit" ,jQuery("#unit").val());
               // console.log(jQuery("#unit").val());
                formData.append("message" ,theEditor.getData());
                formData.append("txtname" ,jQuery("#txtname").val());
                formData.append("txtemail" ,jQuery("#txtemail").val());
                formData.append("txtphone" ,jQuery("#txtphone").val());
                formData.append("sluptin" ,jQuery("#sluptin").val());
                formData.append("dateEnd" ,jQuery("#dateEnd").val());
                formData.append("dateStart" ,jQuery("#dateStart").val());
                console.log(jQuery("#dateEnd").val());
                console.log(jQuery("#dateStart").val());
            });
            this.on("successmultiple", function(files, response) {
                //myDropzone.options.autoProcessQueue = true; 
                //hat.processQueue();
               //location.href ="/personal/my-post";
              });
            this.on("errormultiple", function(files, response, errors) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
                //location.reload();
                //alert(files);
                alert('bạn nhập còn thiếu dữ liệu , vui lòng nhập lại đầy đủ thông tin ');
                });
             }
         });</script>
@endsection