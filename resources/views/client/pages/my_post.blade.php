@extends('client.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>My Properties</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">My Properties</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- My Propertiess start -->
<div class="content-area-7 my-properties">
    <div class="container">
        <div class="row">
         @include('client.block.account')

             <div class="col-lg-8 col-md-8 col-sm-12">
                 <div class="main-title-2">
                     <h1>Bài Viết Của Tôi </h1>
                 </div>
                <!-- table start -->
                
                <table class="manage-table responsive-table">
                    <tbody>
                    @foreach($data_mypost as $iteam_mypost)
                    <tr>
                        <?php $data=$iteam_mypost->post_images->shift();  ?>
                        <td class="title-container">
                            <img src="{!! asset('storage\app\public\upload\images/'.$data['images']) !!}" alt="my-properties-1" class="hidden-xs">
                            <div class="title">
                                <h4><a href="{!! route('getproductdetail',$iteam_mypost->id) !!}">{!! $iteam_mypost->title !!} </a></h4>
                                <span><i class="fa fa-map-marker"></i> {!! $iteam_mypost->address !!} </span>
                                <span class="table-property-price">{!! $iteam_mypost->price !!} / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">{!! $iteam_mypost->created_at !!}</td>
                        @if($iteam_mypost->status==0)
                        <td class="text-danger"> Chưa Duyệt </td>
                        @else
                        <td class="text-success"> Đã Duyệt </td>
                        @endif
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Sửa</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Ẩn</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- table end -->
            </div>
        </div>
    </div>
</div>
<!-- My Propertiess end -->

<!-- Counters strat -->
<div class="counters overview-bgi">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">967</h1>
                    <p>Listings For Sale</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-symbol-1"></i>
                    <h1 class="counter">1276</h1>
                    <p>Listings For Rent</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-people"></i>
                    <h1 class="counter">396</h1>
                    <p>Agents</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-people-1"></i>
                    <h1 class="counter">177</h1>
                    <p>Brokers</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->
@endsection