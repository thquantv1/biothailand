$('#basic_config').ajaxForm({
        target: '#pills-basic',
        success: function () {
            $('#pills-basic').fadeIn('fast');            
        }
    });
$('#addition_config').ajaxForm({
        target: '#pills-addition',
        success: function () {
            $('#pills-addition').fadeIn('fast');            
        }
    });
