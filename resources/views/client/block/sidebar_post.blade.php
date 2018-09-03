<div class="col-lg-4 col-md-4 col-xs-12">
    <!-- Search contents sidebar start -->
    <div class="sidebar-widget">
        <div class="main-title-2">
            <h1><span>Công Cụ Tìm Kiếm </span>  </h1>
        </div>

        <form method="GET" action="{{route('getseacrh.by.select')}}" role="search" >
            <div class="form-group">
                <select class="selectpicker search-fields" id="slhinhthuc" name="status" data-live-search="true" data-live-search-placeholder="Search value">
                    <option>Hình Thức </option>
                        @foreach($hinhthuc as $iteam_hinhthuc)
                            <option value="{{ $iteam_hinhthuc->id }}">{{ $iteam_hinhthuc->name }}</option>
                        @endforeach
                </select>
            </div>
          
            <div class="form-group">
                <select class="selectpicker search-fields" id="sltheloai" name="types" data-live-search="true" data-live-search-placeholder="Search value" >
                        <option>Thể Loại  </option>
                </select>
            </div>

            <div class="form-group">
                <select class="selectpicker search-fields" id="location" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                    <option>Tỉnh/Thành</option>
                    @foreach($khuvuc as $iteam_location)
                        <option value="{{ $iteam_location->id }}">{{ $iteam_location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="selectpicker search-fields" id="slquan" name="sublocation" data-live-search="true" data-live-search-placeholder="Search value" >
                    <option>Quận Huyện</option>
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
                <div data-min="0" data-max="1000" data-unit="m2" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                <div class="clearfix"></div>
            </div>

            <div class="range-slider">
                <label>Giá Tiền/ M2 </label>
                <div data-min="0" data-max="500" data-unit="Triệu" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
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
            <p><a href="tel:+55-417-634-7071">0898 382 090 </a> </p>
        </div>
    </div>

    <!-- Latest reviews start -->
    <div class="sidebar-widget latest-reviews mb-0">
        <div class="main-title-2">
            <h1><span>fanpage</span> của chúng tôi </h1>
        </div>
        <div class="media">
            <div class="fb-page" data-href="https://www.facebook.com/tintucbatdongsannghiduong" data-tabs="messages" data-width="360" data-height="382" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tintucbatdongsannghiduong" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tintucbatdongsannghiduong">Đoàn Văn Hưng - Bất Động Sản Nghỉ Dưỡng Nha Trang</a></blockquote></div>
        </div>
 
    </div>
</div>
<script>
    $("#slhinhthuc").change(function(){
        var slhinhthuc = $(this).val();
        $.get("../ajax/loaitin/"+slhinhthuc,function(data){
            $("#sltheloai").html(data).selectpicker('refresh')
        });
    });
    $("#location").change(function(){
        var location = $(this).val();
        $.get("../ajax/huyen/"+location,function(data){
            $("#slquan").html(data).selectpicker('refresh')
        });
    });
    
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>