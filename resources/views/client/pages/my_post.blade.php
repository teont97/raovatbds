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
                     <h1><span>My</span> Properties</h1>
                 </div>
                <!-- table start -->
                <table class="manage-table responsive-table">
                    <tbody>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-1" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-2" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-3" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-4" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-5" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

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