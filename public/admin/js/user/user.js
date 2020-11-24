$(document).on('click','#show_user',function (){
var id = $(this).data('id');
console.log(id)
$.ajax({
url:'GetUser/'+id,
    method: 'get',
    dataType:'json',
    type:'json',
    data:{
    'id' : id,
    },
    success:function (data){
     console.log(data)
        $.each(data,function (index,data){
            if(data.avatar){
                $("#avatar").html('<img width="100px" src="' + '../../user' + '/' + data.avatar + '" />')
            }else {
                $("#avatar").html("<img alt='' width='100px' src='http://placehold.it/150x150'>")
            }
            $("#name").html(data.name),
            $("#email").html(data.email),
                $("#phone").html(data.phone)
            $("#staff").html(data.staff.name)
            $.each(data.role,function (key,val){
                $("#role").html(val.name)
            })

        })
    }



})
})