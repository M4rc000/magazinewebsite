<?php
session_start();
if(isset($_SESSION["login"])){
  header("Location: index.php");
  exit;
}

require 'functions.php';

if (isset($_POST["submit"])){
  if($_POST["username"])
    if (registrasi($_POST) > 0){
      echo "
      <script> 
          alert('New User Success Registered');
      </script>
      ";
      header("Location: login.php");
    }
}

pg_close($con);
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up | Magazine Website</title>
    <link rel="shorcut icon" href="logo.ico" />
    <link rel="stylesheet" href="signup.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  </head>
  <body>
         <!--------------- HERO -------------------->
    <div class="hero">
        <img src="bg-login.jpg" alt="" />
      </div>
      <!---------------- END OF HERO ------------>
      <div class="container">
          <div class="mb-3">
            <span> <h1>Sign Up</h1></span>
          </div>
          <br>
          <form action="signup.php" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" name="fname" required autofocus class="form-control" placeholder="First Name" id="email" aria-describedby="emailHelp" />
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"></label>
            <input type="text" name="lname" required class="form-control" placeholder="Last Name" id="password" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"></label>
            <input type="text" name="username" required class="form-control" placeholder="Username" id="password" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"></label>
            <input type="text" name="email" required class="form-control" placeholder="Email" id="password" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"></label>
            <input type="password" name="password" required class="form-control" placeholder="Password" id="password" />
          </div>
          <button type="submit" name="submit" id="submit" class="btn btn-primary">Sign Up</button>
          </form>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  </body>
</html>
