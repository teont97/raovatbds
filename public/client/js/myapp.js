

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

jQuery(document).ready(function($) {
    var engine = new Bloodhound({
        remote: {
            url: 'search/products?value=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });
    $(".search").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: engine.ttAdapter(),
        name: 'products_list',
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Không có kết quả phù hợp.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<a href="products-detail/' + data.id + '" class="list-group-item">' + data.name + '</a>'
      }
        }
    });
});


