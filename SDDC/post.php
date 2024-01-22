<?php
include('dbconn.php');
include('session.php');

if (isset($_POST['post'])) {
    $content  = $_POST["post_content"];
    $img = $_FILES["postimg"]["name"];
    $img_tmp = $_FILES["postimg"]["tmp_name"];

    if ($img != '') {
        move_uploaded_file($img_tmp, "upload/" . $img);
        $stmt = mysqli_prepare($conn, "INSERT INTO post (content, date_created, user_id, img) VALUES (?, ?, ?, ?)");

        if (!$stmt) {
            die("Error in preparing statement: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "siis", $content, strtotime(date("Y-m-d h:i:sa")), $user_id, $img);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        $stmt = mysqli_prepare($conn, "INSERT INTO post (content, date_created, user_id) VALUES (?, ?, ?)");

        if (!$stmt) {
            die("Error in preparing statement: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "sii", $content, strtotime(date("Y-m-d h:i:sa")), $user_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
?>
<script>
    window.location = 'home.php';
</script>
<?php
}
?>