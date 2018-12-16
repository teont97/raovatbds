@extends('client.master')
@section('title','Đăng bài viết mới')
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
            <div class="col-md-12">
                <div class="submit-address">
                    <form  action="{!! route('post.submitpost') !!}"  method="POST" enctype="multipart/form-data">
                        <input  type="hidden" name="_token" value="{!!csrf_token() !!}">
                        <div class="main-title-2">
                            <h1><span>Thông Tin Cơ Bản</span></h1>
                        </div>
                        <div class="search-contents-sidebar mb-30">
                            <div class="form-group">
                                <label>Tiêu Đề (<span class="red">*</span>)</label>
                                <input type="text" class="input-text" id="txttitle" name="txttitle"  placeholder="Vui Lòng Nhập Vào Tiêu Đề ">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Hình Thức (<span class="red">*</span>)</label>
                                        <select class="selectpicker search-fields"  id="hinhthuc" name="slhinhthuc" data-live-search="true" data-live-search-placeholder="Search value">
                                            <option>Chọn Hình Thức</option>
                                            @foreach($data_hinhthuc as $iteam_hinhthuc)
                                            <option value="{!! $iteam_hinhthuc->id !!}">{!! $iteam_hinhthuc->name !!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group" >
                                        <label>Loại (<span class="red">*</span>)</label>
                                        <select class="selectpicker search-fields"  id="loaitin" name="slloaitin" data-live-search="true" data-live-search-placeholder="Search value" >
                                            <option>Thể Loại </option>
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
                                        <input type="text" class="input-text" id="txtgia" name="txtgia" >
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group" >
                                        <label>Đơn Vị  (<span class="red">*</span>)</label>
                                        <select class="selectpicker search-fields"  id="unit" name="slunit" data-live-search="true" data-live-search-placeholder="Search value" >
                                            
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
                                        <input type="text" class="input-text" id="dientich" name="txtdientich">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>Phòng Ngủ(<span class="red">*</span>) </label>
                                        <input type="text" class="input-text" id"txtphongngu" name="txtphongngu">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Hình Ảnh Và Video(<span class="red">*</span>)</span></h1>
                        </div>
                        <div id="myDropZone" class="dropzone dropzone-design mb-50" name="myDropzone" >
                            <div class="dz-default dz-message"><span>Click để tải ảnh kích cỡ ảnh 750 x 500 </span></div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Vị Trí</span></h1>
                        </div>
                        <div class="row mb-30 ">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Địa Chỉ(<span class="red">*</span>)</label>
                                    <input type="text" class="input-text" id="diachi" name="txtdiachi" >
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Tỉnh/Thành Phố(<span class="red">*</span>)</label>
                                    <select class="selectpicker search-fields" id="submittinh" name="sltinh" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Tỉnh/Thành Phố</option>
                                        @foreach($data_tinh as $iteam_tinh)
                                        <option value="{!! $iteam_tinh->id !!}">{!! $iteam_tinh->name !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Quận/Huyện(<span class="red">*</span>)</label>
                                    <select class="selectpicker search-fields" id="submithuyen" name="slhuyen" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Quận/Huyện</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Phường/Xã(<span class="red">*</span>)</label>
                                    <select class="selectpicker search-fields" id="submitphuong"name="slphuong" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Phường/Xã</option>
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
                                    <textarea class="input-text" rows="10"  name="message"  id="editor"></textarea>
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
                                        @foreach($data_huong as $iteam_huong)
                                            <option value="{!! $iteam_huong->id !!}">{!! $iteam_huong->name !!} </option>
                                        @endforeach
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
                                <div class="form-group">
                                    <label>Họ Và Tên(<span class="red">*</span>)</label>
                                    <input type="text" class="input-text"  id="txtname" name="txtname">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Email(<span class="red">*</span>)</label>
                                    <input type="email" class="input-text" id="txtemail" name="txtemail" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Số Điện Thoại(<span class="red">*</span>)</label>
                                    <input type="text" class="input-text" id="txtphone" name="txtphone"  >
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
                                        @foreach($data_uptin as $iteam_uptin)
                                            <option value="{!! $iteam_uptin->id !!}">{!! $iteam_uptin->name !!} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Ngày Bắt Đầu(<span class="red">*</span>) </label>
                                    <input type="text" class="input-text datepicker" id="dateStart" name="dateStart" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>Ngày Kết Thúc(<span class="red">*</span>) </label>
                                    <input type="text" class="input-text datepicker" id="dateEnd" name="dateEnd"  >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn button-md button-theme" id="submit" type="submit">Đăng Tin </button>
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
@endsection