<?php
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                        <div class="content">
                            <div class="details">
                                <span>'. $row['fname'] . " " . $row['lname'] .'</span>
                                <p>Internet Computing</p>
                            </div>
                        </div>
                        </a>';
    }
?>