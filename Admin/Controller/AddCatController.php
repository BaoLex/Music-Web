<?php 
session_start();
include "../db_con.php";

if (isset($_POST['category'])) {
    $cat = $_POST['category'];

    if (empty($cat)) {
		header("Location: ../Views/AddCategory.php?error=Category is required&$user_data");
	    exit();
	} else {
        $sql = "SELECT * FROM category WHERE Category_name='$cat' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../Views/AddCategory.php?error=Category is available&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO category(Category_name) VALUES('$cat')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
                header("Location: ../Views/AddCategory.php?success=Category has been created successfully");
                exit();
           }else {
	           	header("Location: ../Views/AddCategory.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
    }
} else {
	header("Location: ../Views/AddCategory.php");
	exit();
}