$(document).ready(function(){
    $('body').on('change', '#date_start', function(event){
        event.preventDefault();
        var val = $(this).val();
        var chuki = $('#chuki').val();
        var numberCk = 0;
        switch(chuki){
            case 'week':
                numberCk = 7;
                break;
            case 'month':
                numberCk = 30;
                break;
            default:
                numberCk = 365;
        }
        var n=  getdate(val,numberCk);
        // datend =  val + chuki

        console.log(n);
    })
})
function getdate(tt,total) {
    var date = new Date(tt);
    var newdate = new Date(date);

    newdate.setDate(newdate.getDate() + total);

    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();

    var someFormattedDate = y+'-'+mm+'-'+dd;

    document.getElementById("date_end").valueAsDate = new Date(someFormattedDate);
    return someFormattedDate;
}
$(document).ready(function() {
    $('#calamviec').select2();
});