<!DOCTYPE html>
<html>
<head>
	<title>POST AND COMMENT SYSTEM</title>
	<?php include('dbconn.php'); ?>
	<?php include('session.php'); ?>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="home.css">


</head>
<body>

<?php include('header.php'); ?>

<div class="container-fluid p-4 p-md-5 mb-4 text-dark" style=" background-image: url(image/banner.png); background-repeat: no-repeat; background-size:cover;">
    <hr width="40%" align="left">
    <div class="col-md-8 px-0">
      <h1 class="display-4 text-dark-emphasis ">WELCOME! <b><?php echo  $member_row['firstname']." ".$member_row['lastname'];?></b></h1>
      <p class="lead my-3 text-dark">"Share your experiences or challenges related to skin problems with others"<br></p>
      <br>
    </div>
  </div>

<br>

	<div class="container" id="inner">

			
		<br>
		<br>
		
				<center>
				<form method="post" action="post.php" enctype="multipart/form-data"> 
					<textarea name="post_content" rows="5" cols="54" style="" placeholder=".........Write your skin problems or experiences........" required></textarea>
					<br>
					<input type="file" name="postimg">
					<button name="post">&nbsp;POST</button>
					<br>
					<hr size="10"  noshade>
					</form>
					
					</center>	
						<?php	
							$query = mysqli_query($conn,"SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC")or die(mysqli_error());
							while($post_row=mysqli_fetch_array($query)){
							$id = $post_row['post_id'];	
							$upid = $post_row['user_id'];
							$postimg = $post_row['img'];	
							$posted_by = $post_row['firstname']." ".$post_row['lastname'];
							$helpful_count = $post_row['helpful'];
							$helpful_link = "helpful.php?id=" . $id;
						?>
					<?php if ($user_id==1){?> 
					<a style="text-decoration:none; float:right; border: 2px solid springgreen" href="deletepost.php<?php echo '?id='.$id; ?>"><button><font color="red">x</button></font></a>
					<?php } ?>
					<button style="text-decoration:none; float:right; background-color:cadetblue; border: 2px solid springgreen" id="helpfulBtn" onclick="incrementHelpful(<?php echo $id; ?>)">
              		Helpful (<?php echo $helpful_count?>)
        			</button>
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
					<form method="post" action="comment.php">
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
					<img src="image/profile.png" alt="" style="max-width: 2%; max-height: 2%;"><a href="#"> <?php echo $comment_by; ?></a> - <?php echo $comment_row['content']; ?>
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
					
				
							<!-- <?php
							// 	if (isset($_POST['post'])){
							// 	$post_content  = $_POST['post_content'];
								
							// 	mysqli_query($conn,"insert into post (content,date_created,user_id) values ('$post_content','".strtotime(date("Y-m-d h:i:sa"))."','$user_id') ")or die(mysqli_error());
							// 	header('location:home.php');
							// 	}
							// ?>

							// <?php
							
							// 	if (isset($_POST['comment'])){
							// 	$comment_content = $_POST['comment_content'];
							// 	$post_id=$_POST['id'];
								
							// 	mysqli_query($conn,"insert into comment (content,date_posted,user_id,post_id) values ('$comment_content','".strtotime(date("Y-m-d h:i:sa"))."','$user_id','$post_id')") or die (mysqli_error());
							// 	header('location:home.php');
							// 	}
							?> -->
</div>
<script>
    function incrementHelpful(postId) {
        // Use AJAX to increment the helpful count
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "helpful.php?id=" + postId, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Reload the page after updating the helpful count
                location.reload();
            }
        };
        xhr.send();
    }
</script>
<?php include('footer.php');?>
