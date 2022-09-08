<!-- prodcuts section starts  -->
<?php include "../component/adminheader.php"; 

session_start();
if(!isset($_SESSION['loginadmin'])){
    header('Location:../admin/adminlogin.php?msg=You Must Log In First');
}else{
?>

<style>
     .body{
        background:#dfd4cf; 
       
    }
    .card{
        width:262px;
        margin-top:60px;
        margin-left:40px;
        display:inline-block;
        background:#cbc3be;
        height: 450px;
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
        border:1px blue solid;
        padding:5px;
        margin: 10px;
        border-radius:5px;
        width:120px;

    }
    label{
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

</style>

<link rel="stylesheet" href="../css/style.css">
<div class="body">
<?php
    
    include("../database/connection.php");
    $sql  = "SELECT * from product";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            ?>
    <div class="card">
    <form action="../adminprocess/productprocess.php" Method="POST">
        <div class="card_image">
        <img src="../images/<?php echo $row['image']; ?>" height="200px" width="200px" value="photo" class="img" ><br>
        <input type="hidden" value="<?php echo $row['image']; ?>" readonly="readonly" name="image" >
        </div>
        <div class="card_body">
        <input type="hidden" value="<?php echo $row['id']; ?>" name="id" ><br>
        <label for="name">Flower Name :</label>
         <input type="text" value="<?php echo $row['name']; ?>" name="name" ><br>
         <label for="name">Price :</label>
         <input type="number" name="price"  value="<?php echo $row['price'];  ?>" min="1" oninput="validity.valid||(value='');" ><br>
         <label for="name">Stock :</label>
         <input type="number" name="stock"  value="<?php echo $row['stock'];  ?>" min="1" oninput="validity.valid||(value='');" ><br><br>
         
            <button type="submit" name="action" value="update" id="but">Update</button> 
            <button type="submit" name="action" value="delete" id="but2">Delete</button>
        
            </form>
        </div>
        
</div>
<?php
}
}else{
echo "<h2>No Records Found.</h2>";
}
?>

<?php
}
?>
<!-- prodcuts section ends -->












