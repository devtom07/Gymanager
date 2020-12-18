   $(document).on('keyup','#searchAcc',function(){
      $value = $(this).val();
      $.ajax({
         type:'get',
         dataType: "json",
         url:'xoa-tai-khoan-khach/search',
         data: {
            'searchAcc': $value
         },
         success:function(data){
            $('#tbodyAccountCustomer').html(data);
         },
      });
   });
