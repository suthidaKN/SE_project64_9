<?php

$servername = "localhost";
$username = "SE_64";
$password = "address";
$dbname = "se_64";   
$conn = new mysqli($servername,$username,$password);
mysqli_set_charset($conn, "utf8");
if($conn -> connect_error){
    die("Connection failed: ".$conn->connect_error);
}
if(!$conn->select_db($dbname)){
    die("Connection failed : ".$conn->connect_error);
}
?>