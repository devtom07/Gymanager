$('body').on('click', '#deleteCart', function () {
    var rowId = $(this).attr('item-id');
    $.ajax({
        url: 'http://localhost/Gymanager/public/admin/show_san_pham' + rowId,
        dataType: 'json',
        success: function (data) {
            $("#item_id_" + rowId).remove();
            $("#item_id1_" + rowId).remove();
            let count = data.countCart;
            $("#countcart").html("" + count);
            $("#total").html(data.total + " VNĐ");
        }
    })
});
