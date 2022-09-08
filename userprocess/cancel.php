<?php

include('../database/connection.php');

session_start();
$id = $_SESSION['loginuser'] ;
$pid = $_POST['id'];

$sql = "DELETE from cart where id='$pid' AND uid='$id'";

if($conn->query($sql)){
    header("location:../pages/mycart.php");
}else{
    echo $conn->error;
}





?>