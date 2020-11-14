    $(document).click('#btn-show',function(){
    var url = $(this).attr('data-url');
    $.ajax({
    type: 'get',
    url: url,
    success: function(response) {
    console.log(response)
    $('p#id').text(response.data.id)
    $('p#name1').text(response.data.name)
    $('p#email1').text(response.data.email)
    $('p#phone1').text(response.data.phone)
    $('p#sdt1').text(response.data.sdt)
    $('p#diachi1').text(response.data.diachi)
    $('p#created_at').text(response.data.created_at)
    $('p#update_at').text(response.data.update_at)
},
    error: function (jqXHR, textStatus, errorThrown) {
    //xử lý lỗi tại đây
}
})
})
