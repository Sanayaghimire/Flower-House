<?php include "../component/loginheader.php"; ?>

 <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="../css/style.css">
<!-- about section starts  -->
<style>
    .about{
        height:400px;
        background-color: #f6f0c4;
        background-image: linear-gradient(315deg, #f6f0c4 0%, #d99ec9 74%);
    }
    .content{
        display:inline-block;
        margin-left:30%;
    }
    #loginbut{
        width:100px;
        background:green;
        color:white;
        margin-left:200px;
    }
    form{
        border: 1px black solid;
        height:200px;
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

    <h1 class="heading"> <span> Log </span> In </h1>

    

        <div class="content">
            <form action="../userprocess/loginprocess.php" method="post">
                
                <label for="">Email :</label>
                <input type="email" name="email"><br>
                <label for="">Password :</label>
                <input type="password" name="password"><br>
                <input type="submit" value="Log In" id="loginbut">
                <h3>Not Sign Up Yet? Click <a href="signup.php">Here </a> </h3>
            </form>
            
        </div>

    </div>
</section>

<?php include '../component/footer.php'; ?>


