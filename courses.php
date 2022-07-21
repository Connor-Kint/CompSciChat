<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>
<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php
                    include_once "php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname']?></span>
                        <p><?php echo $row['status']?></p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <!-- <div class="search">
                <span class="text">Select a course to start chatting</span>
                <input type="text" placeholder="Enter course code to search">
                <button type="button">search</button>
            </div> -->
            <div class="users-list">
                
            </div>
        </section>
    </div>

    <script src="javascript/courses.js"></script>

</body>

    