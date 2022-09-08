<?php

include('../database/connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];



if($_POST['action'] == 'update'){

    $sql = "UPDATE product set name = '$name',price =$price,stock=$stock where id=$id";

    if($conn ->query($sql)){
        
        header('Location:../admin/adminproduct.php?msg=updated successfully');

    }else{
        header('Location:../admin/adminproduct.php?msg=price and stock cannot be in alphabet or syntax');
    }
}elseif($_POST['action'] == 'delete'){
    $sql2 = "delete from product where id=$id";
    if($conn ->query($sql2)){
        
        header('Location:../admin/adminproduct.php?msg=Deleted successfully');

    }
}




?>