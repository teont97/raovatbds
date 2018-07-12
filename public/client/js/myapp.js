$(document).ready(function(){
    $("#hinhthuc").change(function(){
        var hinhthuc = $(this).val();
        $.get("ajax/loaitin/"+hinhthuc,function(data){
      
            $("#loaitin").html(data).selectpicker('refresh');
            
        });
    });
});
