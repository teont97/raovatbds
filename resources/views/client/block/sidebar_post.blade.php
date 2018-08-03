<div class="col-lg-4 col-md-4 col-xs-12">
    <!-- Search contents sidebar start -->
    <div class="sidebar-widget">
        <div class="main-title-2">
            <h1><span>Công Cụ Tìm Kiếm </span>  </h1>
        </div>

        <form method="GET">
            <div class="form-group">
                <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                    <option>Hình Thức </option>
                    <option>For Sale</option>
                    <option>For Rent</option>
                </select>
            </div>
            <div class="form-group">
                <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                    <option>Khu Vực</option>
                    <option>United States</option>
                    <option>United Kingdom</option>
                    <option>American Samoa</option>
                    <option>Belgium</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                </select>
            </div>

            <div class="form-group">
                <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" >
                    <option>Thể Loại </option>
                    <option>Residential</option>
                    <option>Commercial</option>
                    <option>Land</option>
                </select>
            </div>

            <div class="form-group">
                <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" >
                    <option>Diện Tích</option>
                    <option>1000</option>
                    <option>800</option>
                    <option>600</option>
                    <option>400</option>
                    <option>200</option>
                    <option>100</option>
                </select>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="bedrooms">
                            <option>Phòng Ngủ</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="bathroom">
                            <option>WC</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" name="balcony">
                            <option>Ban Công </option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <select class="selectpicker search-fields" data-live-search="true" name="garage">
                            <option>Nhà Để Xe</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="range-slider">
                <label>Diện Tích</label>
                <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                <div class="clearfix"></div>
            </div>

            <div class="range-slider">
                <label>Giá Tiền </label>
                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                <div class="clearfix"></div>
            </div>

            <a class="show-more-options" data-toggle="collapse" data-target="#options-content">
                <i class="fa fa-plus-circle"></i> Hiển Thị Thêm Tùy Chọn 
            </a>
            <div id="options-content" class="collapse">
                <label class="margin-t-10">Features</label>
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">
                        Free Parking
                    </label>
                </div>
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="checkbox2" type="checkbox">
                    <label for="checkbox2">
                        Air Condition
                    </label>
                </div>
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="checkbox3" type="checkbox">
                    <label for="checkbox3">
                        Places to seat
                    </label>
                </div>
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="checkbox4" type="checkbox">
                    <label for="checkbox4">
                        Swimming Pool
                    </label>
                </div>
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="checkbox5" type="checkbox">
                    <label for="checkbox5">
                        Laundry Room
                    </label>
                </div>
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="checkbox6" type="checkbox">
                    <label for="checkbox6">
                        Window Covering
                    </label>
                </div>
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="checkbox7" type="checkbox">
                    <label for="checkbox7">
                        Central Heating
                    </label>
                </div>
                <div class="checkbox checkbox-theme checkbox-circle">
                    <input id="checkbox8" type="checkbox">
                    <label for="checkbox8">
                        Alarm
                    </label>
                </div>
            </div>
            <div class="form-group mb-0">
                <button class="search-button">Tìm Kiếm </button>
            </div>
        </form>
    </div>

    <!-- Category posts start -->
    <div class="sidebar-widget category-posts">
        <div class="main-title-2">
            <h1><span>Danh Mục Phổ Biến  </span></h1>
        </div>
        <ul class="list-unstyled list-cat">
            @foreach($loaitin_random as $iteam_loaitin)
                <?php $data_loaitin=DB::table('post')->where('id_theloai',$iteam_loaitin->id)->get();
                       $sl=count($data_loaitin);
                      // dd($sl);
                 ?>
                <li><a href="{!!  route('getproduct',$iteam_loaitin->id) !!}">{!! $iteam_loaitin->name !!} </a> <span>({!! $sl !!})  </span></li>
            @endforeach
        </ul>
    </div>

    <!-- Popular posts start -->
    <div class="sidebar-widget popular-posts">
        <div class="main-title-2">
            <h1><span>Tin BDS</span> Đang Hót </h1>
        </div>
    @foreach($post_random as $iteam_random)    
    <?php $data=$iteam_random->post_images->shift(); ?>
        <div class="media">
            <div class="media-left">
                <img class="images-random" src="{!! asset('storage\app\public\upload\images/'.$data['images']) !!}" alt="small-properties-1">
            </div>
            <div class="media-body">
                <h3 class="media-heading">
                    <a href="{!! route('getproductdetail',$iteam_random->id) !!}">{!! $iteam_random->title !!}</a>
                </h3>
                <p>{!! $iteam_random->created_at !!}</p>
                <div class="price">
                    {!!$iteam_random->price!!} VND
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <!-- Helping box Start -->
    <div class="sidebar-widget helping-box clearfix">
        <div class="main-title-2">
            <h1><span>Trung Tâm </span> Trợ Giúp </h1>
        </div>
        <div class="helping-center">
            <div class="icon"><i class="fa fa-map-marker"></i></div>
            <h4>Địa Chỉ</h4>
            <p>179/1 Ngô Đến - Nha Trang</p>
        </div>
        <div class="helping-center">
            <div class="icon"><i class="fa fa-phone"></i></div>
            <h4>Số Điện Thoại </h4>
            <p><a href="tel:+55-417-634-7071">01222424097</a> </p>
        </div>
    </div>

    <!-- Latest reviews start -->
    <div class="sidebar-widget latest-reviews mb-0">
        <div class="main-title-2">
            <h1><span>Những Đánh Giá</span> Gần Đây </h1>
        </div>
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="http://placehold.it/50x50" alt="avatar-1">
                </a>
            </div>
            <div class="media-body">
                <h3 class="media-heading"><a href="#">John Antony</a></h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Etiamrisus tortor, accumsan at nisi et,
                </p>
            </div>
        </div>
        <div class="media mb-0">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="http://placehold.it/50x50" alt="avatar-2">
                </a>
            </div>
            <div class="media-body">
                <h3 class="media-heading"><a href="#">Karen Paran</a></h3>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Etiamrisus tortor, accumsan at nisi et,
                </p>
            </div>
        </div>
    </div>
</div>