$(document).ready(function () {

    $('#contact').ajaxForm({
        target: '#thongbao',
        success: function () {
            $('#thongbao').fadeIn('fast');
            $('#thongbao').fadeOut(5000);
        }
    });


});
