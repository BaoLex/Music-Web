<?php 
session_start(); 
include "../db_con.php";

if (isset($_POST['uname']) && isset($_POST['pass'])
    && isset($_POST['name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['pass']);
	$name = validate($_POST['name']);
	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: ../Views/AddUser.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ../Views/AddUser.php?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: ../Views/AddUser.php?error=Name is required&$user_data");
	    exit();
	}

	else{

        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE Username='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../Views/AddUser.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           	$sql2 = "INSERT INTO users(Username, Password, Name) VALUES('$uname', '$pass', '$name')";
           	$result2 = mysqli_query($conn, $sql2);
           	if ($result2) {
                header("Location: ../Views/AddUser.php?success=Your account has been created successfully");
                exit();
           	}else {
	           	header("Location: ../Views/AddUser.php?error=unknown error occurred&$user_data");
		        exit();
           	}
		}
	}
	
}else{
	header("Location: ../Views/AddUser.php");
	exit();
}