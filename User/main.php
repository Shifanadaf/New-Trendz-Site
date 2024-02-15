<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="style.css" rel='stylesheet' type='text/css' >
   <script type="text/javascript" src="js/pro.js"></script>

   <?php

session_start();?>
	<title></title>

<script type="text/javascript">
//Deop down menu linking script end

//Script for marquee < >
function mar()
{
document.getElementById('m').stop();


}
function out()
{

document.getElementById('m').start();

}
// function set_i()
// {
//   i=0;
// }
</script>



</head>
<body onload="ShowBanners()" style="background-color: ; " >
<center>

<div> 

    	<div class="header row"  onmouseover="MH()" >
    	<div class="col-md-2 margin" >
          <a class="glyphicon glyphicon-home" href="index.php" style="font-size: 20px;color: white;"><br>Home</a>

        </div>
         

	    	<div class="col-md-7 margin" >
          <form action="search.php" method="GET"> <input type="text" name="query" style="height: 40px;width: 230px; border-radius: 25px;" placeholder="Search">&nbsp;
                          <button class="btn" type="submit" >Search</button></form>
    		</div>

    		<div class="col-md-3 margin" >
          <?php
                 //gets session id from cookies, or prepa
              if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists
          ?>
          <a class="glyphicon glyphicon-log-in" href="login.php" style="font-size: 17px;color: white;" ><br>Login</a>&emsp;
    <?php
      } else {
    ?>

         <a class="glyphicon glyphicon-log-out" href="logout.php" style="font-size: 17px;color: white;" ><br>Logout</a>&emsp;

    <?php 
      }
    ?>
    			<a class="glyphicon glyphicon-user" href="cnt.php" style="font-size: 20px;color: white;" ><br>Contact</a>&emsp;
	    			<a class="fa fa-info" href="about.php" style="font-size: 20px;color: white;" ><br>About</a>&emsp;
            <a class="glyphicon glyphicon-shopping-cart" href="add.php" style="font-size: 20px;color: white;" ><br>Cart</a>
    		</div>

				<div >
	    		 	<h1 id="h1"><strong></strong></h1>
	    		 	<p style="color: white;">Discover the best <strong>High Quality Furniture </strong></p>
	    		 	
	    		</div>
         
		</div>
	 
 
    <!-- Slider start -->
    	<img   id="img"  src="../img/1.jpg" width="1350" height="550" name="ChangeBanner">
	<!-- Slider end -->
</div>

<div style="background-size: : 100% 100%;" >
  <br>
      <div class="row"  >
      <center><strong><i> <h1 style="color:white;">Craft Your Dream Home </h1></i></strong></center>



          <div class="col-md-6 anchor" >
        
               <div style="margin-top: 20px;">
                  <a style="color:white;" href="ch1.html">
                    <input type="image" src="../img/kw.jpeg" name="submit" class="img-circle" width="300" height="200" alt="Chinise Corner"/> 
                    <h4>Kitchen Ware</h4>+
                    
                  </a>
                </div>
          </div>



          <div class="col-md-6" >
        
               <div style="margin-top: 20px;">
                  <a style="color: white;" href="f1.html">
                   <input type="image" src="../img/hd.jpeg" name="submit" class="img-circle" width="300" height="200" alt="submit"/> 
                   <h4>Home Decor</h4> 
                  </a>
                </div>
          </div>




        

      </div>




      <div class="row" >


          <div class="col-md-6">
            
                   <div style="margin-top: 20px;">
                      <a style="color: white;"  href="m1.html">
                        <input type="image" src="../img/fr.jpeg" name="submit" class="img-circle" width="300" height="200"  alt="submit"/> <h4>Furniture</h4>   
                      </a>
                    </div>
              </div>

              <div class="col-md-6">
            
                   <div style="margin-top: 20px;">
                      <a style="color: white; " href="f1.html">
                        <input type="image" src="../img/el.jpeg" name="submit" class="img-circle" width="300" height="200"  alt="submit"/><h4>Electronics </h4>   
                      </a>
                    </div>
              </div>

             

      </div></center>
</div>


  <div>

<br>

<!-- deal of theday -->
<div class="container">
<div class="panel panel-success">
  <div class="panel-heading"><center><h4><strong>Deal of the Day</strong></h4></center></div>
  <div class="panel-body">
    

    <div class="row">
      <!-- 1st start  -->
      <div class="col-xs-6 col-md-3">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `grocery1` WHERE id='20'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h3><?php echo $row['p_name']?> </h3>
                <p>Price:<?php echo $row['price']?></p>
                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->



 <!-- 1st start  -->
      <div class="col-xs-6 col-md-3">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `grocery1` WHERE id='16'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h3><?php echo $row['p_name']?> </h3>
                <p>Price:<?php echo $row['price']?></p>
                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->



      <!-- 3rd start  -->
      <div class="col-xs-6 col-md-3">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `grocery1` WHERE id='17'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h3><?php echo $row['p_name']?> </h3>
                <p>Price:<?php echo $row['price']?></p>
                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->









 <!--4th start  -->
      <div class="col-xs-6 col-md-3">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `packed` WHERE id='3'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h3><?php echo $row['p_name']?> </h3>
                <p>Price:<?php echo $row['price']?></p>
                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->



 <!-- 5th start  -->
      <div class="col-xs-6 col-md-3">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `beverage` WHERE id='5'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h3><?php echo $row['p_name']?> </h3>
                <p>Price:<?php echo $row['price']?></p>
                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->







 <!-- 6th start  -->
      <div class="col-xs-6 col-md-3">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `house` WHERE id='3'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h3><?php echo $row['p_name']?> </h3>
                <p>Price:<?php echo $row['price']?></p>
                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->

     


 <!-- 7th start  -->
      <div class="col-xs-6 col-md-3">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `house` WHERE id='31'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h3><?php echo $row['p_name']?> </h3>
                <p>Price:<?php echo $row['price']?></p>
                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->




 <!-- 8th start  -->
      <div class="col-xs-6 col-md-3">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `beverage` WHERE id='3'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h3><?php echo $row['p_name']?> </h3>
                <p>Price:<?php echo $row['price']?></p>
                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->


    </div>
  
  </div> <!--panel body--->
</div><!---panel-->
</div><!---container----><br><br>

<!-- end panel -->

   
</center>

<br><br>

<!-- //footer -->
<!-- //footer -->
<!-- footer1 -->

<div class="footer" style="background-color: #373a3c;  height: 325px">
    <div class="container">
      <div class="w3_footer_grids">
        <div class="col-md-3 w3_footer_grid">
          <h3 class="foot" style="color: white">Contact</h3>
          
          <ul class="address" style="color: white">
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Government Polytechnic , Solapur. <br>

                <span>
              Akkalkot Road, Shanti Chowk, Solapur-413006</span></li>
              <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0217-2653922<br>0217-2653925</li>
            <li><i aria-hidden="true"></i><a href="mailto:office.gpsolapur@dtemaharashtra.gov.in">office.gpsolapur@dtemaharashtra.gov.in</a></li>
            
            <li><i aria-hidden="true"></i><a href="http://www.gpsolapur.ac.in/">http://www.gpsolapur.ac.in/</a></li>

          </ul>
        </div>

        <div class="col-md-3 w3_footer_grid">
          <h3 class="foot"  style="color: white">Information</h3>
          <ul class="info"> 
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.php">About Us</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="Contact.php">Contact Us</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="shop_now.php">Shop Now!!</a></li>
            
          </ul>
        </div>
        
        <div class="col-md-3 w3_footer_grid">
          <h3  class="foot" style="color: white">Category</h3>
          <ul class="info"> 
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="f.php">Furniture</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="k.php">Kitchen</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="h.php">Home Decor</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="e.php">Electronics</a></li>

          </ul>
        </div>
        
        <div class="col-md-3 w3_footer_grid">
          <h3  class="foot" style="color: white">Profile</h3>
          <ul class="info"> 
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="add.php">My Cart</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registration.php">Create Account</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="../admin/index.php">Admin</a></li>
          </ul>
        </div>
        
        <div class="clearfix"> 
        </div>
      </div><!---footer grid-->
    </div> <!----container--->
    
    <div class="footer-copy">
    </div>
    </div>
</div>

</div>  
</body>
</html>
