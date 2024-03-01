<?php 
session_start(); 
include "../Config/db_con.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ./Login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ./Login.php?error=Password is required");
	    exit();
	}else{
		$admin_pass = $pass;
        $pass = md5($pass);
		

		$sql1 = "SELECT * FROM users WHERE Username='$uname' AND Password='$pass'";

		$result1 = mysqli_query($conn, $sql1);



		if (mysqli_num_rows($result1) === 1) {
			$row1 = mysqli_fetch_assoc($result1);
            if ($row1['Username'] === $uname && $row1['Password'] === $pass) {
            	$_SESSION['Username'] = $row1['Username'];
            	$_SESSION['Name'] = $row1['Name'];
            	$_SESSION['UserID'] = $row1['UserID'];
            	header("Location: ../index.php");
		        exit();
            }else{
				header("Location: ./Login.php?error=Incorect name or password");
		        exit();
			}
		}else{
			header("Location: ./Login.php?error=Incorect name or password");
	        exit();
		}
	}
	
}else{
	header("Location: ./Login.php");
	exit();
}