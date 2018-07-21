

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

var engine = new Bloodhound({
    remote: {
        url: 'autocomplete?key=%QUERY%',
        wildcard: '%QUERY%'
    },
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
});

$(".search").typeahead({
    hint: true,
    highlight: true,
    minLength: 1
}, {
    source: engine.ttAdapter(),
    name: 'post_list',
    display: function(data) {
        return data.title  //Input value to be set when you select a suggestion. 
    },
    templates: {
        empty: [
            '<div class="list-group search-results-dropdown"><div class="list-group-item">Không Tìm Kiếm Được Kết Quả Như Mong Muốn  </div></div>'
        ],
        header: [
        ],
        suggestion: function (data) {
            return '<a href="product-detail/' + data.id + '" class="list-group-item"> <span>'+ data.title + '</span>  </li>'
        }
    }
});



