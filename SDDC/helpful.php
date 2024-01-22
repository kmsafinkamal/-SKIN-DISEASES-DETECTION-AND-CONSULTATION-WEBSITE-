<?php
include('dbconn.php'); // Include your database connection file

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Update the 'helpful' count in the database
    $update_query = mysqli_query($conn, "UPDATE post SET helpful = helpful + 1 WHERE post_id = '$post_id'")
        or die(mysqli_error());

    // Redirect back to the page where the button was clicked
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    // Handle the case when 'id' is not set
    echo "Invalid request!";
}
?>