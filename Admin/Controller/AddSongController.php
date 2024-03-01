<?php 
session_start(); 
include "../db_con.php";

if (isset($_POST['song']) && isset($_POST['singer']) && isset($_POST['category'])) {

    $song = $_POST['song'];
    $singer = $_POST['singer'];
    $cat = $_POST['category'];

    if (empty($song)) {
		header("Location: ../Views/AddSong.php?error=Song is required");
	    exit();
	} else if(empty($singer)){
        header("Location: ../Views/AddSong.php?error=Singer is required");
	    exit();
    } else if(empty($cat)){
        header("Location: ../Views/AddSong.php?error=Category is required");
	    exit();
    } else {
        $sql = "SELECT * FROM song WHERE Name = '$song'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../Views/AddSong.php?error=This song is available");
	        exit();
		}else {
           	$sql2 = "INSERT INTO song(Name, Singer, Category) VALUES('$song', '$singer', '$cat')";
           	$result2 = mysqli_query($conn, $sql2);
           	if ($result2) {
                header("Location: ../Views/AddSong.php?success=Your account has been created successfully");
                exit();
           	}else {
	           	header("Location: ../Views/AddSong.php?error=unknown error occurred&$user_data");
		        exit();
           	}
		}
    }
}else{
	header("Location: ../Views/AddSong.php");
	exit();
}