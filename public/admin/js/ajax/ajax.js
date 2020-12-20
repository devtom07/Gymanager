   $('#searchAcc').on('keyup',function(){
      $value = $(this).val();
      $.ajax({
         type:'get',
         url:'search-khoan-khach/search',
         data: {
            'searchAcc': $value
         },
         success:function(data){
            $('#tbodyAccountCustomer').html(data);
         },
      });
   });
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
