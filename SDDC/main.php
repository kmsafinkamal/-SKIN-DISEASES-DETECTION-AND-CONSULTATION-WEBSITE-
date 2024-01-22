<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="box.css">
    <title></title>
  </head>
  <body>

<!-- Nav and header start form here -->
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
                <a class="nav-link" href="about.php"><b>About</b></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownXxl" data-bs-toggle="dropdown" aria-expanded="false"><b>Diseases</b></a>
                <ul class="dropdown-menu dropdown-menu-dark rounded-3">
                            <li><a class="dropdown-item rounded-3" href="melanocytic.php">Melanocytic Nevus</a></li>
                            <li><a class="dropdown-item rounded-3" href="melanoma.php">Melanoma</a></li>
                            <li><a class="dropdown-item rounded-3" href="psoriasis.php">Psoriasis</a></li>
                            <li><a class="dropdown-item rounded-3" href="seborheic_keratosis.php">Seborheic Keratosis</a></li>
                </ul>
              </li>
            </ul>
            <form action="search.php" method="GET">
    <input class="form-control" type="text" name="query" placeholder="Search" aria-label="Search" size="30">
</form>
            <ul class="navbar-nav ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownXxl" data-bs-toggle="dropdown" aria-expanded="false"><b style="border: 1px solid; border-radius: 4px; padding: 10px;">PROFILE</b></a>
                <ul class="dropdown-menu dropdown-menu-dark rounded-3" >
                  <li><a class="dropdown-item rounded-3" href="profile.php">Your Profile</a></li>
                  <li><a class="dropdown-item rounded-3 bg-danger" href="logout.php">Log Out</a></li>
                </ul>
              </li>
          </ul>
          </div>
        </div>
    </nav>


<!-- main content start from here -->
<!-- EDC05F -->
  <div class="container-fluid p-4 p-md-5 mb-4 text-dark" style=" background-image: url(image/banner2.jpg); background-repeat: no-repeat; background-size:cover;">
    <div class="col-md-8 px-0">
      <h1 class="display-4 "><b>Welcome To <br> Skin Disease Detection and Consultation</b></h1>
      <p class="lead my-3">Accurate Detection and Expert Consultation on our State-of-the-Art Skin Disease Platform.<br><b> Seamless Skin Disease Detection and Personalized Consultation at Your Fingertips!</b></p>
      <p class="lead mb-0"><a href="about.php" class="btn btn-danger fw-bold">Continue reading...</a></p>
    </div>
  </div>

<div class="container-fluid">
  <div class="row featurette">
    <div class="col-md-5"  style=" background-image: url(image/testing.jpg); background-repeat: no-repeat; background-size:cover;">
      <!-- <img  class="img-fluid"  width="1000px" src="image/testing.jpg" alt="" style="height: auto; background-size:cover;"> -->
    </div>
    <div class="col-md-2 p-1">
      <a href="http://127.0.0.1:5000/" class="no-change">
      <div class="feature-box box1">
        <img class="img-fluid" width="370" height="300" src="image/detection.jpg" alt="">
        <br>
        <br>
        <h3>AI Detection</h3>
        <center><hr width = 40% color=black></center>
        <p>Detect and identify skin diseases with our advanced system.</p>
    </div>
    </a>
    </div>
    <div class="col-md-2 p-1">
      <a href="chat.php" class="no-change">
      <div class="feature-box box2">
        <img class="img-fluid" width="370" height="300" src="image/consultation.png" alt="">
        <br>
        <br>
        <h3>Consultation</h3>
        <center><hr width = 40% color=black></center>
        <p>Get professional medical consultations for your skin concerns.</p>
    </div>
    </a>
    </div>
    <div class="col-md-2 p-1">
      <a href="home.php" class="no-change">
      <div class="feature-box box3">
        <img class="img-fluid" width="370" height="300" src="image/posts.png" alt="">
        <br>
        <br>
        <h3>Post</h3>
        <center><hr width = 40% color=black></center>
        <p>Share your experiences and insights with the community.</p>
    </div>
     </a>
    </div>
    <div class="col-md-1 p-4" style=" background-image: url(image/option.png); background-repeat: no-repeat; background-size:cover;" ></div>
  </div>
</div>



<!-- footer start form here -->
    <div class="mt-5 pt-5 pb-5 footer" style="background-color: #027e8f">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xs-12 about-company">
            <h1 class="pr-5 text-white">SDDC</h1>
            <p class="pr-5 text-white-50">A user friendly website that all want.</p>
            <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
          </div>
          <div class="col-lg-4 col-xs-12  links">
            <h4 class="mt-lg-0 mt-sm-3 text-white ">Creator</h4>
              <ul class="m-0 p-0 text-white-50">
                <li>- K. M. Safin Kamal</li>
                <li>- Mysha Maliha Priyanka</li>
              </ul>
          </div>
          <hr>
          <div class="col copyright">
            <p class=""><small class="text-white-50">© 2023. All Rights Reserved to SAFIN & MYSHA.</small></p>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>
