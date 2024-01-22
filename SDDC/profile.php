<?php
include('dbconn.php');
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header('location:index.php');
    exit();
}

// Fetch user information
$user_id = $_SESSION['id'];
$member_query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$user_id'") or die(mysqli_error());
$member_row = mysqli_fetch_array($member_query);

// Update user information if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_profile'])) {
        $new_firstname = $_POST['firstname'];
        $new_lastname = $_POST['lastname'];
        $new_age = $_POST['age'];

        // Perform the update query
        $update_query = mysqli_query($conn, "UPDATE user SET firstname='$new_firstname', lastname='$new_lastname' , age='$new_age' WHERE user_id='$user_id'")
            or die(mysqli_error());

        // Redirect to the profile page after updating
        header('location: profile.php');
        exit();
    } elseif (isset($_POST['change_password'])) {
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];

        // Check if the old password is correct
        $old_password_query = mysqli_query($conn, "SELECT * FROM user WHERE user_id='$user_id' AND password='$old_password'")
            or die(mysqli_error());
        $count = mysqli_num_rows($old_password_query);

        if ($count > 0) {
            // Update the password
            $update_password_query = mysqli_query($conn, "UPDATE user SET password='$new_password' WHERE user_id='$user_id'")
                or die(mysqli_error());

            // Redirect to the profile page after updating
            header('location: profile.php');
            exit();
        } else {
            echo "<script>alert('Incorrect old password. Please try again.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>

<?php include('header.php'); ?>

    <!-- <header>
        <h1>User Profile</h1>
    </header> -->

    <section>
    <h1 align=center>Welcome, <?php echo $member_row['username']; ?>!</h1>
    <center><img src="image/profile.png" alt="" style="max-width: 30%; max-height: 30%;"></center>
    <br>
<h3 align=center>Your Profile Information:</h3>
<h5><p align=center>Username: <?php echo $member_row['username']; ?></p>
<p align=center>Gender: <?php echo $member_row['gender']; ?></p></h5>

<form method="post" action="profile.php">
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" value="<?php echo $member_row['firstname']; ?>" required>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" value="<?php echo $member_row['lastname']; ?>" required>

    <label for="age">Your Age:</label>
    <input type="text" name="age" value="<?php echo $member_row['age']; ?>" required>

    <input type="submit" name="update_profile" value="Update">
</form>

<br>

<h2>Change Your Password:</h2>
<form method="post" action="profile.php">
    <label for="old_password">Old Password:</label>
    <input type="password" name="old_password" required>

    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" required>

    <input type="submit" name="change_password" value="Change Password">
</form>

<p><a href="logout.php" class="btn btn-lg btn-danger fw-bold" style="text-decoration:none; text-align:center" >Logout</a>
<a href="ownpost.php" class="btn btn-lg btn-success fw-bold" style="text-decoration:none; text-align:center; float:right;" >Own Post</a></p>

    </section>

    <?php include('footer.php'); ?>

</body>

</html>
