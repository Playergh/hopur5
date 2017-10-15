var lastTimeID = 0;

$(document).ready(function() {
    $('#btnSend').click( function() {
        sendChatText();
        $('#chatInput').val("");
    });
    $('#chatInput').keypress(function (e) {
        if (e.which == 13) {
            sendChatText();
            $("#chatInput").val("");
        }
    });

    startChat();
});

function startChat(){
    setInterval( function() { getChatText(); }, 650);
}

function getChatText() {
    $.ajax({
        type: "GET",
        url: "../worker/refresh.php?lastTimeID=" + lastTimeID,
        dataType: "json"
    }).done( function(data)
    {
        var html = "";
        $.each(data, function(index,chat) {
            var id = chat.id;
            var name = chat.name;
            var msg = chat.msg;
            var date = chat.date;
            var color = chat.color
            html += '<div style="color:#' + color + '">(' + date + ') <b>' + name +'</b>: ' + msg + '</div>';
            lastTimeID = id;
        });
        $('#view_ajax').append(html);
    });
}





function sendChatText(){
    var chatInput = $('#chatInput').val();
    if(chatInput != ""){
        $.ajax({
            type: "GET",
            url: "../worker/submit.php?chattext=" + encodeURIComponent( chatInput )
        });
    }
}