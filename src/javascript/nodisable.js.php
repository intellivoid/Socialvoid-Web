function getRidOffAutocomplete(){
    var timer = window.setTimeout( function(){
        $('#username, #password, #repeat_password').prop('disabled',false);
        clearTimeout(timer);
    }, 800);
}
getRidOffAutocomplete();