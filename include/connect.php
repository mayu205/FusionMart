<?php
$servername = "localhost";
$username = "root";
$password = "";
//localhost,username,pswd,database_name

$con=  mysqli_connect("$servername","$username","$password","fusionmart");
if(!$con) {
    die("failed: ".mysqliconnect_error());
      }
    // echo "connnection successful" ;
        
 ?>

