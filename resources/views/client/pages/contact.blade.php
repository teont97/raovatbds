@extends('client.master')
@section('title','Liên hệ')
@section('content')
<!-- Sub banner start -->
<style>
       .ck-editor__editable_inline{
        min-height: 200px;
    }
</style>
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Liên Hệ </h1>
                <ul class="breadcrumbs">
                    <li><a href="{{ route('gethome')}}">Trang chủ </a></li>
                    <li class="active">Liên Hệ </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Contact body start -->
<div class="contact-1 content-area-7">
    <div class="container">			
		@if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!! Session::get('flash_messages') !!}
            </div>
        @endif
        <div class="main-title">
            <h1>Liên Hệ Chúng Tôi</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <!-- Contact form start -->
                <div class="contact-form">
                    <form id="contact_form" action="{{{route('PostContact')}}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group fullname">
                                    <input type="text" name="full-name" class="input-text" placeholder="Họ Tên">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group enter-email">
                                    <input type="email" name="email" class="input-text" placeholder="Địa Chỉ Email" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="input-text" placeholder="Tiêu Đề">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="input-text" placeholder="Số Điện Thoại">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group message">
                                    <textarea class="input-text"  id="messagecontact" name="message" placeholder="Tin Nhắn"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group send-btn mb-0">
                                    <button type="submit" class="button-md button-theme">Gửi Đi</button>
                                </div>
                            </div>
                        </div>
                    </form>     
                </div>
                <!-- Contact form end -->
            </div>
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
                <!-- Contact details start -->
                <div class="contact-details">
                    <div class="main-title-2">
                        <h3>Thông Tin </h3>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h4>Địa Chỉ </h4>
                            <p>179/1 Ngô Đến - Nha Trang</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4>Số Điện Thoại</h4>
                            <p>
                                <a href="tel:0477-0477-8556-552">Fax: 0167 9700 665 </a>
                            </p>
                            <p>
                                <a href="tel:+55-417-634-7071">Mobile: 0898 382 090</a>
                            </p>
                        </div>
                    </div>
                    <div class="media mb-0">
                        <div class="media-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h4>Địa Chỉ Email </h4>
                            <p>
                                <a href="mailto:info@themevessel.com">nghiduongbatdongsan@gmail.com</a>
                            </p>
                            <p>
                                <a href="http://themevessel.com" target="_blank">dautubds79.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Contact details end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact body end -->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.68738903996!2d109.17603141410952!3d12.269421791319239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31705d5d7fe24925%3A0x511e0f54d312ca56!2zMTc5IE5nw7QgxJDhur9uLCBOZ-G7jWMgSGnhu4dwLCBUaMOgbmggcGjhu5EgTmhhIFRyYW5nLCBLaMOhbmggSMOyYSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1533013081706" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<!-- Google map end -->

@endsection
@section('javascript')
<script>
    ClassicEditor
    .create( document.querySelector( '#messagecontact' ),{
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
@endsection