$(function () {
    'use strict';

    // Showing page loader
    $(window).load(function () {
        setTimeout(function () {
            $(".page_loader").fadeOut("fast");
        }, 100)
        $('link[id="style_sheet"]').attr('href', 'css/skins/default.css');
        $('.logo img').attr('src', 'img/logos/logo.png');

        // Filterizr initialization
        if($('.filtr-container').length > 0) {
            $(function () {
                $('.filtr-container').filterizr(
                    {
                        delay: 1
                    }
                );
            });
        }

        $('.filters-listing-navigation li').click(function() {
            $('.filters-listing-navigation .filtr').removeClass('active');
            $(this).addClass('active');
        });
    });

    // WOW animation library initialization
    var wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            mobile: false
        }
    );
    wow.init();

    // Banner slider
    (function ($) {
        //Function to animate slider captions
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';
            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $('#carousel-example-generic')
        var $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);
        //Pause carousel
        $myCarousel.carousel('pause');
        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });
        $('#carousel-example-generic').carousel({
            interval: 3000,
            pause: "false"
        });
    })(jQuery);

    // Page scroller initialization.
    $.scrollUp({
        scrollName: 'page_scroller',
        scrollDistance: 300,
        scrollFrom: 'top',
        scrollSpeed: 500,
        easingType: 'linear',
        animation: 'fade',
        animationSpeed: 200,
        scrollTrigger: false,
        scrollTarget: false,
        scrollText: '<i class="fa fa-chevron-up"></i>',
        scrollTitle: false,
        scrollImg: false,
        activeOverlay: false,
        zIndex: 2147483647
    });

    // Counter
    function isCounterElementVisible($elementToBeChecked) {
        var TopView = $(window).scrollTop();
        var BotView = TopView + $(window).height();
        var TopElement = $elementToBeChecked.offset().top;
        var BotElement = TopElement + $elementToBeChecked.height();
        return ((BotElement <= BotView) && (TopElement >= TopView));
    }

    $(window).scroll(function () {
        $(".counter").each(function () {
            var isOnView = isCounterElementVisible($(this));
            if (isOnView && !$(this).hasClass('Starting')) {
                $(this).addClass('Starting');
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }
        });
    });

    // Range sliders initialization
    $(".range-slider-ui").each(function () {
        var minRangeValue = $(this).attr('data-min');
        var maxRangeValue = $(this).attr('data-max');
        var minName = $(this).attr('data-min-name');
        var maxName = $(this).attr('data-max-name');
        var unit = $(this).attr('data-unit');

        $(this).append("" +
            "<span class='min-value'></span> " +
            "<span class='max-value'></span>" +
            "<input class='current-min' type='hidden' name='"+minName+"'>" +
            "<input class='current-max' type='hidden' name='"+maxName+"'>"
        );
        $(this).slider({
            range: true,
            min: minRangeValue,
            max: maxRangeValue,
            values: [minRangeValue, maxRangeValue],
            slide: function (event, ui) {
                event = event;
                var currentMin = parseInt(ui.values[0]);
                var currentMax = parseFloat(ui.values[1]);
                $(this).children(".min-value").text( currentMin + " " + unit);
                $(this).children(".max-value").text(currentMax + " " + unit);
                $(this).children(".current-min").val(currentMin);
                $(this).children(".current-max").val(currentMax);
            }
        });

        var currentMin = parseInt($(this).slider("values", 0));
        var currentMax = parseFloat($(this).slider("values", 1));
        $(this).children(".min-value").text( currentMin + " " + unit);
        $(this).children(".max-value").text(currentMax + " " + unit);
        $(this).children(".current-min").val(currentMin);
        $(this).children(".current-max").val(currentMax);
    });

    // Select picket
    $('.selectpicker').selectpicker('refresh');

    // Search option's icon toggle
    $('.search-options-btn').click(function () {
        $('.search-contents').toggleClass('show-search-area');
        $('.search-options-btn .fa').toggleClass('fa-chevron-down');
    });

    // Carousel with partner initialization
    (function () {
        $('#ourPartners').carousel({interval: 3600});
    }());

    (function () {
        $('.our-partners .item').each(function () {
            var itemToClone = $(this);
            for (var i = 1; i < 4; i++) {
                itemToClone = itemToClone.next();
                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }
                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-" + (i))
                    .appendTo($(this));
            }
        });
    }());

    // Background video playing script
    $(document).ready(function () {
        $(".player").mb_YTPlayer();
    });

    // Multilevel menuus
    $('[data-submenu]').submenupicker();

    // Expending/Collapsing advance search content
    $('.show-more-options').click(function () {
        if ($(this).find('.fa').hasClass('fa-minus-circle')) {
            $(this).find('.fa').removeClass('fa-minus-circle');
            $(this).find('.fa').addClass('fa-plus-circle');
        } else {
            $(this).find('.fa').removeClass('fa-plus-circle');
            $(this).find('.fa').addClass('fa-minus-circle');
        }
    });

    var videoWidth = $('.sidebar-widget').width();
    var videoHeight = videoWidth * .61;
    $('.sidebar-widget iframe').css('height', videoHeight);

    // Dropzone initialization
    Dropzone.autoDiscover = false;
      var myDropZone = new Dropzone("#myDropZone",{
        url: '/personal/post-submit',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        autoProcessQueue: false,
        uploadMultiple:true,
        parallelUploads: 16,
        maxFilesize: 8,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        dictFileTooBig: 'Image is bigger than 5MB',
        addRemoveLinks: true,
        previewsContaniner : null,
        hiddenInputContainer: "body",
        init: function(){
            var myDropzone = this; // Makes sure that 'this' is understood inside the functions below.
            // for Dropzone to process the queue (instead of default form behavior):
            document.getElementById("submit").addEventListener("click", function(e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });
            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.append("txttitle",jQuery("#txttitle").val());
                formData.append("slhinhthuc",jQuery("#hinhthuc") .val());
                formData.append("slloaitin",jQuery("#loaitin") .val());
                formData.append("txtgia",jQuery("#txtgia").val());
                formData.append("txtdientich",jQuery("#dientich") .val());
                formData.append("txtphongngu",jQuery("#txtphongngu") .val());
                formData.append("txtphongtam" ,jQuery("#phongtam").val());
                formData.append("txtdiachi" ,jQuery("#diachi").val());
                formData.append("sltinh" ,jQuery("#submittinh").val());
                formData.append("slhuyen" ,jQuery("#submithuyen").val());
                formData.append("slphuong" ,jQuery("#submitphuong").val());
                formData.append("slunit" ,jQuery("#unit").val());
               // console.log(jQuery("#unit").val());
                formData.append("message" ,theEditor.getData());
                formData.append("txtname" ,jQuery("#txtname").val());
                formData.append("txtemail" ,jQuery("#txtemail").val());
                formData.append("txtphone" ,jQuery("#txtphone").val());
                formData.append("sluptin" ,jQuery("#sluptin").val());
                formData.append("dateEnd" ,jQuery("#dateEnd").val());
                formData.append("dateStart" ,jQuery("#dateStart").val());
                console.log(jQuery("#dateEnd").val());
                console.log(jQuery("#dateStart").val());
            });
            this.on("successmultiple", function(files, response) {
                //myDropzone.options.autoProcessQueue = true; 
                //hat.processQueue();
               location.href ="/personal/my-post";
              });
            this.on("errormultiple", function(files, response, errors) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
                //location.reload();
                //alert(files);
                alert('bạn nhập còn thiếu dữ liệu , vui lòng nhập lại đầy đủ thông tin ');
                });
             }
         });

         
    
         // date picker submit
         var date = new Date();
         date.setDate(date.getDate());
         
         $('.datepicker').datepicker({ 
             startDate: date,
             format: 'dd/mm/yyyy',
         });
        $('.datepicker').on('changeDate', function(ev){
            $(this).datepicker('hide');
        });

    // SO something in mega menu
    jQuery(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation()
    })

    // Magnify activation
    $('.property-magnify-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{enabled:true}
        });
    });

    $('.portfolio-item').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{enabled:true}
    });


    // Modal activation
    $('.property-video').on('click', function () {
        $('#propertyModal').modal('show');
    });

 
    resizeModalsContent();
    function resizeModalsContent() {
        var winWidth = $(window).width();
        var videoWidth = 450;
        if(winWidth < 992 && winWidth > 767) {
            videoWidth = 600;
        } else if(winWidth <= 768) {
            videoWidth = winWidth - 20;
        }

        var ratio = .6666;
        var videoHeight = videoWidth * ratio;
        $('.modalIframe').css('height', videoHeight);
    }


    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".fa")
            .toggleClass('fa-minus fa-plus');
    }

    $('.panel-group').on('shown.bs.collapse', toggleChevron);
    $('.panel-group').on('hidden.bs.collapse', toggleChevron);

    // Switching Color schema
    $('.color-plate').on('click', function () {
        var name = $(this).attr('data-color');
        $('link[id="style_sheet"]').attr('href', 'css/skins/' + name + '.css');
        if (name == 'default') {
            $('.logo img').attr('src', 'img/logos/logo.png');
        }
        else {
            $('.logo img').attr('src', 'img/logos/' + name + '-logo.png');
        }
    });

    $('.setting-button').on('click', function () {
        $('.option-panel').toggleClass('option-panel-collased');
    });

    $(window).resize(function () {
        resizeModalsContent();
    });
    // submit data 
    
});

// mCustomScrollbar initialization
(function ($) {
    $(window).resize(function () {
        $('#map').css('height', $(this).height() - 110);
        if ($(this).width() > 768) {
            $(".map-content-sidebar").mCustomScrollbar(
                {theme: "minimal-dark"}
            );
            $('.map-content-sidebar').css('height', $(this).height() - 110);
        } else {
            $('.map-content-sidebar').mCustomScrollbar("destroy"); //destroy scrollbar
            $('.map-content-sidebar').css('height', '100%');
        }
        }).trigger("resize");

})(jQuery);


(function ($) { 
    // submit data email 
    $("#submit_data").click(function(){
        var email = $('#nsu-email-0').val();
        var fullname = $('#nsu-name-0').val();
        var phone = $('#nsu-phone-0').val();
        $.ajax({
                url: "/save-data-email",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {email:email,fullname:fullname,phone:phone },
                success:function(data){
                    alert('Thông tin bạn của ban đã được lưu lại , bạn sẽ sớm nhận được nhưng thông tin dự án mới nhất ');
                },
                error: function (xhr, ajaxOptions, thrownError,message) {
                    alert('Email bạn nhập không đúng định dạng , vui lòng kiểm tra lại !!!');
                }
          });
    });
    // ajax select sidebar post
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


    
})(jQuery);

