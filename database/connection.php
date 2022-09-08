<?php


$host = "localhost";
$db = "flowerhouse";
$user = "root";
$password = "";

$conn = new mysqli($host,$user,$password,$db); 
if ($conn -> connect_error) {
    echo "$conn->connect_error";
}

?>