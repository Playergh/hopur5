$('.input').keypress(function (e) {
    if (e.which == 13) {
        $('#chatInput').submit();
        return false;
    }
});
