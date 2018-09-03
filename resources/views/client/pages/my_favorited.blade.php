@extends('client.master')
@section('title','Bảng báo giá dịch vụ  ')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Bảng báo giá dịch vụ </h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Trang chủ </a></li>
                    <li class="active">Bảng báo giá dịch vụ </li>
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
                <div class="main-title">
                    <h1>DỊCH VỤ DAUTUBDS79.COM</h1>
                    <h6>(Áp dụng từ 1/9/2018 đến khi có thông báo mới)</h6>
                </div>
                <div class="main-title-2">
                    <h1>I. Đăng Tin</h1>
                </div>
                <ul class="table-1">
                    <li class="title-1">
                        <h1> DỊCH VU ĐĂNG TIN RAO. </h1>
                        <div class="container-table">
                            <table border="1">
                                <thead>
                                    <th>Loại tin</th>
                                    <th>Phí theo ngày</th>
                                    <th>Phí 1 tuần</th>
                                    <th>Phí 2 tuần </th>
                                    <th class="ip5-none">Phí 1 tháng</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tin thường</td>
                                        <td>(Free)</td>
                                        <td>(Free)</td>
                                        <td>(Free)</td>
                                        <td class="ip5-none">(Free)</td>
                                    </tr>
                                    <tr>
                                        <td>Vip 1</td>
                                        <td>20.000</td>
                                        <td>120.000</td>
                                        <td>220.000</td>
                                        <td class="ip5-none">400.000</td>
                                    </tr>
                                    <tr>
                                        <td>Vip 2</td>
                                        <td>50.000</td>
                                        <td>250.000)</td>
                                        <td>400.000</td>
                                        <td class="ip5-none">700.000</td>
                                    </tr>
                                    <tr>
                                        <td>Vip Đặc biệt</td>
                                        <td>100.000</td>
                                        <td>500.000</td>
                                        <td>800.000</td>
                                        <td class="ip5-none">1.500.000</td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>     
                    </li>
                    <li class="title-1">
                        <h1> Ghi Chú </h1>
                        <div class="container-table">
                            <table border="1">
                                <thead>
                                    <th style="width:90px;">Loại tin</th>
                                    <th >Hiển Thị</th>
                                    <th>Lưu ý</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tin thường</td>
                                        <td >Là loại tin có tiêu đề bằng chữ màu xanh, nằm dưới các tin rao VIP</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Vip 1</td>
                                        <td>Là lọai tin có tiêu đề bằng chữ thường, màu cam , nằm trên tin thường và dưới các tin VIP khác.</td>
                                        <td>Thời gian đăng tối thiểu là 3 ngày</td>
                                    </tr>
                                    <tr>
                                        <td>Vip 2</td>
                                        <td >Là loại tin có tiêu đề bằng chữ IN HOA, MÀU CAM Nằm trên tin VIP 1 và dưới tin VIP Đặc Biệt.</td>
                                        <td>Thời gian đăng tối thiểu là 5 ngày.</td>
                                    </tr>
                                    <tr>
                                        <td>VIP ĐẶC BIỆT</td>
                                        <td >Là loại tin có tiêu đề bằng chữ IN HOA, MÀU ĐỎ , nằm trên cùng của bản tin.</td>
                                        <td>Thời hạn đăng tối thiểu là 10 ngày.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ul>
                <ul class="table-1" >
                    <li class="title-1">
                        <h1> ĐĂNG TIN DÀNH CHO MỤC DỰ ÁN </h1>
                        <div class="container-table">
                            <table border="1" >
                                <thead>
                                    <th>Loại tin</th>
                                    <th>Phí theo ngày</th>
                                    <th>Phí 1 tuần</th>
                                    <th>Phí 2 tuần </th>
                                    <th class="ip5-none" >Phí 1 tháng</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dự án đầu tư nỗi bật</td>
                                        <td>50.000</td>
                                        <td>250.000</td>
                                        <td>250.000</td>
                                        <td class="ip5-none">700.000</td>
                                    </tr>
                                    <tr>
                                        <td>Dự Án</td>
                                        <td>20.000</td>
                                        <td>120.000</td>
                                        <td>220.000</td>
                                        <td class="ip5-none">400.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li class="title-1">
                        <h1> Ghi Chú </h1>
                        <div class="container-table">
                            <table border="1" >
                                <thead>
                                    <th>Loại tin</th>
                                    <th>Hiển thị</th>
                                    <th>Ghi chú</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tin “Dự án đầu tư nỗi bật”.</td>
                                        <td>Thông tin bài đăng được hiển thị trên trang chủ ở mục dự án đầu tư nỗi bật</td>
                                        <td rowspan="2">Thời gian đăng tối thiểu là 7 ngày</td>
                                    </tr>
                                    <tr>
                                        <td>Tin “Dự án” thường</td>
                                        <td>Các bài đăng được hiển thị tại mục Dự Án của web, nằm dưới các bài đăng dự án đầu tư nỗi bật.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ul>
                <div class="main-title-2">
                    <h1>II. Thông Tin Chuyển Khoản</h1>
                </div>
                <div class="container-table">
                    <table border="1" width="600px;" class="bank">
                        <thead>
                            <th class="ip5-none">STT</th>
                            <th>NGÂN HÀNG</th>
                            <th>CHỦ TK </th>
                            <th>SỐ TK </th>
                            <th>CHI NHÁNH  </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ip5-none" >1</td>
                                <td>AGRIBANK</td>
                                <td >Đoàn Văn Hưng</td>
                                <td >4707 205 035 900</td>
                                <td >Agribank Vĩnh Thị- Nha Trang - KH</td>
                            </tr>
                            <tr>
                                <td class="ip5-none">2</td>
                                <td>VIETINBANK</td>
                                <td >Đoàn Văn Hưng</td>
                                <td >109 868 316 970</td>
                                <td >Vietinbank Khánh Hòa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- My Propertiess end -->

<!-- Intro section strat 
<div class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <img src="img/logos/logo-2.png" alt="logo-2">
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12">
                <h3>Looking To Sell Or Rent Your Property?</h3>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-12">
                <a href="submit-property.html" class="btn button-md button-theme">Submit Now</a>
            </div>
        </div>
    </div>
</div>
 Intro section end -->
@endsection