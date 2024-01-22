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
	<br><br>
  <section>
    <center>
	<div class="container">
        <h3>Register here</h3>

			<form method="POST" action="signup.php" id="signup">
		
        		<label for="">Username</label><br/>
				<input type="text" name="username" Placeholder="Username here.."><br />
        		<label for="">Password</label><br/>
				<input type="password" name="password" Placeholder="Password here.."><br />
        		<label for="">First Name</label><br/>
				<input type="text" name="firstname" Placeholder="First Name here.."><br />
        		<label for="">Last Name</label><br/>
				<input type="text" name="lastname" Placeholder="Last Name here.."><br />
        <label for="">Age</label><br/>
				<input type="text" name="age" Placeholder="Age here.."><br />
        <label for="">Gender</label><br/>
				<select name="gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br /><br><br />
				<button type="submit" name="save" value="Save">Save</button>
			</form>

			
<br>
</center>
<?php include('scripts.php');?>
</div>
</section>
<?php include('footer.php');?>
</body>
</html>