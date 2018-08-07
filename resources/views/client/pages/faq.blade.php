@extends('client.master')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Faq</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Faq</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Faq body start -->
<div class="faq-body content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Các Câu Hỏi Thường Gặp</h1>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xm-12">
                <!-- Panel box start -->
                <div class="panel-box">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#generalInformataion" data-toggle="tab" aria-expanded="true">Thông Tin Chung</a></li>
                        <li class=""><a href="#extraFeatures" data-toggle="tab" aria-expanded="false">Thông Tin Đầu Tư </a></li>
                        <li class=""><a href="#VehicleOverview" data-toggle="tab" aria-expanded="false">Thông Tin Mô Giới</a></li>
                    </ul>
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="generalInformataion">
                                    <div class="panel-div">
                                        <div class="panel-group" role="tablist">
                                            <div class="panel panel-default">
                                                <div class="panel-heading active" role="tab" id="heading1">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false">
                                                            <i class="fa"></i>Proin luctus, erat sed pulvinar bibendum
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam. Nam sed aliquet tortor. Sed id malesuada ante. Quisque et sagittis nulla. In ut congue lacus, in malesuada nulla. Proin luctus, erat sed pulvinar bibendum, nisi erat dignissim ante, in imperdiet purus dolor sit amet lectus. Nullam luctus euismod purus, nec consequat tellus luctus pharetra. Morbi ut purus tempor, pellentesque felis eu; mollis nisl. Morbi tincidunt ante ipsum, bibendum pulvinar eros luctus sed. Donec non tincidunt quam. Donec nisl eros, sollicitudin a condimentum eget, iaculis non metus. Curabitur rhoncus elit eu rhoncus molestie. Praesent vitae felis et justo malesuada auctor! Aliquam hendrerit ut sem nec euismod. Curabitur vel interdum dui? Nulla tempor interdum suscipit. Nulla tortor orci, iaculis vel enim id, bibendum rutrum orci.</p>
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading2">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">
                                                            <i class="fa"></i>Integer pharetra id magna sed laoreet
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading3">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false">
                                                            <i class="fa"></i> Voluptatem remopa accusantium doloremque laudantium
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading4">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false">
                                                            <i class="fa"></i>What is required if I sell my vehicle?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading5">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false">
                                                            <i class="fa"></i>Morbi ut purus tempor, pellentesque felis eu
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading6">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false">
                                                            <i class="fa"></i>Where do I find an agent?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading active" role="tab" id="heading11">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false">
                                                            <i class="fa"></i>Proin luctus, erat sed pulvinar bibendum
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam. Nam sed aliquet tortor. Sed id malesuada ante. Quisque et sagittis nulla. In ut congue lacus, in malesuada nulla. Proin luctus, erat sed pulvinar bibendum, nisi erat dignissim ante, in imperdiet purus dolor sit amet lectus. Nullam luctus euismod purus, nec consequat tellus luctus pharetra. Morbi ut purus tempor, pellentesque felis eu; mollis nisl. Morbi tincidunt ante ipsum, bibendum pulvinar eros luctus sed. Donec non tincidunt quam. Donec nisl eros, sollicitudin a condimentum eget, iaculis non metus. Curabitur rhoncus elit eu rhoncus molestie. Praesent vitae felis et justo malesuada auctor! Aliquam hendrerit ut sem nec euismod. Curabitur vel interdum dui? Nulla tempor interdum suscipit. Nulla tortor orci, iaculis vel enim id, bibendum rutrum orci.</p>
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading12">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false">
                                                            <i class="fa"></i>Integer pharetra id magna sed laoreet
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body panel-body-12">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading13">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false">
                                                            <i class="fa"></i> Voluptatem remopa accusantium doloremque laudantium
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading14">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false">
                                                            <i class="fa"></i>What is required if I sell my vehicle?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading15">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false">
                                                            <i class="fa"></i>Morbi ut purus tempor, pellentesque felis eu
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading mb-0" role="tab" id="heading16">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false">
                                                            <i class="fa"></i>Where do I find an agent?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade features" id="extraFeatures">
                                    <div class="panel-div">
                                        <div class="panel-group" role="tablist">
                                            <div class="panel panel-default">
                                                <div class="panel-heading active" role="tab" id="heading7">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false">
                                                            <i class="fa"></i>Where do I find an agent?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading active" role="tab" id="heading8">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false">
                                                            <i class="fa"></i>Morbi ut purus tempor, pellentesque felis eu
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            <i class="fa"></i>What is required if I sell my vehicle?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade technical" id="VehicleOverview">
                                    <div class="panel-div">
                                        <div class="panel-group" role="tablist">
                                            <div class="panel panel-default">
                                                <div class="panel-heading active" role="tab" id="heading9">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false">
                                                            <i class="fa"></i>Integer pharetra id magna sed laoreet
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading10">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false">
                                                            <i class="fa"></i>Is the price you quote guaranteed?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body panel-body-2">
                                                        <p>Nunc sagittis dolor et nibh laoreet consequat. Integer pharetra id magna sed laoreet. Pellentesque nec venenatis odio. Praesent aliquet tellus ut nibh semper, at posuere mauris iaculis. Donec mauris arcu; egestas ac neque eu, viverra molestie quam. Morbi eget augue sem. Proin nec pharetra quam. Ut consectetur velit a tincidunt suscipit. Sed eget iaculis mi. Ut fermentum odio urna, eu sagittis augue rhoncus vehicula! In ut nullam sodales.</p>
                                                        <hr>
                                                        <span>Was this answer helpful?
                                                            <a href="#" class="yes">Yes <i class="fa fa-thumbs-o-up"></i></a>
                                                            <a href="#" class="no">No <i class="fa fa-thumbs-o-down"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Panel box end -->
            </div>
             <!-- Panel box end -->
            @include('client.block.sidebar_blog');
            <!-- Panel box end -->
            
        </div>
    </div>
</div>
<!-- Faq body end -->

<!-- Intro section -->
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
<!-- Intro end -->
@endsection