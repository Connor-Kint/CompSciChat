<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['uniqueid'])){
    header("location: login.php");
  }
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Comp Sci Chat</title>
        <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
        <?php
            $courseid = mysqli_real_escape_string($conn, $_GET['courseid']);
        ?>
        <div class="wrapper">
            <section class="chat-area">
                <header>
                    <button type="button">Back</button>
                    <div class="details">
                        <span>Connor Kint</span>
                        <p>Active Now</p>
                    </div>
                </header>
                <div class="chat-box">
                    
                </div>
                <form action="#" class="typing-area">
                    <input type="text" class="courseid" name="courseid" value="<?php echo $courseid; ?>" hidden>
                    <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
                    <button>Send</button>
                </form>
            </section>
        </div>
        <script src="javascript/chat.js"></script>
    </body>
</html>
    