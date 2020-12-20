$(document).ready(function ($) {
    $('#updateChangCart').on('change', function () {
        var id = $(this).attr('row-id');
        var qty = $(this).val();
        console.log(id);
        console.log(qty);

        $.ajax({
            url: 'http://localhost/Gymanager/public/admin/update/' + id + "/" + qty,
            dataType: 'json',
            success: function (result) {
                console.log(result);
                let totalPrice = result.totalPriceCart.qty;
                let price = totalPrice * result.totalPriceCart.price;
                console.log(totalPrice);
                let prices = new Intl.NumberFormat().format(price);
                $('#price-item' + id).html(prices + ' ' + '<u>' +
                    'đ' + '</u>');
                $('#grand-total').html('Tổng tiền : ' + prices + ' ' + '<u>' +
                    'đ' + '</u>');
            }
        })
    });
})