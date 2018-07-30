$(document).ready(function(){
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});   
$('#ListPost tbody').on( 'click','button.edit', function(){
    var id_status = $(this).attr('data-catalog');  
    var input = $('#id_status').val(id_status); 
    //var input = $('#input_hidden1').val(id_data);     
});
$("#ModalUpdate").on("show.bs.modal", function(evt) {
    //console.log('ok');
    //var id_data = $('#id_Order').val();
   // var string = "Are you sure you want to delete the order with id"+" "+id_data+" "+ "from the list?" ;
   // $('.modal-body label').html(string);
});
$('#update').click(function(){ 
    var id = $('#id_status').val();
   // console.log(id);
    //alert(id); ua cmt r sao van alert ra id?d
    $.ajax({
            url: "/admin/newpost/update",
            type: "POST",
            dataType:"JSON",
            data: {
                id:id,
                _token : $('meta[name="csrf-token"]').attr('content'), 
            },
            success:function(data){
                console.log(data);
                //$('#exampleModal').modal('hide');
                location.reload();
                //$("#dataTables-example").ajax.reload();
            }, 
            error:function (xhr, ajaxOptions, thrownError) {
               // console.log(xhr);
               // alert(xhr.status);
               // alert(thrownError);
            }
              
        });
});
$('#ListPost tbody').on( 'click','button.trash', function(){
   //console.log('ok');   
    var id_data = $(this).attr('data-catalog');  
    //alert(id_data);
    var input = $('#id_delete').val(id_data); 
    //var input = $('#input_hidden1').val(id_data);     
});
$('#delete').click(function(){ 
    var id = $('#id_delete').val();
    // alert(id);
    //alert(id);
    $.ajax({
            url: "/admin/newpost/delete",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {id:id},
            success:function(data){
               // $('#exampleModal').modal('hide');
                location.reload();
                //$("#dataTables-example").ajax.reload();
            }   
        });
    });
$("#id_parent").change(function(){
    var id_parent = $(this).val();
        $.get("../ajax/theloai/"+id_parent,function(data){
            $("#typeblog").html(data)
        });
    });
});

