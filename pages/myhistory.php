<!-- prodcuts section starts  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<?php include "../component/header.php"; ?>
<link rel="stylesheet" href="../css/style.css">
<style>
    
     #bgco{
        color:#dfd4cf;
    } 
    .body{
        background:#dfd4cf; 
    }
    .card{
        margin-top:30px;
        margin-left:40px;
        display:inline-block;
        background:#cbc3be;
        height:440px;
        border-radius:15px;
        margin-bottom: 10px;
        
    }
    #but{
        border:1px blue solid;
        margin-left:124px;
        border-radius:5px;
        margin-top:5px;
        width:100px;
        background:green;
        color:white;
    }
    input{
        border:1px blue solid;
        padding:5px;
        margin: 10px;
        border-radius:5px;
        width:150px;

    }
    label{
        width:110px;
        display:inline-block;
        text-align:right;
        font-size:14px;
        color:blue;
    }
    .img{
        padding:10px;
        margin-left:42px;
    }
    #but{
        border:1px blue solid;
        margin-left:124px;
        border-radius:5px;
        margin-top:5px;
        width:100px;
        height:30px;
        background:green;
        color:white;
    }
</style>

<section class="about" id="about">
<h1 class="heading"> <span> My </span> History </h1>

<div class="body">

<?php
 if(isset($_SESSION['loginuser']) == TRUE){
    include("../database/connection.php");
    $uid = $_SESSION['loginuser'];
    
    $sql  = "SELECT * from history where uid = '$uid' ORDER BY date_ordered DESC";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            ?>
    <div class="card">
        <div class="card_image">

        <?php 
        $product=$row['pid'];
        $query = "Select image from product where id = $product";
        $res = $conn->query($query);
        $row2 = $res->fetch_assoc();
        ?>

        <img src="../images/<?php echo $row2['image']; ?>" height="200px" width="200px" value="photo" class="img" ><br>
        <input type="hidden" value="<?php echo $row2['image']; ?>" readonly="readonly" name="image" >
        </div>
        <div class="card_body">
            <input type="hidden" value="<?php echo $row['pid']; ?>" name="pid">
            <!-- <input type="hidden" value="<?php echo $row['stock']; ?>" name="stock"> -->
        <label for="name">Name :</label>
         <input type="text" value="<?php echo $row['name']; ?>" name="name" readonly="readonly"><br>
         <label for="name">Price :</label>
         <input type="text" value="<?php echo $row['price'];  ?> " name="price" readonly="readonly"><br>
         <label for="name">Ordered :</label>
         <input type="text" value="<?php echo $row['ordered'];  ?> " name="ordered" readonly="readonly"><br>
         <label for="name">Date Ordered :</label>
         <input type="text" value="<?php echo $row['date_ordered']; ?>" name="date_ordered" readonly="readonly"><br>
         <label for="name">Status :</label>
         <input type="text" value="<?php echo $row['status']; ?>" name="status" readonly="readonly"><br>

        </div>
        
</div>
<?php
}
        }else{
        echo "<h2>No Records Found.</h2>";
        }
        }else{
            echo "<h2> You must login to see your History. </h2>";
        }
 
?>
</div>
</section>










