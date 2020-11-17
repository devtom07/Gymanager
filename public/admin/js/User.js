
    $(document).click('#btn-show',function(){
    var url = $(this).attr('data-url');
    $.ajax({
    type: 'get',
    url: url,
    success: function(response) {
    console.log(response)
    $('h1#id').text(response.data.id)
    $('h1#name1').text(response.data.name)
    $('h1#email1').text(response.data.email)
    $('h1#phone1').text(response.data.phone)
    $('h1#sdt1').text(response.data.sdt)
    $('h1#diachi1').text(response.data.diachi)
    $('h1#created_at').text(response.data.created_at)
    $('p#update_at').text(response.data.update_at)
},
    error: function (jqXHR, textStatus, errorThrown) {
    //xử lý lỗi tại đây
}
})
})


