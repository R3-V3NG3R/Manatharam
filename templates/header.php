<?php
if(isset($_GET['status']))
{
  if($_GET['status']==1)
  {
    echo "<script>alert('Thank You. Our team will reach you as soon as possible.');</script>";
  }else {
    echo "<script>alert('Something went wrong. Please email us @ mthwcindia@gmail.com');</script>";
  }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Manatharam - Human Welfare Council</title>
    <link rel="shotcut icon" href="assets/images/icon.png">
    <!--STYLES-->
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <script src="assets/scripts/main.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>

    <header class="container-fluid">
      <div class="secondary-header row d-none d-md-block">
        <div class="col-12">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <p class="text-center text-md-right p-0 m-0">
                    <i class="fas fa-phone-alt icon pl-1"></i> 9398499055  <span class="d-inline d-md-none my-0 p-0"><br></span> <i class="fas fa-envelope icon ml-2 mr-1"></i> peetaabhinay@gmail.com
                  </p>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="mainNavBar row bg-white">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-white container-fluid container-lg py-3">
            <a class="navbar-brand d-none d-md-block skewed" href="index.php">
              <img src="assets/images/logo.png" class="img img-fluid" alt="">
            </a>
            <a class="navbar-brand d-inline d-md-none m-0" href="index.php"  style="width:50%;">
              <img src="assets/images/logo-horizontal.png" class="img img-fluid m-0" alt="">
            </a>
            <button class="navbar-toggler ml-auto d-inline" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item <?php if($current=="home") echo"active"; ?>">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php if($current=="about") echo"active"; ?>">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item <?php if($current=="gallery") echo"active"; ?>">
                  <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item" data-toggle="modal" data-target="#joinTeam">
                  <a class="nav-link" href="#">Join Team</a>
                </li>
                <li class="nav-item"  data-toggle="modal" data-target="#getHelp">
                  <a class="nav-link" href="#">Get Help</a>
                </li>
                <li class="nav-item  <?php if($current=="home") echo"contact"; ?>">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <!--  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>--->
              </ul>
              <button class="btn btn-primary nav-donate py-2 ml-2" type="button" name="button" data-toggle="modal" data-target="#DonateUs">Donate Now <i class="fas fa-donate"></i></button>
            </div>
          </nav>
        </div>
      </div>
    </header>
