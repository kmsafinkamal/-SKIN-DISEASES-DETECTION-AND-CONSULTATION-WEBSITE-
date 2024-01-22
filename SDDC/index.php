<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
	<link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<?php include('dbconn.php'); ?>
</head>

<body>
<nav class="navbar navbar-expand-xxl navbar-dark " style="background-color: #027e8f">
        <div class="container-fluid">
          <a class="navbar-brand" href="main.php"> <h1 class="text-white">SDDC</h1></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleXxl" aria-controls="navbarsExampleXxl" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar-collapse collapse" id="navbarsExampleXxl" >
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="main.php"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><b>About</b></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownXxl" data-bs-toggle="dropdown" aria-expanded="false"><b>Diseases</b></a>
                <ul class="dropdown-menu dropdown-menu-dark rounded-3" >
                  <li><a class="dropdown-item rounded-3" href="#">disease 1</a></li>
                  <li><a class="dropdown-item rounded-3" href="#">disease 1</a></li>
                  <li><a class="dropdown-item rounded-3" href="#">disease 1</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <br>
    <br>
    <br>

	<div class="container">
  <section>

	<center>

	   <form id="login_form"  method="post">
        <h3>Please Login</h3>
        <label for="">Username</label><br/>
        <input type="text"  id="username" name="username" placeholder="Username" required><br><br>
        <label for="">Password</label><br/>
        <input type="password" id="password" name="password" placeholder="Password" required><br><br>
        <button name="login" type="submit">Log in</button>
		
		      </form>
				<script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome Back!", { header: 'Access Granted' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'main.php'  }, delay);  
						}
						else
						{
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
						}
						}
						
					});
					return false;
				});
			});
			</script>  

  

		
		<br>
		
		<hr>
		if you do not have any acount 
        <a href="register.php" class="btn btn-danger fw-bold" >Register here</a>

			
<br>
</center>
    </section>
<?php include('scripts.php');?>
</div>
<br>
    <br>
<?php include('footer.php');?>
</body>
</html>