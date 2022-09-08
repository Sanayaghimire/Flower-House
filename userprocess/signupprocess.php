<?php


$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$p = $_POST['password'];
$image = $_POST['image'];
 

include("../database/connection.php");

$sql= "INSERT INTO user (uname,contact,email,address,password,image) values('$name','$contact','$email','$address','$p','$image')";

if($conn->query($sql)){
    header("Location:../pages/login.php?msg=Successfull Signed Up. ");
}else{
    echo $conn->error;
}

?>