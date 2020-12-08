
$(document).ready(function (){
    $('#package_pt').change(function (){
    var id = $(this).val();
    console.log(id)
   $.ajax({
    url : '/getPackage/' + id,
       method : 'get',
       type:'json',
       dataType: "json",
       data:{
           'id' : id,
       },
    success :function(data){
            console.log(data)
            $('#totalCustomer').html(data.price)
    }
   });
})
    $("#customRadio2").click(function() {
        $("#bank_account1").show();
    });
})


