<?php
session_start();
if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}
require 'functions.php';

$nomor = $_GET["nomor"];

if(hapus($nomor) > 0){
    echo "
    <script> 
        alert('Review Data Successfully Deleted');
    </script>
    ";
    header("Location: reviews.php");
}
else{
    echo "
    <script> 
        alert('Review Data Failed Delete')
        document.location.href = 'delete.php'
    </script>
";
}

?>