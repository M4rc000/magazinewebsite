<?php
$con = pg_connect("host=localhost dbname=magazineDB user=postgres password=marco") or die ("Couldn't connect to Server\n");


function query($query) {
    global $con;
    $result = pg_query($con,$query);
    $rows  = [];
    while( $row = pg_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data){
    global $con;
    
    $fname = $data['fname'];
    $lname = $data['lname'];   
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];

    $cekUsername = pg_query($con,"SELECT * FROM daftar WHERE username = '$username'");

if(pg_fetch_assoc($cekUsername) ){
        echo "
        <script>
        alert('Username already exist');
        </script>
        ";
        return false;  
}
    $result = pg_query($con,"INSERT INTO daftar VALUES ('$fname','$lname','$username','$email','$password')");
    $cmdtuples = pg_affected_rows($result); 
    return $cmdtuples;
}

function getReview($data){
    global $con;

    $fname = $data['fname'];
    $lname = $data['lname'];
    $username = $data['username'];
    $filmname = $data['filmname'];
    $score = $data['score'];
    $opinion = $data['opinion'];

    $result = pg_query($con,"INSERT INTO rate VALUES (DEFAULT,'$fname','$lname','$username','$filmname','$score','$opinion')");
    $cmdtuples = pg_affected_rows($result); 
    return $cmdtuples;
}

function ubah($data) {
    global $con;
    $nomor = $data["nomor"];
	$fname = htmlspecialchars($data["fname"]);
	$lname = htmlspecialchars($data["lname"]);
	$username = htmlspecialchars($data["username"]);
	$filmname = $data["filmname"];
	$score = htmlspecialchars($data["score"]);
	$opinion = htmlspecialchars($data["opinion"]);

    $result = pg_query($con,"UPDATE rate SET
    fname = '$fname',
    lname = '$lname',
    username = '$username',
    filmname = '$filmname',
    score = '$score',
    opinion = '$opinion'
    WHERE nomor = $nomor");
    $cmdtuples = pg_affected_rows($result);
    return $cmdtuples;
}


function hapus($nomor){
    global $con;

    $result = pg_query($con,"DELETE FROM rate WHERE nomor = $nomor");
    $cmdtuples = pg_affected_rows($result); 
    return $cmdtuples;
}


function search($keyword) {
    global $con;

    $query = "SELECT * FROM rate 
            WHERE 
            filmname LIKE '%$keyword%'
            ";
    $result = pg_query($con, $query);
    return $result;
}
