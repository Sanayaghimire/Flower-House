<!-- prodcuts section starts  -->

<link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<?php include "../component/header.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/wiki.js"></script>
<link rel="stylesheet" href="../fontawesome/css/all.css">


<style>
.body{
        background:#dfd4cf; 
        min-height: 100%;
    }
    
    
     #bgco{
        color:#dfd4cf;
    } 
    
    .card{
        margin-top:60px;
        margin-left:40px;
        display:inline-block;
        background:#cbc3be;
        height: 490px;
        width:260px;
        border-radius: 10px;
    }
    #but{
        border:1px blue solid;
        padding: 5px 5px;
        margin-left:15px;
        border-radius:5px;
        margin-top:5px;
        width:100px;
        background:green;
        color:white;
        cursor: pointer;
    }
    #but2{
        border:1px blue solid;
        padding: 5px 5px;
        margin-left:15px;
        border-radius:5px;
        margin-top:5px;
        width:100px;
        background:green;
        color:white;
        cursor: pointer;
    }
    input{
        border: 1px solid black; 
        color:blue;
        background: transparent;
        padding:5px;
        margin: 10px;
        border-radius:5px;
        width:120px;

    }
    .card_body label{
        width:110px;
        display:inline-block;
        text-align:right;
        font-size:14px;
        color:blue;
    }
    .img{
        width:100%;
        /* padding:10px; */
        border-radius: 13px;
    }

    /* Rate Css Starts Here */

    .star-widget input{
            display: none;

        }

        .star-widget label{
            font-size: 40px;
            color: #444;
            padding: 10px;
            float: right;
        }

        input:not(:checked) ~ label:hover,
        input:not(:checked) ~ label:hover ~ label{
            color:#fd4;
        }

        input#popup1rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }


        input#popup3rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }


        input#popup4rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }
        .btn{
            padding: 10px 60px;
            background: #fff;
            border:0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 30px;
        }

        #reviewInput{
            width:90%;
            border: 1.5px solid black;
            border-radius: 5px;
            padding: 10px;

        }
        .popup{
            width:400px;
            background: #fff;
            border-radius:6px;
            position:absolute;
            top: 0%;
            left:50%;
            transform: translate(-50%,-50%) scale(0.1);
            text-align:center;
            padding:0 30px 30px;
            color:#333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }

        .open-popup{
            visibility: visible;
            top: 50%;
            transform: translate(-50%,-50%) scale(1);
            
        }

        .popup img{
            width:100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .popup h2{
            font-size:38px;
            font-weight:500px;
            margin: 30px 0 10px;
        }

        .popup button{
            width:100%;
            margin-top:50px;
            padding:10px 0;
            background: #6fd649;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0,0,0,0.2);
        }

        /* Rate Css Ends Here */


  
</style>


<link rel="stylesheet" href="../css/style.css">
<div class="body">
<?php
 
    include("../database/connection.php");
    $sql  = "SELECT * from product ORDER BY rating DESC ";
    $result = $conn->query($sql);
    $idNum=1;
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

            $id = "popup".$idNum;
            $idNum++;

            ?>
    <div class="card">
    <form action="../userprocess/addtocart.php" Method="POST">
        <div class="card_image">

        <?php 
        // $rating=$row['id'];
        // $query = "Select rating from product where id = $rating ORDER BY rating DESC";
        // $res = $conn->query($query);
        // $row2 = $res->fetch_assoc();
        ?>
        <img src="../images/<?php echo $row['image']; ?>" height="200px" width="200px" value="photo" class="img" ><br>
        <input type="hidden" value="<?php echo $row['image']; ?>" readonly="readonly" name="image" >
        </div>

        <div class="card_body">
            <input type="hidden" value="<?php echo $row['id']; ?>" name="pid">
            <input type="hidden" value="<?php echo $row['stock']; ?>" name="stock">
        <label for="name">Flower Name :</label>
         <input type="text" value="<?php echo $row['name']; ?>" id="pname" name="name" readonly="readonly"><br>
         <label for="name">Price :</label>
         <input type="text" value="<?php echo $row['price'];  ?> " name="price" readonly="readonly"><br>
         <label for="name">Stock :</label>
         <input type="text" value="<?php echo $row['stock']; ?> " name="stock" readonly="readonly" ><br>
         <label for="name">Enter Quantity to Order :</label>
         
         <input type="number" name="order" min="1" oninput="validity.valid||(value='');" max="<?php echo $row['stock'];  ?>" required> <br>
         <label for="name">Rating :</label>
         <input type="text" value="<?php echo $row['rating'];  ?> " readonly="readonly"><br>
         <button type="submit" name="action" value="cart" id="but">Add to Cart</button>
         <input type="button" id="but" class="btn" onclick="openPopup('<?php echo $id; ?>')" value="Rate Now">
  
        </div>
        </form>
        
   
    

</div>
<div class="popup" id="<?php echo $id;?>">
        <form action="../userprocess/rateprocess.php" method="post">
        
            <div class="star-widget">
                <input type="radio" name="rate" id="<?php echo $id.'rate-5';?>" value="5">
                <label for="<?php echo $id.'rate-5';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-4';?>" value="4">
                <label for="<?php echo $id.'rate-4';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-3';?>" value="3">
                <label for="<?php echo $id.'rate-3';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-2';?>" value="2">
                <label for="<?php echo $id.'rate-2';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-1';?>" value="1">
                <label for="<?php echo $id.'rate-1';?>"  class="fas fa-star"></label>
            </div>
        
        <h2>Rate <?php echo $row['name']; ?></h2>
        <p>Your Review</p> <br>
        <input type="hidden" value="<?php echo $row['id']; ?>" name="pid">
        <input type="textarea" placeholder="Describe your experience" id="reviewInput" name="review">
        <button type="submit" >OK</button>
    </form>
    </div>
<?php
}
}else{
echo "<h2>No Records Found.</h2>";
}

// include '../component/footer.php';
?>


 </div>

 

 <script>

        let popup = document.getElementById("popup");

        function checkForm(){
            console.log(document.getElementById('searchTerm').value);
            return false;
            }

        function openPopup(id){
            popup = document.getElementById(id);
            popup.classList.add("open-popup");
            document.getElementById("but").innerHTML;
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }

</script>

  

<!-- prodcuts section ends -->












