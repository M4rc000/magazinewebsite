<?php
session_start();
if(isset($_SESSION["login"])){
  header("Location: index.php");
  exit;
}

require 'functions.php';

if (isset($_POST["submit"])){
  
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = pg_query($con,"SELECT * FROM daftar WHERE username = '$username'");

  if(pg_num_rows($result) == 1){
    $row = pg_fetch_assoc($result);

    if ($password == $row["psswrd"]){
      echo "Login Successfully";
      $_SESSION['username'] = $row['username'];
      $_SESSION["login"] = true;
      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}

pg_close($con);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Magazine Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="login.css" />
    <link rel="shorcut icon" href="logo.ico" />
  </head>
  <style>
   body, html {
   height: 100%;
   margin: 0;
   }

   .hero {
    /* The image used */
    background-image: url("bg-login.jpg");

    /* Full height */
    height: 800px; 

     /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    .container {
     width: 752px;
     height: 400px;
     text-align: center;
     position: absolute;
     margin-top: -40rem;
     margin-left: 26rem;
     border-radius: 20%;
     }
</style>
  <body>
    <!--------------- HERO -------------------->
    <div class="hero">
    </div>
    <!---------------- END OF HERO ------------>
    <div class="container">
        <div class="mb-3">
          <span> <h1>Login</h1></span>
        </div>
      <form action="login.php" method="post">
        <br>
        <br>
        <br>
        <input style="text-align:center;" type="text" id="username" name="username" required autofocus placeholder="     Username">
        <br>
        <br>
        <input style="text-align:center;" type="password" id="password" name="password" required autofocus placeholder="    Password">
        <br>
        <br>
        <button type="submit" name="submit" id="submit">Login</button>
      </form>
      <?php 
      if(isset($error)) : ?>
      <p style="color:red">Username / Password is invalid</p>
      <?php endif; ?>
        <div class="mb-3">
          <br />
          <div class="mb-3">
            <a href="signup.php" id="signup">|Sign Up|</a>
          </div>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
