<?php
session_start();
$_SESSION = [];
session_destroy();
session_commit();

header("Location: login.php");
?>