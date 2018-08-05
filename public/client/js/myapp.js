

$(document).ready(function(){
    $("#hinhthuc").change(function(){
        var hinhthuc = $(this).val();
        $.get("../ajax/loaitin/"+hinhthuc,function(data){
            $("#loaitin").html(data).selectpicker('refresh')
        });
    });
});
$(document).ready(function(){
    $("#tinh").change(function(){
        var tinh = $(this).val();
        $.get("../ajax/huyen/"+tinh,function(data){
            $("#huyen").html(data).selectpicker('refresh')
        });
    });
});
$(document).ready(function(){
    $("#huyen").change(function(){
        var huyen = $(this).val();
        $.get("../ajax/phuong/"+huyen,function(data){
            $("#phuong").html(data).selectpicker('refresh')
        });
    });
});
$("#home_hinhthuc").change(function(){
    var home_hinhthuc = $(this).val();
    $.get("../ajax/loaitin/"+home_hinhthuc,function(data){
       $("#home_theloai").html(data).selectpicker('refresh')
    });
});






