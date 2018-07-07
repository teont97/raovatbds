@extends('client.master')
@section('content')
<!-- Content area start -->
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                @if(Session::has('flash_messages'))
                        <div class="alert alert-{!! Session::get('flash_level') !!}" style="width: 50%; margin: 10px auto; text-align: center;">
                            {!! Session::get('flash_messages') !!}
                        </div>
                 @endif
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Main title -->
                        <div class="main-title">
                            <h1><span>Signup</span></h1>
                        </div>
                        <!-- Form start-->
                        <form action="{!! route('postregister') !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <input type="text" name="fullname" class="input-text" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirm_Password" class="input-text" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block">Signup</button>
                            </div>
                        </form>
                        <!-- Form end-->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            I want to <a href="login.html">return to login</a>
                        </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Content area end -->
@endsection