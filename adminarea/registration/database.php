<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "flogin";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword ,$dbName);
if(!$conn){
    die(" something went wrong");
}
?>