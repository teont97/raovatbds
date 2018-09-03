

$(document).ready(function(){
    $("#hinhthuc").change(function(){
        var hinhthuc = $(this).val();
        $.get("../ajax/loaitin/"+hinhthuc,function(data){
            $("#loaitin").html(data).selectpicker('refresh')
        });
    });
    $("#hinhthuc").change(function(){
        var hinhthuc = $(this).val();
       // console.log(hinhthuc);
       // return false;
        $.get("../ajax/unit/"+hinhthuc,function(data){
            $("#unit").html(data).selectpicker('refresh')
        });
    });
});
$(document).ready(function(){
    $("#submittinh").change(function(){
        var tinh = $(this).val();
        $.get("../ajax/huyen/"+tinh,function(data){
            $("#submithuyen").html(data).selectpicker('refresh')
        });
    });
});
$(document).ready(function(){
    $("#submithuyen").change(function(){
        var huyen = $(this).val();
        $.get("../ajax/phuong/"+huyen,function(data){
            $("#submitphuong").html(data).selectpicker('refresh')
        });
    });
});
$("#home_hinhthuc").change(function(){
    var home_hinhthuc = $(this).val();
    $.get("../ajax/loaitin/"+home_hinhthuc,function(data){
       $("#home_theloai").html(data).selectpicker('refresh')
    });
});






