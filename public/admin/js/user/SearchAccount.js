$(document).on('keyup','#searchAccountUser',function (){
    $value = $(this).val()
    let origin = location.origin;
    $.ajaxSetup({
        headers: { 'csrftoken' : '{{ csrf_token() }}' }
    });
    $.ajax({
        type : 'get',
        url:origin + 'user/search/',
        data : {
            'search_user' : $value
        },
        success : function (data){
            console.log(data)
            $('#bodyUser').html(data);
        }
    })
})