@extends('client.master')
@section('title','Trang Không Tồn Tại')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- Error404 content start -->
            <div class="error404-content">
                <h1>404</h1>
                <h2>Ohh! Không tìm thấy trang</h2>
                <p>Trang bạn đang tìm kiếm đã được di chuyển, xóa, đổi tên hoặc có thể không tồn tại</p>
                <form action="{{ route('gethome') }}" method="post">
                    <button type="submit" class="button-sm out-line-btn">Quay Lại Trang Chủ</button>
                </form>
            </div>
            <!-- Error404 content end -->
        </div>
    </div>
</div>
@endsection