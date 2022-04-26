<?php
session_start();
if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}


$con = pg_connect("host=localhost dbname=magazineDB user=postgres password=marco ") or die ("Couldn't connect to Server\n");
$result1 = pg_query($con, "SELECT * FROM ipman ORDER BY judul ASC");
$result2 = pg_query($con, "SELECT * FROM naruto ORDER BY judul ASC");
$result3 = pg_query($con, "SELECT * FROM spongebob ORDER BY judul ASC");
$result4 = pg_query($con, "SELECT * FROM harrypotter ORDER BY judul ASC");


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="shorcut icon" href="logo.ico">
    <link href="bootstrap.css" />
    <link rel="stylesheet" href="Stories.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Stories | Prime</title>
  </head>
  <body>
    <section>
      <div class="card text-center fixed-top" style="align-items: center; margin-left: -10rem; background-color: rgb(24, 22, 22)">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link" aria-current="true" href="index.php" style="width: 15px; height: 5px; margin-left: -19rem; margin-top: -25px"
                ><img src="logo.png" alt="Prime" style="width: 83px; height: 30px; margin-top: 15px; margin-left: 1rem"
              /></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="true" href="#ipman" style="color: white">Ip Man</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#naruto" style="color: white">Naruto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#spongebob" style="color: white">Spongebob Squarepants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#harrypoter" style="color: white">Harry Poter</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!------- END OF NAVBAR ------->

    <!------ DARK/ LIGHT MODE BUTTON   -->
      <div class="dark-mode">
        <button id="dark" style=" position: fixed;"><i class="bi bi-moon-stars" style="width: 50px; color: white;  position: fixed;"></i></button>
      </div>

    <!------ END OF DARK/ LIGHT MODE BUTTON   -->

      <!------ Card ----->
      <br />
      
      <!-- Ip Man -->
      <div class="ipman" id="ipman"><h3>Ip Man</h3></div>
      <br /><br />
      <?php while($row = pg_fetch_assoc($result1)) :?>
      <div class="card mb-3" style="max-width: 540px; float: left">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="ipman1.jpg" class="img-fluid rounded-start" alt="..." />
          </div>
          <div class="col-md-8">
            <div class="card-body bg-dark" style="height: 263px; opacity: 0.9">
              <h5 class="card-title"><?= $row["judul"] ?></h5>
              <p class="card-text"><?= $row["subjudul"] ?> - <a style="color: #dc3545;" href="getReview.php">Give Review <i class="bi bi-box-arrow-right"></i></a></p>
              <p class="card-text"><?= $row["waktu"] ?></p>
              <p class="card-text">
                <small class="text-muted"
                  ><?= $row["kalimatpendek"] ?></small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      
      <!-- Naruto -->
      <div class="naruto" id="naruto"><h3>Naruto</h3></div>
      <?php while($row = pg_fetch_assoc($result2)) :?>
      <div class="card mb-3" style="max-width: 540px; float: left; margin-top: 8rem; margin-bottom : -6.5rem !important;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="narutos1-1.jpg" class="img-fluid rounded-start" alt="..." />
          </div>
          <div class="col-md-8">
            <div class="card-body bg-dark" style="height: 263px; opacity: 0.9">
              <h5 class="card-title"><?= $row["judul"] ?></h5>
              <p class="card-text"><?= $row["subjudul"] ?> - <a style="color: #dc3545;" href="getReview.php">Give Review  <i class="bi bi-box-arrow-right"></i></a></p>
              <p class="card-text"><?= $row["waktu"] ?></p>
              <p class="card-text">
                <small class="text-muted"><?= $row["kalimatpendek"] ?></small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    
   
      <!-- Spongebob -->
      <div class="spongebob" id="spongebob"><h3>Spongebob Squarepants</h3></div>
      <br /><br /><br /><br /><br /><br /><br />
      <?php while($row = pg_fetch_assoc($result3)) :?>
      <div class="card mb-3" style="max-width: 540px; float: left">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="spongebob.jpg" class="img-fluid rounded-start" alt="..." />
          </div>
          <div class="col-md-8">
            <div class="card-body bg-dark" style="height: 263px; opacity: 0.9">
              <h5 class="card-title"><?= $row["judul"] ?></h5>
              <p class="card-text"><?= $row["subjudul"] ?> - <a style="color: #dc3545;" href="getReview.php">Give Review  <i class="bi bi-box-arrow-right"></i></a></p>
              <p class="card-text">
                <small class="text-muted"
                  ><?= $row["kalimatpendek"] ?></small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
       
    <!-- Harry Poter -->
    <div class="harrypoter" id="harrypoter"><h3>Harry Poter</h3></div>
    <br /><br />
    <?php while($row = pg_fetch_assoc($result4)) :?>
    <div class="card mb-3" style="max-width: 540px; float: left">
      <div class="row g-0">
        <div class="col-md-4">
            <img src="harrypoter1-1.jpg" class="img-fluid rounded-start" alt="..." style="height: 269px" />
          </div>
          <div class="col-md-8">
            <div class="card-body bg-dark" style="height: 269px; opacity: 0.9">
              <h5 class="card-title"><?= $row["judul"] ?></h5>
              <p class="card-text"><?= $row["subjudul"] ?> <?= $row["waktu"] ?> - <a style="color: #dc3545;" href="getReview.php">Give Review  <i class="bi bi-box-arrow-right"></i></a></p>
              <p class="card-text">
                <small class="text-muted"
                  ><?= $row["kalimatpendek"] ?></small
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    <!-- End of card -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="Stories.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
