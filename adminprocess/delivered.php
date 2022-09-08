<?php


$id = $_POST['id'];
$pid = $_POST['pid'];


include("../database/connection.php");

$sql = "UPDATE history SET status='Delivered' where hid='$id' AND pid='$pid' ";
if($conn->query($sql)){
    header("location:../admin/seeorders.php?Item Delivered Successfully.");
}else{
    echo $conn->error;
}




?>