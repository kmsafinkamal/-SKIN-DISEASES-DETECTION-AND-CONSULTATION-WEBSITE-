<!-- chat.php -->
<?php
include('dbconn.php');
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header('location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Welcome to Our Consultation Center</h1>
        <!-- <img src="chatbot-icon.png" alt="Chatbot Icon" style="width: 100px; height: 100px; border-radius: 50%;"> -->
        <p>
            Please ask anything you want to know <br>
            Our professions will answer your question as soon as possible.
        </p>
    </header>

    <div id="chat-container">
        <div id="chat-messages"></div>
        <textarea id="message-input" placeholder="Type your message..."></textarea>
        <button onclick="sendMessage()">Send</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
