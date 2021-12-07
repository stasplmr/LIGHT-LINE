<?php
$servername = "127.0.0.1";
$username = "mysql";
$password = "";
$database = "lightline_db";

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
 ?>
