<?php

    include('../database/connection.php');
// echo "entered";
session_start();
$uid = $_SESSION['loginuser'];
$data=$_SESSION['cart'];

foreach($data as $arr){
    $id=$arr[3];
    $qty=(int)$arr[4]-(int)$arr[2];
    $name = $arr[0];
    $price = $arr[1];
    $ordered = $arr[2];
    $status = "Pending";
    $date_ordered = date("Y-m-d");
//  echo $id."<br>";
//  echo $qty."<br>";
//  echo $name."<br>";
//  echo $price."<br>";
//  echo $ordered."<br>";
//  echo $status."<br>";
//  echo $date_ordered;
//  die();
    $sql = "UPDATE product SET stock=$qty where id=$id ";
    $sql2 = "INSERT INTO history (name,price,ordered,date_ordered,status,uid,pid) values('$name','$price','$ordered','$date_ordered','$status','$uid','$id')";
    $sql3 = "DELETE FROM cart WHERE name='$name' AND uid='$uid'";
    if($conn->query($sql)){
        if($conn->query($sql2)){
            if($conn->query($sql3)){
                header("location:../pages/mycart.php?Paid Successfully.");
            }else{
                echo $conn->error;
            }
        }else{
            echo $conn->error;
        }
    }else{
        echo $conn->error;
    }
    
}
unset($_SESSION['cart']);




?>