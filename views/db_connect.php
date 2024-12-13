<?php
$host = "localhost";
$username = "root";
$db = "sallegym"; 
$pass = "";


$conn = mysqli_connect($host , $username ,$pass, $db);

if (mysqli_connect_errno()){
    die("connection filed : " . mysqli_connect_error()); 
}else{

    echo "database connect";

}

?>