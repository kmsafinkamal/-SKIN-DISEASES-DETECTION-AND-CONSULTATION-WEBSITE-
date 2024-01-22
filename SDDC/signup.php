	
			<?php 
			include('dbconn.php');
				$username = $_POST['username'];
				$password = $_POST['password'];
				$firstname = $_POST ['firstname'];
				$lastname = $_POST ['lastname'];
				$age = $_POST ['age'];
				$gender = $_POST ['gender'];
				
				mysqli_query($conn,"insert into user (username, password, firstname, lastname, age, gender) values ('$username', '$password', '$firstname', '$lastname', '$age', '$gender')");
			?>
			<script>
	alert('Successfully Signed Up! You can now Log in your Account');
	window.location = 'index.php';
</script>