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
                <a class="nav-link dropdown-toggle" href="#" id="dropdownXxl" data-bs-toggle="dropdown" aria-expanded="false"><b>Options</b></a>
                <ul class="dropdown-menu dropdown-menu-dark rounded-3" >
                  <li><a class="dropdown-item rounded-3" href="http://127.0.0.1:5000/">AI detection</a></li>
                  <li><a class="dropdown-item rounded-3" href="chat.php">Consultation</a></li>
                  <li><a class="dropdown-item rounded-3" href="home.php">Post & Comment</a></li>
                </ul>
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