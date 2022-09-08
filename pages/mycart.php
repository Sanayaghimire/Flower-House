<?php include "../component/header.php"; ?>

 <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="../css/style.css">
<!-- about section starts  -->
<style>
    .main_content{
        display:flex;   
    }
    .details{
        /* display:inline-block; */
        margin-left:50px;
    }
    table{
        width:500px;
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
    #line{
        border-left:2px solid black;
        border-right:2px solid black;
        
    }
    #line2{
        border-right:2px solid black;
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
        height:68px;
        background:#DFCAA0;
        border:2px black solid;
        border-radius:0px 0px 10px 10px;

    }
    .bill{
        float:left;
        margin-left:215px;
        
    }
    #cancel{
        color:red;
        background:transparent;
    }
   
    
</style>

<section class="about" id="about">

    <h1 class="heading"> <span> My </span> Cart </h1>

    </section>

    <div class="main_content">
    <div class="details">
        <?php
    if(isset($_SESSION['loginuser']) == TRUE){      
    $id = $_SESSION['loginuser'] ;
    include('../database/connection.php');
    $q = "SELECT * from cart where uid='$id'"; 
    $p = "SELECT sum(price*ordered) as sum from cart where uid='$id'";
    $total_bill = $conn->query($p);
    if ($conn->query($q)){
    $result = $conn->query($q);
    
    if($result-> num_rows >0){
        
            ?>

            <table>
                <tr>
                    <th>Flower Name</th>
                    <th>Price </th>
                    <th>Ordered Quantity</th>
                    <th>Action</th>
                </tr>
                <?php while($row=$result->fetch_assoc())
        {  ?>
                <tr>
                <td><?php echo $row['name'];  ?></td>
                <td id="line"><?php echo $row['price'];  ?></td>
                <td id="line2"><?php echo $row['ordered'];  ?></td>
                <td><form action="../userprocess/cancel.php" method="post" name="myform">
                        <input type="hidden" value="<?php echo $row['id']?>" name="id">
                        <input type="submit" value="Cancel" id="cancel">            
            </form></td>
                </tr>
                <?php } ?>
              <tr> 
                  
        </tr>
            </table>
            <form action="../userprocess/orderpro.php" method="post">
            <button type="submit" id="but" onclick="getbill.php">Get Bill</button>
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="name"><br>
                    <input type="hidden" value="<?php echo $row['name']; ?>" name="name"><br>
                    <input type="hidden" value="<?php echo $row['price']; ?>" name="name" ><br>
                    <input type="hidden" value="<?php echo $row['ordered']; ?>" name="name"><br>
                    
                </form>
            <?php
        
    }else{
        echo "<h2>No Records found<h2>";
    }
}else{
    echo $conn->error;
}
    ?>
    </div>

    <div class="bill" >
    <?php
    include('../database/connection.php');
    $q = "SELECT * from cart where uid=$id";
    if ($conn->query($q)){
    $result = $conn->query($q);
    
    if($result-> num_rows >0){
        
            ?>

            <table>
                <tr>
                    <th>Bills :</th>
                </tr>
                <?php while($row=$result->fetch_assoc())
                
        { 
            
            ?>
                <tr>
                <td><?php echo $row['name'];  ?></td>
                <td><?php echo "Rs.".$row['ordered']*$row['price'];  ?></td>
                </tr>
                <?php } ?>
              <tr> 
                  
        </tr>
        <?php while($row2=$total_bill->fetch_assoc()){   ?>
        <tr>
           
            <th>Total Amount : <?php  echo $row2['sum']; ?></th>
            
        </tr>
            </table>

            <?php $total_bill = $row2['sum']; 
                    $total_amount = $total_bill + 10 +15+50;
                    $pid = rand();
                    $success = 'http://localhost/flowerhouse/userprocess/successpay.php';
                ?>


            <form action="https://uat.esewa.com.np/epay/main" method="POST" class="foresewa">
    <input value="<?php  echo $total_amount; ?>" name="tAmt" type="hidden">
    <input value="<?php  echo $total_bill; ?>" name="amt" type="hidden">

    <input value="Pay With eSewa" type="submit" id="esewa">
    <a href="../userprocess/successpay.php" ><button type="button" id="esewa"class="esewa">Cash on Delivery

    </button></a>

    <input value="15" name="txAmt" type="hidden">
    <input value="10" name="psc" type="hidden">
    <input value="50" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php  echo $pid; ?>" name="pid" type="hidden">
    <input value="<?php echo $success ?>" type="hidden" name="su">
    <input type="hidden" value="<?php echo $row['id']; ?>" name="id"><br>
    <input type="hidden" value="<?php echo $row['name']; ?>" name="name"><br>
    <input type="hidden" value="<?php echo $row['price']; ?>" name="price" ><br>
    <input type="hidden" value="<?php echo $row['ordered']; ?>" name="ordered"><br>

    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    </form>
    <?php } ?>
            <!-- <form action="../userprocess/orderpro.php" method="post">
            <button type="submit" id="but2">Pay With eSewa</button>
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="name"><br>
                    <input type="hidden" value="<?php echo $row['name']; ?>" name="name"><br>
                    <input type="hidden" value="<?php echo $row['price']; ?>" name="name" ><br>
                    <input type="hidden" value="<?php echo $row['ordered']; ?>" name="name"><br>
                    http://merchant.com.np/page/esewa_payment_success?q=su
                    
                </form> -->
            <?php
        
    }else{
        echo "<h2>No Records found<h2>";
    }
}else{
    echo $conn->error;
}
    }else{
        echo "<h2> You must login to see your cart History. </h2>";
    }
    ?>


    </div>

    </div>