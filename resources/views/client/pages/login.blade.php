@extends('client.master')
@section('content')
<!-- Content area start -->
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Main title -->
                        <div class="main-title">
                            <h1>Login</h1>
                        </div>
                        <!-- Form start -->
                        <form action="index.html" method="GET">
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="Password" class="input-text" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label>
                                        <input type="checkbox" class="ez-hide">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forgot-password.html" class="link-not-important pull-right">Forgot Password</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block">login</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            New to Tempo? <a href="signup.html">Sign up now</a>
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