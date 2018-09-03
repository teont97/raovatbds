@extends('client.master')
@section('title','Bài viết của bạn')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Bài viết của tôi </h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Trang chủ </a></li>
                    <li class="active">Bài viết của tôi </li>
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
                                <span class="table-property-price">{!! $iteam_mypost->price !!} / {{ $iteam_mypost->Unit['name']}}</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">{!! $iteam_mypost->created_at !!}</td>
                        @if($iteam_mypost->status==0)
                        <td class="text-danger"> Chưa Duyệt </td>
                        @else
                        <td class="text-success"> Đã Duyệt </td>
                        @endif
                        <td class="action">
                        <a href="{{route('personal.edit.mypost',$iteam_mypost->id)}}"><i class="fa fa-pencil"></i> Sửa</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Ẩn</a>
                        <a href="javascript:void(0)"  data-id="{{ $iteam_mypost->id }}" class="delete"><i class="fa fa-remove"></i> Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- table end -->
                <nav aria-label="Page navigation">
                    {{ $data_mypost->links() }}
                </nav>
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
<script>
    $(".delete").click(function(){
        var r = confirm("Bạn có chắc chắn xóa không !");
      var id_delete=  $(this).attr('data-id')
      //  console.log(id_delete);
      if(r==true){
        $.ajax({
                type: 'POST',
                url: '../../personal/delete-mypost',
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: "id="+id_delete,
                dataType: 'html',
                success: function(data) {
                        //$("#msg").html(data);
                        alert('bạn đã xóa thành công ');
                        location.reload();

                }
        });   
      }
    });


</script>
@endsection