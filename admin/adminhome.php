<?php
session_start();
if(!isset($_SESSION['loginadmin'])){
    header('Location:../admin/adminlogin.php?msg=You Must Log In First');
}else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower House</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php include "../component/adminheader.php"; ?>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>fresh flowers</h3>
        <span> natural & beautiful flowers </span>
        <p>        When a beautiful design is combined with powerful technolog, 
           it truly is an artwork. I love how my website operates and looks with this theme. 
                              Thank you for the awesome product.</p>
        <a href="#" class="btn">shop now</a>
    </div>
    
</section>






<?php include '../component/footer.php'; ?>
    <?php }?>
</body>
</html>