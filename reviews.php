<?php
session_start();
if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

require 'functions.php';

$con = pg_connect("host=localhost dbname=magazineDB user=postgres password=marco ") or die ("Couldn't connect to Server\n");

$result = pg_query($con,"SELECT * FROM rate ");

if( isset($_POST["search"]) ) {
  $result = search($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews Film | Magazine</title>
    <link rel="shorcut icon" href="logo.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav my-0 my-lg-0 navbar-nav-scroll" style="margin-left: 30rem;--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Stories.php">Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="reviews.php">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="videos.php">Videos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container" style="margin-top: 7rem;">
        <h3>Reviews Table</h3>
        <a href="getReview.php" style="text-decoration:none ;">Give Review <i class="bi bi-pen"></i> </a>
        <br>
        <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
        <form class="d-flex" action="" method="post">
         <input class="form-control me-2" name="keyword" size="50" autocomplete="off" autofocus type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" name="search" type="submit">Search</button>
        </form>
        </div>
        </nav>
        <br>
    <table class="table">
  <thead style="font-size: 22px;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Film</th>
      <th scope="col">Username</th>
      <th scope="col">Opinion</th>
      <th scope="col">&nbsp;Score</th>
      <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
    </tr>
  </thead>
  <tbody style="font-size: 19px;">
  <?php while($row = pg_fetch_assoc($result)) :?>
    <tr>
      <td><?= $row["nomor"] ?></td>
      <td><?= $row["filmname"] ?></td>
      <td><?= $row["username"] ?></td>
      <td>&nbsp;&nbsp;<button type="button" style="width:60px !important; height:50px !important;" class="btn btn-lg btn-success" data-bs-toggle="popover" title="Detail Data" data-bs-content="<?= $row["opinion"] ?>"><i class="bi bi-info-circle"></i></button></td>
      <td><?= $row["score"] ?></td>
      <td><a href="edit.php?nomor=<?=$row["nomor"]?>"><button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a> <a href="delete.php?nomor=<?=$row["nomor"]?>" onclick="return confirm('Sure to delete ?')"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>    
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
</script>
</body>
</html>