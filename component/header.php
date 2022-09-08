<!-- header section starts  -->

<style>
    header{
        background:#eff7fa;
        color:black;
        padding:5px 25px;
        display:flex;
        height:50px;
        justify-content:space-between;

    }

    .navbar{
        padding:10px;
        font-size:16px;
        }

    a{
        color:white;
        text-decoration:none;
    }
    #bgco{
        color:#666;
    }
    #proimg{
        display:inline-block;
        width:35px;
        height: 30px;
        border-radius:5px;
    }
</style>

<header>



    <a href="../pages/home.php" class="logo">flower House<span>.</span></a>

    <nav class="navbar">
        <a href="../pages/home.php">Home</a>
        <a href="../pages/product.php">Products</a>
        <a href="../pages/myhistory.php">History</a>
        <a href="../pages/about.php">About</a>
        <!-- <a href="../pages/contact.php">Contact</a> -->
        <a href="../pages/mycart.php" class="fas fa-shopping-cart " id="bgco"></a>
       <?php session_start();
        if( isset($_SESSION["loginuser"]) ){
            $id=$_SESSION['loginuser'];
            include('../database/connection.php');
            $sql ="SELECT * FROM user where id=$id";
            $result = $conn ->query($sql);
            if($result->num_rows==1){
                $row=$result->fetch_assoc();
                ?>
              <a href="../pages/myprofile.php">  <img src="../images/<?php echo $row['image'];?>" id="proimg" alt=""></a>
                <a href="../pages/logout.php">Log Out</a>
                <?php
            }
            }else{ ?>
            <a href='../pages/login.php' class='fas fa-user'></a>
            <?php
            } ?>
            
    </nav>
</header>

<!-- header section ends -->