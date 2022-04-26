<?php
session_start();
$con = pg_connect("host=localhost dbname=magazineDB user=postgres password=marco");
$result = pg_query($con,"SELECT * FROM daftar");
$row = pg_fetch_assoc($result);
$_SESSION['username'] = $row['username'];


if( !isset($_SESSION["login"])){
  echo '<style>#logout {display:none;}</style>';
  echo '<style>#user {display:none;}</style>';
}
else{
  echo '<style>#login {display:none;}</style>';
  echo '<style>#signup {display:none;}</style>'; 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="bootstrap.css" rel="stylesheet" />
    <link href="index.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" />
    <link rel="shorcut icon" href="logo.ico" />
    <title>Prime | Magazine Website</title>
  </head>
  <body>
    <!-- NAVBAR TOP -->
    <div class="navbartop" style="position: fixed; width: 100%">
      <div class="top">
        <p>
          Bekasi&nbsp;&nbsp;/&nbsp;&nbsp;Oct 19,&nbsp;2021&nbsp;&nbsp;/&nbsp;&nbsp;<i class="bi bi-box-arrow-in-right"></i>&nbsp;&nbsp;<a href="login.php" id="login">Login</a>&nbsp;|&nbsp;<a id="signup" href="signup.php">Sign up</a
          >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
            href=""
            ><i class="bi bi-facebook"></i></a
          >&nbsp;&nbsp;&nbsp;<a href=""><i class="bi bi-twitter"></i></a>&nbsp;&nbsp;&nbsp;<a href=""><i class="bi bi-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><i class="bi bi-envelope"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="user"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;&nbsp;<?= $_SESSION['username'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="logout.php" id="logout">Logout</a> 
        </p>
        
      </div>
      <div class="title" id="title">
        <h1 style="color: red; font-weight: bolder; font-family: serif; font-size: 60px">
          P
          <h2>rime</h2>
        </h1>
      </div>

      <!-- END OF NAVBAR TOP -->

      <!-- NAVBAR -->

      <div class="navbar">
        <br />

        <div class="home"><a href="index.php">Home</a></div>
        <div class="Stories"><a href="Stories.php">Stories</a></div>
        <div class="videos"><a href="videos.php">Videos</a></div>
        <div class="videos"><a href="reviews.php">Reviews</a></div>
        <div class="about"><a href="#footer">About</a></div>
      </div>
    </div>
    <div class="hero">
      <img src="harrypoter.jpg" alt="" />
    </div>

    <!-- END OF NAVBAR -->

    <!-- Footer -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h3>About</h3>
            <p>
            After seeing the very rapid development of the times, Our Prime's Team created a website that contains film documentation and film ratings so that film fans can easily find new films.
            </p>
            <p>Copyright 2021 Prime All rights reserved</p>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- <script src="Magazine.js"></script> -->
  </body>
</html>
