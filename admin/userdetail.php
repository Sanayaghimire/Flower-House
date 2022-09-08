<?php include "../component/adminheader.php"; 

session_start();
if(!isset($_SESSION['loginadmin'])){
    header('Location:../admin/adminlogin.php?msg=You Must Log In First');
}else{
?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<link rel="stylesheet" href="../css/style.css">

<style>
    .card{
        margin-top:0px;
        margin-left:230px;
        display:inline-block;
        background:#DFCAA0;
        height:400px;
        width: 570px;
    }
    #but{
        border:1px blue solid;
        margin-left:230px;
        border-radius:5px;
        margin-top:5px;
        width:150px;
        background:green;
        color:white;
    }
    input{
        border:1px blue solid;
        padding:5px;
        margin: 10px;
        border-radius:5px;
        width:400px;

    }
    label{
        width:120px;
        display:inline-block;
        text-align:right;
        font-size:14px;
        color:blue;
    }
    .img{
        margin-left:200px;
    }
</style>
<section class="about" id="about">

    <h1 class="heading"> <span> My </span> Details </h1>

        <?php
    
    $id =$_POST['id'];
 include("../database/connection.php");
 $sql  = "SELECT * from user where id='$id'";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
         ?>
 <div class="card">
 <form action="" Method="POST">
     <div class="card_image">
     <img src="../images/<?php echo $row['image']; ?>" height="200px" width="200px" value="photo" class="img" ><br>
     <input type="hidden" value="<?php echo $row['image']; ?>" readonly="readonly" name="image" >
     </div>
     <div class="card_body">
         <input type="hidden" value="<?php echo $row['id']; ?>" name="uid">
     <label for="name">Name :</label>
      <input type="text" value="<?php echo $row['uname']; ?>" name="name"><br>
      <label for="name">Contact :</label>
      <input type="text" value="<?php echo $row['contact'];  ?> " name="coontact"><br>
      <label for="name">Email :</label>
      <input type="text" value="<?php echo $row['email'];  ?> " name="email" readonly="readonly"><br>
      <label for="name">Address :</label>
      <input type="text" value="<?php echo $row['address'];  ?>"> <br>
         </form>
     </div>
     
</div>
<?php
}
}else{
echo "<h2>No Records Found.</h2>";
}
?>
        <?php }
        ?>

</section>

