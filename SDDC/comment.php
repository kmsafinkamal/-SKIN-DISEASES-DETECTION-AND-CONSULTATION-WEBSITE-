<?php
include("dbconn.php");
include("session.php");

if (isset($_POST['comment'])) {
    $comment = $_POST['comment_content'];
    $post_id = $_POST['id'];

    $stmt = mysqli_prepare($conn, "INSERT INTO comment (content, date_posted, user_id, post_id) VALUES (?, ?, ?, ?)");

    if (!$stmt) {
        die("Error in preparing statement: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "siii", $comment, strtotime(date("Y-m-d h:i:sa")), $user_id, $post_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
?>
<script>
    window.location = 'home.php';
</script>
<?php
}
?>
