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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Own Posts</title>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="home.css">


</head>
<body>

<?php include('header.php'); ?>
<br>

	<div class="container" id="inner">

		<br>
        <center>
		<h1>YOUR POSTS</h1>
			<b><?php 
				echo $member_row['firstname']." ".$member_row['lastname'];
			?></b>, you can delete and comment from here 
		</center>
		<br>
		<br>
		<hr>
			
						<?php	
							$query = mysqli_query($conn,"SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent from post LEFT JOIN user on user.user_id = post.user_id where post.user_id = $user_id order by post_id DESC")or die(mysqli_error());
							while($post_row=mysqli_fetch_array($query)){
							$id = $post_row['post_id'];	
							$upid = $post_row['user_id'];
                            $postimg = $post_row['img'];		
							$posted_by = $post_row['firstname']." ".$post_row['lastname'];
							$helpful_count = $post_row['helpful'];
							$helpful_link = "helpful.php?id=" . $id;
						?>
                        <a style="text-decoration:none; float:right; border: 2px solid springgreen" href="deleteownpost.php<?php echo '?id='.$id; ?>"><button><font color="red">x</button></font></a>
					<h2><img src="image/profile.png" alt="" style="max-width: 4%; max-height: 4%;"><a href="#"> <b><?php echo $posted_by; ?></b></a>  Posted:</h2>
					- 
						<?php				
								$days = floor($post_row['TimeSpent'] / (60 * 60 * 24));
								$remainder = $post_row['TimeSpent'] % (60 * 60 * 24);
								$hours = floor($remainder / (60 * 60));
								$remainder = $remainder % (60 * 60);
								$minutes = floor($remainder / 60);
								$seconds = $remainder % 60;
								if($days > 0)
								echo date('F d, Y - H:i:sa', $post_row['date_created']);
								elseif($days == 0 && $hours == 0 && $minutes == 0)
								echo "A few seconds ago";		
								elseif($days == 0 && $hours == 0)
								echo $minutes.' minutes ago';
								elseif($days == 0)
								echo $hours.' hours ago';
						?>
					<br><h3><?php echo $post_row['content']; ?></h3>
                    <?php if ($postimg != ""){?> 
						<!-- <img src="upload\<?php echo $postimg; ?>">			 -->
						<div class="image-container">
						<img src="upload/<?php echo $postimg; ?>" alt="Image Description">
						</div>
					<?php } ?>
					<form method="post" action="commentown.php">
					<hr>
					Comment:<br>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<textarea name="comment_content" rows="1" cols="34" style="width: 50%;" placeholder=".........Type your comment here........" required></textarea><br>
					<input type="submit" name="comment" value="comment">
					</form>
						
					</br>
				
							<?php 
								$comment_query = mysqli_query($conn,"SELECT * ,UNIX_TIMESTAMP() - date_posted AS TimeSpent FROM comment LEFT JOIN user on user.user_id = comment.user_id where post_id = '$id'") or die (mysqli_error());
								while ($comment_row=mysqli_fetch_array($comment_query)){
								$comment_id = $comment_row['comment_id'];
								$comment_by = $comment_row['firstname']." ".  $comment_row['lastname'];
							?>
					<img src="image/profile.png" alt="" style="max-width: 2%; max-height: 2%;"> <a href="#"><?php echo $comment_by; ?></a> - <?php echo $comment_row['content']; ?>
					<br>
					- 
							<?php				
								$days = floor($comment_row['TimeSpent'] / (60 * 60 * 24));
								$remainder = $comment_row['TimeSpent'] % (60 * 60 * 24);
								$hours = floor($remainder / (60 * 60));
								$remainder = $remainder % (60 * 60);
								$minutes = floor($remainder / 60);
								$seconds = $remainder % 60;
								if($days > 0)
								echo date('F d, Y - H:i:sa', $comment_row['date_posted']);
								elseif($days == 0 && $hours == 0 && $minutes == 0)
								echo "A few seconds ago";		
								elseif($days == 0 && $hours == 0)
								echo $minutes.' minutes ago';
								elseif($days == 0)
								echo $hours.' hours ago';
							?>
					<br>
							<?php
							}
							?>
					<hr size="10"  noshade>
					&nbsp;
					<?php 
					if ($u_id = $id){
					?>
					
				
					
					<?php }else{ ?>
						
					<?php
					} } ?>

</div>
					
<?php include('footer.php');?>
