<?php include "../component/loginheader.php"; ?>

 <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="../css/style.css">
<!-- about section starts  -->
<style>
    .content{
        display:inline-block;
        margin-left:30%;
    }
    #loginbut{
        width:100px;
        background:green;
        color:white;
        margin-left:180px;
    }
    form{
        border: 1px black solid;
        height:360px;
    }
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
    a{
        color:red;
    }
    h3{
        margin-left:160px;
    }
</style>

<section class="about" id="about">

    <h1 class="heading"> <span> Sign </span> Up </h1>

    

        <div class="content">
            <form action="../userprocess/signupprocess.php" method="post">
                <label for="">Name :</label>
                <input type="text" name="name" required><br>
                <label for="">Contact :</label>
                <input type="number" name="contact" required max_length="0"><br>
                <label for="">Email :</label>
                <input type="email" name="email" required><br>
                <label for="">Address :</label>
                <input type="text" name="address" required><br>
                <label for="">Password :</label>
                <input type="password" name="password" required><br>
                <label for="">Choose a Profile :</label>
                <input type="file" name="image"><br>
                <input type="submit" value="Sign Up" id="loginbut">
            </form>
            
        </div>

    </div>
    <?php include '../component/footer.php'; ?>
</section>

<!-- about section ends -->