$(document).on('click','#show_customer',function (){
    var id = $(this).data('id');
    console.log(id)
    $.ajax({
        url:'GetCustomer/'+id,
        method: 'get',
        dataType:'json',
        type:'json',
        data:{
            'id' : id,
        },
        success:function (data){
            console.log(data)
            $.each(data,function (value,data){
                    $("#code_customer").html(data.code),
                    $("#name_Customer").html(data.name)
            });
        }
    })
})
