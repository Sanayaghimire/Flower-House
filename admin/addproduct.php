<?php include "../component/adminheader.php";

session_start();
if(!isset($_SESSION['loginadmin'])){
    header('Location:../admin/adminlogin.php?msg=You Must Log In First');
}else{
?>

 <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="../css/style.css">
<!-- about section starts  -->
<style>
    input{
        border:1px blue solid;
        padding:5px;
        margin: 10px;
        border-radius:5px;
        width:300px;

    }
    label{
        width:110px;
        display:inline-block;
        text-align:right;
        font-size:14px;
        color:blue;
    }
   
    #file{
          width:300px;
          height:30px;
          margin:10;
          padding:0;
          color:blue;

    }
    .content{
        display:inline-block;
        margin-left:30%;
    }
    
    #submit{
        width:200px;
        margin-left:125px;
        background:green;
        color:white;
        border-radius:5px;
        
    }
</style>

<section class="about" id="about">

    <h1 class="heading"> <span> Add </span> Product </h1>

    <div class="row">

        <div class="content">
           
            <form action="../adminprocess/addproductprocess.php" method="post">
            <label for="name">Flower Name :</label>
            <input type="text" name="name"><br>
            <label for="name">Price :</label>
            <input type="number" name="price"  min="1" oninput="validity.valid||(value='');" ><br>
            <label for="name">Stock :</label>
            <input type="number" name="stock" min="1" oninput="validity.valid||(value='');"><br>
            <label for="name">Picture :</label>
            <input type="file" id="file" name="image"><br>
            <input type="submit" id="submit">
            </form>

        </div>

    </div>

</section>
<?php

}
?>

<!-- about section ends -->