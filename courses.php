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
        <div class="wrapper">
            <section class="users">
                <header>
                    <div class="content">
                        <div class="details">
                            <span>Comp Sci Chat</span>
                            <p>Active Now</p>
                        </div>
                    </div>
                    <button href="#" class="logout">Logout</a>
                </header>
                <div class="users-list">
                    <button class="course-button CP476">
                        <div class="content">
                            <div class="details">
                                <p>CP476</p>
                                <p>Internet Computing</p>
                            </div>
                        </div>
                    </button>
                    <button class="course-button CP468" >
                        <div class="content">
                            <div class="details">
                                <p>CP468</p>
                                <p>Artificial Intelligence</p>
                            </div>
                        </div>
                    </button>
                    <button class="course-button CP423">
                        <div class="content">
                            <div class="details">
                                <p>CP423</p>
                                <p>Text Retrieval and Search Engine</p>
                            </div>
                        </div>
                    </button>
                </div>
            </section>
        </div>
        <script src="javascript/courses.js"></script>
    </body>
</html>
    