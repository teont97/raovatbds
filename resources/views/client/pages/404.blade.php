@extends('client.master')
@section('title','Trang Không Tồn Tại')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- Error404 content start -->
            <div class="error404-content">
                <h1>404</h1>
                <h2>Something is wrong</h2>
                <p>The page you are looking for was moved, removed, renamed or might never.</p>
                <form action="index.html" method="post">
                    <button type="submit" class="button-sm out-line-btn">Back to home page</button>
                </form>
            </div>
            <!-- Error404 content end -->
        </div>
    </div>
</div>
@endsection