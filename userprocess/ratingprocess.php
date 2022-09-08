<?php

include ('../database/connection.php');

$rating = $_POST['rating'];
$pid = $_POST['pid'];

echo $rating;
echo $pid;


// $sql = "select total_rating, total_rater from product where pid = $pid";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
// $a = $row['total_rating']+$rating;
// $b = $row['total_rater']+1;
// $c = $a/$b;


die();
$sql1 = "Update product set rating = $c, total_rating = $a, total_rater= $b where pid=$pid";


if($conn->query($sql1)){
    header('Location:../pages/myhistory.php?msg=Rated Successfully.');
}else{
    echo "$conn -> connect_error";
}

?>
