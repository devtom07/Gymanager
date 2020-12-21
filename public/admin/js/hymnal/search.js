$(document).on('keyup','#searchHymnal',function (){
    $value = $(this).val()
    let origin = location.origin;
    $.ajaxSetup({
    headers: { 'csrftoken' : '{{ csrf_token() }}' }
});
    $.ajax({
    type : 'get',
    url:origin + '/admin/catap/search',
    data : {
    'search_hymnal' : $value
},
    success : function (data){
        console.log(data)
    $('#listHymnal').html(data);
}
})
})