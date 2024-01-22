<!-- get_messages.php -->
<?php
include('dbconn.php');

$query = "SELECT m.message, u.username, m.timestamp FROM messages m
          JOIN user u ON m.sender_id = u.user_id
          ORDER BY m.timestamp";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<p><strong>' . $row['username'] . ':</strong> ' . $row['message'] . ' (' . $row['timestamp'] . ')</p>';
}
?>

