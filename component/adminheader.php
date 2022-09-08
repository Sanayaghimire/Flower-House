<!-- header section starts  -->

<style>
   
.header {
    overflow: hidden;
    background-color: #f1f1f1;
    padding: 10px 10px;
    
  }
  
  /* Style the header links */
  .header a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
  }
  
  /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
  .header a.logo {
    font-size: 25px;
    font-weight: bold;
  }
  
  /* Change the background color on mouse-over */
  .header a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Style the active/current link*/
  .header a.active {
    background-color: dodgerblue;
    color: white;
  }
  
  /* Float the link section to the right */
  .header-right {
    float: right;
  }
  
  /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }
    .header-right {
      float: none;
    }
  }
</style>

<div class="header">

<a href="../admin/adminhome.php" class="logo">flower House<span>.</span></a>

  <div class="header-right">



   <a href="../admin/adminhome.php" >Home</a>
        <a href="../admin/adminproduct.php">Products</a>
        <a href="../admin/addproduct.php">Add Product</a>
        <a href="../admin/seeorders.php" class="fas fa-shopping-cart">See Orders</a>
        <a href="../admin/logout.php">Log Out</a>
      
 
  </div>
</div> 

<!-- header section ends -->