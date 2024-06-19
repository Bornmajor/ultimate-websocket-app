<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebSocket Chat</title>
</head>
<body>
    <h1>WebSocket Chat</h1>
    <div id="chat"></div>
    <input type="text" id="message" placeholder="Type a message...">
    <button onclick="sendMessage()">Send</button>

    <script>
        var conn = new WebSocket('ws://localhost:8080');
        conn.onopen = function(e) {
            console.log("Connection established!");
        };

        conn.onmessage = function(e) {
            var chat = document.getElementById('chat');
            var message = document.createElement('p');
            message.textContent = e.data;
            chat.appendChild(message);
             console.log('On message');
        };

        function sendMessage() {
            var input = document.getElementById('message');
            conn.send(input.value);
            input.value = '';
        }
    </script>
</body>
</html>
