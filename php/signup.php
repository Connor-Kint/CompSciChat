<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{
                $ran_id = rand(time(), 100000000);
                $encrypt_pass = md5($password);

                $insert_query = $conn->prepare("INSERT INTO users (fname, lname, email, password, prof, uniqueid)
                VALUE (?, ?, ?, ?, ?, ?)");

                $prof = "0";

                $insert_query->bind_param("ssssss", $fname, $lname, $email, $encrypt_pass, $prof, $ran_id);

                $insert_query->execute();

                if ($insert_query) {
                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if(mysqli_num_rows($select_sql2) > 0) {
                        $result = mysqli_fetch_assoc($select_sql2);
                        $_SESSION['uniqueid'] = $result['uniqueid'];
                        echo "success";
                    } else {
                        echo "This email address does not exist";
                    }
                } else {
                    echo "Something went wrong, Please try again!";
                }
            }
        }
    }
?>