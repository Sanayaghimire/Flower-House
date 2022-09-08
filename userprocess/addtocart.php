<?php

include('../database/connection.php');

session_start();

if(isset($_SESSION['loginuser']) == TRUE){
    
$id = $_SESSION['loginuser'];
$pid = $_POST['pid'];
$name = $_POST['name'];
$price = $_POST['price'];
$order = $_POST['order'];
$stock = $_POST['stock'];
$action = $_POST['action'];


if($action == 'cart'){

if(!isset($_SESSION['cart'])){
    $newData=array($name,$price,$order,$pid,$stock);
    $cart=array();
    array_push($cart,$newData);

    $_SESSION['cart']=$cart;
    
}else{
    
    $cart=$_SESSION['cart'];
    $newData=array($name,$price,$order,$pid,$stock);
   array_push($cart,$newData);
   $_SESSION['cart']=$cart;
    print_r($_SESSION['cart']);
    
}



$sql = "INSERT INTO cart (name,price,ordered,uid) values('$name','$price','$order',$id)";

if($conn->query($sql)){
    header('Location:../pages/product.php?msg=Added To Cart Successfully.');
}else{
    echo $conn->error;
}
}elseif($action == 'rate'){
    ?>
    
    
<?php
}
}else{
    header('location:../pages/login.php?msg=You must sign in first');
}


?>