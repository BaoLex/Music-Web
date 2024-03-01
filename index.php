<?php
session_start();
include "./Config/db_con.php";
?>

<html>

<head>
    <title> Music Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="./Image/logo.png" class="logo">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="./User/Top.php">TOP 5</a></li>
                <li><a href="./User/Song.php">PRODUCTS</a></li>
                <?php if (isset($_SESSION['UserID']) && isset($_SESSION['Name'])) { ?>
                    <li><a href="./User/MySong.php">MY SONG</a></li>
                <?php } ?>
                <li>
                    <?php if (isset($_SESSION['UserID']) && isset($_SESSION['Name'])) { ?>
                        <a href="./User/Logout.php">LOGOUT</a>
                    <?php } else { ?>
                        <a href="./User/Login.php">CONNECT</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="left-col">
                <h1>THE<br>REAL<br>SOUND</h1>
            </div>
            <div class="right-col"></div>
            <p>Click Here to Listen</p>
            <img src="./Image/play.png" id="icon">
        </div>
    </div>

    </div>
    <audio id="mySong">
        <source src ="song.mp3.mp3" type="audio/mp3">
    </audio>
    <script>
        var mySong = document.getElementById("mySong");
        var icon = document.getElementById("icon");

        icon.onclick = function() {
            if (mySong.paused) {
                mySong.play();
                icon.src = "./Image/pause.png";
            } else {
                mySong.paused();
                icon.src = "./Image/play.png";
            }
        }
    </script>
</body>

</html>