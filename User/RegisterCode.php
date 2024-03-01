<?php 
session_start(); 
include "../config/db_con.php";

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);
	$name = validate($_POST['name']);
	$user_data = 'username='. $username. '&name='. $name;


	if (empty($username)) {
		header("Location: ./Login.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ./Login.php?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: ./Login.php?error=Name is required&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE Username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: Login.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(Username, Password, Name) VALUES('$username', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
                header("Location: ./Login.php?success=Your account has been created successfully");
                exit();
           }else {
	           	header("Location: ./Login.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ./Login.php");
	exit();
}