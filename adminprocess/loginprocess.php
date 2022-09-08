<?php


$email = $_POST['email'];
$pass = $_POST['password'];

include("../database/connection.php");



    $sql ="SELECT * FROM admin where email='$email'";
    $result =$conn->query($sql);
    if($result->num_rows==1){
		$row=$result->fetch_assoc();
		if($row['password']==$pass){
			$id=$row['id'];
			session_start();
			$_SESSION['loginadmin'] = $id;
			header('Location:../admin/adminhome.php');
			
		}else{
			header("Location:../admin/adminlogin.php?msg=Wrong Password.");
		}
	

	}else{
        header("Location:../pages/login.php?msg=Email not Registered.");
	}





?>