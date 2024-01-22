// script.js
function loadMessages() {
    $.ajax({
        url: 'get_messages.php',
        method: 'GET',
        success: function(data) {
            $('#chat-messages').html(data);
            scrollToBottom();
        }
    });
}

function sendMessage() {
    var message = $('#message-input').val();

    if (message.trim() !== '') {
        $.ajax({
            url: 'send_message.php',
            method: 'POST',
            data: { message: message },
            success: function() {
                $('#message-input').val('');
                loadMessages();
            }
        });
    }
}

function scrollToBottom() {
    $('#chat-messages').animate({ scrollTop: $('#chat-messages').prop('scrollHeight') }, 500);
}

$(document).ready(function() {
    loadMessages();
    setInterval(loadMessages, 3000); // Refresh messages every 3 seconds
});
