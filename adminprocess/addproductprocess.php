<?php

include ('../database/connection.php');

$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$stock = $_POST['stock'];


$sql = "INSERT INTO product(name,price,image,stock) VALUES ('$name','$price','$image','$stock')";

if($conn ->query($sql)){
    header('Location:../admin/addproduct.php?msg=Product Added Successfully.');
}else{
    echo "$conn->connect_error";
}

?>
