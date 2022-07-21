<?php
  $hostname = "localhost";
  $username = "root";
  $password = "A3rensic";
  $dbname = "compscichat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
    console.log("database error");
  }
?>
