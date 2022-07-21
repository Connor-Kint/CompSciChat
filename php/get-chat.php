<?php
    session_start();
    if(isset($_SESSION['uniqueid'])) {
        include_once "config.php";
        $outgoing_id = $_SESSION['uniqueid'];
        $course = mysqli_real_escape_string($conn, $_POST['courseid']);
        $output = "";

        $sql = "SELECT * FROM messages WHERE (courseid = '{$course}') ORDER BY msgid ASC";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msgid'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                    <div class="details">
                                        <p>'. $row['msg'] .'</p>
                                    </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                    <div class="details">
                                        <p>'. $row['msg'] .'</p>
                                    </div>
                                </div>';
                }
            }
        } else {
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    } else{
        header("../login.php");
    }
    
?>