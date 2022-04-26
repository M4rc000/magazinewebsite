<?php
session_start();
if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

require 'functions.php';

$nomor = $_GET["nomor"];

$result = query("SELECT * FROM rate WHERE nomor = $nomor")[0];

if( isset($_POST["submit"]) ) {

    if( ubah($_POST) > 0 ) {
        echo "
                <script> 
                    alert('Review Data Successfully Changed')
                    document.location.href = 'reviews.php'
                </script>
            ";
    } else {
        echo "
            <script> 
                alert('Review Data Failed Change')
                document.location.href = 'edit.php'
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Review | Magazine Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      body{
        background-image: url(bg-getreview.jpg);
      }
    </style>
  </head>
<body>
    <br>
<div class="container">
<form class="row g-3" action="" method="post">
    <input type="hidden" name="nomor" value="<?= $result["nomor"]?>">
  <div class="col-md-2">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" name="fname" required class="form-control" id="validationDefault01" placeholder="First Name" required value="<?= $result["fname"]?>">
  </div>
  <div class="col-md-2">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" name="lname" required class="form-control" id="validationDefault02" placeholder="Last Name" required value="<?= $result["lname"]?>">
  </div>
  <div class="col-md-2">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" name="username" required class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required value="<?= $result["username"]?>">
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Select a Film</label>
    <select class="form-select" id="validationDefault04" name="filmname" required>
      <option selected disabled value="">Ip Man</option>
      <option><?= $result["filmname"] ?></option>
      <option>Ip Man 2008</option>
      <option>Ip Man 2 2010</option>
      <option>Ip Man 3 2015</option>
      <option>Ip Man 4 The Finale 2019</option>
      <option selected disabled value="">Naruto</option>
      <option>Naruto Eps 1 2002</option>
      <option>Naruto Eps 2 My Name Is Konohamaru 2002</option>
      <option>Naruto Eps 3 2002</option>
      <option>Naruto Eps 4 Pass or Fail: Survival Test 2002</option>
      <option selected disabled value="">Spongebob Squarepants</option>
      <option>Spongebob Squarepants: Sandy is Nutty Nieces/Insecurity Guards</option>
      <option>Spongebob Squarepants: Broken Alarm/Karen is Baby</option>
      <option>Spongebob Squarepants: Cave Dwelling Sponge</option>
      <option>Spongebob Squarepants: Squirrel Jelly/The String</option>
      <option selected disabled value="">Harry Potter</option>
      <option>Harry Potter and the Chamber of Secrets</option>
      <option>Harry Potter and the Goblet of Fire</option>
      <option>Harry Potter and the Philosopher is Stone</option>
      <option>Harry Potter and the Prisoner of Azkaban</option>
      <option selected disabled value="">Choose One</option>
    </select>
  </div>

  <div class="col-md-2">
    <label for="validationDefaultUsername" class="form-label">Rate Score</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">Point 1-10</span>
      <input type="number" required class="form-control" id="validationDefaultUsername" name="score"  aria-describedby="inputGroupPrepend2" required value="<?= $result["score"]?>">
    </div>
  </div>

  <div class="mb-1">
  <label for="exampleFormControlTextarea1" class="form-label">Opinions</label>
  <textarea class="form-control" name="opinion" required id="exampleFormControlTextarea1" rows="3"><?= $result["opinion"] ?></textarea>
  </div>
  <div class="col-6">
    <div class="form-check">
      <input class="form-check-input"required type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Sure to Save this review
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" id="liveToastBtn" name="submit" type="submit">Submit Data</button>
  </div>
</form>
</div>
</body>
</html>