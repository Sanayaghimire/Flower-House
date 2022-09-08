<?php
    include("../database/connection.php");
    session_start();
    if(isset($_SESSION['loginuser']) == TRUE){
        $id = $_SESSION['loginuser'];


        $rate = $_POST['rate'];
        $review = $_POST['review'];
        $pid = $_POST['pid'];


        $sql = "select total_rating, total_rater from product where id = $pid";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $a = $row['total_rating']+$rate;
        $b = $row['total_rater']+1;
        $c = $a/$b;

        $sql1 = "Update product set rating = $c, total_rating = $a, total_rater= $b where id=$pid";
        $conn ->query($sql1);
        header('location:../pages/product.php?msg=Rated Successfully');


    }else{
        header('location:../pages/login.php?msg=You must sign in first');
    }

?>