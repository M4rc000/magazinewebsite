<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Videos | Magazine Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image: url(bg-videos.jpg)">
<nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="margin-left: 30rem;--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Stories.php">Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reviews.php">Reviews</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
  <br>
<h2>Videos</h2>
<br><br>
 <div class="ipman">
   <div class="ipman1">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/aiadWHukunk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="ipman2">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/gaBdgu00otE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="ipman3">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/yo7z8c87Egg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="ipman4">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/oCBGTCNJW2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
 </div>

 <div class="spongebob">
   <div class="spongebob1">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/XJ2KJ6i2zdE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="spongebob2">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/kxKtz8HXSzA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="spongebob3">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/Iumb9BHBK2I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="spongebob4">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/phUSAetn79Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
 </div>

 <div class="naruto">
   <div class="naruto1">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/o8uml6I5Uyk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="naruto2">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/NjA4VF7cACY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="naruto3">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/mBCw4c8oH9k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="naruto4">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/5DsjK-2h5xg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
 </div>
 
 <div class="harrypotter">
   <div class="harrypotter1">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/T-Yi49pHlEo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="harrypotter2">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/Yvxmq9j78MA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="harrypotter3">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/x4hyAAV1kwQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <div class="harrypotter4">
   <iframe width="950" height="350" src="https://www.youtube.com/embed/lAxgztbYDbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
 </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
