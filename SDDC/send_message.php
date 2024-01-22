<!-- send_message.php -->
<?php
include('dbconn.php');
include('session.php');

$message = $_POST['message'];
$user_id = $_SESSION['id'];

$query = "INSERT INTO messages (sender_id, message) VALUES ('$user_id', '$message')";
mysqli_query($conn, $query);
?>