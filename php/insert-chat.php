<?php 
    session_start();
    if(isset($_SESSION['uniqueid'])){
        include_once "config.php";
        $outgoing_msgid = $_SESSION['uniqueid'];
        $courseid = mysqli_real_escape_string($conn, $_POST['courseid']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = $conn->prepare("INSERT INTO messages (courseid, outgoing_msgid, msg)
            VALUES (?, ?, ?)");
            $sql->bind_param("sss", $courseid, $outgoing_msgid, $message);
            $sql->execute();
        }
    }else{
        header("location: ../login.php");
    }  
?>