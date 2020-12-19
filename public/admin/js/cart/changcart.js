// function updateCart(quantity, rowId) {
//     $.get(
//         //url
//         '{{asset('
//         show_san_pham / update ')}}',

//         {
//             quantity: quantity,
//             rowId: rowId
//         },
//         // phương thức
//         function() {
//             location.reload();
//         }
//     );
// }
$(document).on('click', '#qtyCart', function () {
    let id = $(this).data('id');
    console.log(id);
})