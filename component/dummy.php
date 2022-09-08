<?php include "../component/header.php"; ?>

 <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="../css/style.css">
<!-- about section starts  -->
<style>
   
    table{
        width:1150px;
        border: 2px solid black;
        text-align:center;
        margin-bottom:0;
        background:#F6E3BA;
        border-radius:10px 10px 0px 0px;
    }
    .details th{
        font-size:18px;
        text-align:center;
        border: 2px solid black;
        background:#DFCAA0;
    }
    .bill th{
        width:600px;
        font-size:18px;
        text-align:center;
        border: 2px solid black;
        background:#DFCAA0;
        float:center;
    }
    td{
        padding:10px;
        
    }
    .line{
        
        border-right:2px solid black;
        
    }
    .line2{
        
        color:green;
    }
    #but{
        margin-left:180px;
        margin-top:10px;
        width:80px;
        height:20px;
        background:green;
        color:white;
        border-radius:5px;

    }
    #esewa{
        margin-left:200px;
        margin-top:8px;
        width:150px;
        height:20px;
        background:green;
        color:white;
        border-radius:5px;
    }
    .myform{
        background:red;
        color:red;
        width:50px;
    }
    .foresewa{
        margin-top:0;
        width:500px;
        height:36px;
        background:#DFCAA0;
        border:2px black solid;
        border-radius:0px 0px 10px 10px;

    }
    .bill{
        float:left;
        margin-left:275px;
        
    }
    #cancel{
        color:red;
        background:transparent;
    }
</style>

<section class="about" id="about">

    <h1 class="heading"> <span> All My </span> History </h1>

    <div class="row">

        <div class="content">
            
        <?php
    session_start();
    $uid = $_SESSION['loginuser'];
    include('../database/connection.php');
    $q = "SELECT * from history WHERE uid ='$uid' ORDER BY date_ordered DESC";
    if ($conn->query($q)){
    $result = $conn->query($q);
    
    if($result-> num_rows >0){
        
            ?>

            <table>
                <tr>
                    
                    <th class="line">Flower Name</th>
                    <th class="line">Price (Rs.)</th>
                    <th class="line">Ordered Quantity</th>
                    <th class="line">Total Bill (Rs.)</th>
                    <th class="line">Date Ordered</th>
                    <th>Status</th>
                </tr>
                <?php while($row=$result->fetch_assoc())
        {  ?>
                <tr>
                <td class="line"><?php echo $row['name'];  ?></td>
                <td class="line"><?php echo $row['price'];  ?></td>
                <td class="line"><?php echo $row['ordered'];  ?></td>
                <td class="line"><?php echo  $row['price']*$row['ordered']+75;?></td>
                <td class="line"><?php echo $row['date_ordered'];  ?></td>
                <td class="line2"><?php echo $row['status'];  ?></td>
                </tr>
                <?php } ?>
            </table>
          
            <?php
        
    }else{
        echo "<h2>No Records found<h2>";
    }
}else{
    echo $conn->error;
}
?>

        </div>

    </div>
    
</section>

<!-- about section ends -->