<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    if(!empty($fname) && !empty($lname)){
        $sql = mysqli_query($conn, "UPDATE users SET fname = '{$fname}', lname = '{$lname}' WHERE uniqueid = '{$_SESSION["uniqueid"]}'");
    }
?>