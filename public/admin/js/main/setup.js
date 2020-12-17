$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    $('.btn-remove').on('click', function() {
        Swal.fire({
            title: 'Cảnh báo!',
            text: "Bạn chắc chắn muốn xóa thông tin này?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý!'
        }).then((result) => {
            if (result.value) {
                var url = $(this).attr('href');
                window.location.href = url;
            }
        })
        return false;
    });
});