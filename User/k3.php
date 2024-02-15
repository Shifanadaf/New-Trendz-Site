<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="style.css" rel='stylesheet' type='text/css' >
     <!-- <link href="css/styleindex.css" rel='stylesheet' type='text/css' > -->
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
<body onload="ShowBanners()" style="background-color: #e4e1fb; " >
<center>

<div> 

      <div class="contact row"  onmouseover="MH()" >
      <div class="col-md-1 margin">
          <a class="glyphicon glyphicon-home" href="index.php" style="font-size: 18px;color: white;"><br>Home</a>

        </div>
         

        <div class="col-md-3 margin" >
          <form action="search.php" method="GET"> <input type="text" name="query" style="height: 40px;width: 230px; border-radius: 25px;" placeholder="Search">&nbsp;
                          <button class="btn" type="submit" >Search</button></form>
        </div>





            <div class="col-md-5 margin" onload="document.Form1.MenuChoice.selectedIndex=0">
          <form name="Form1">
          <select name = "MenuChoice" style="height:30px"  onchange="DisplayPage(this)" >  
          
          <option >Furniture</option>
          <option value="f1.php">Sofa</option>
          <option value="f2.php">Table</option>
          <option value="f3.php">Bed</option>  
          <option value="f4.php">Chair</option>
          <option value="f5.php">CupBoard</option>
          
          </select> &nbsp;

          <select name = "MenuChoice" style="height:30px" onchange="DisplayPage(this)" >  
          
          <option>Homedecor</option>  
          <option value="h1.php">Clock</option>  
          <option value="h2.php">Frame</option>
          <option value="h3.php">Curtain</option>  
          <option value="h4.php">Lights</option>
          <option value="h5.php">Pillows</option>
      
          </select>&nbsp;
          
          <select name= "MenuChoice" style="height:30px" onchange="DisplayPage(this)" >  
          
          <option>Kitchenware</option>  
          <option value="k1.php">Utensils</option>  
          <option value="k2.php">Gas Stove</option>
          <option value="k3.php">Container</option>  
          <option value="k4.php">Kitchen Racks</option>
          <option value="k5.php">Kitchen Cleaning</option>  
          
          
          </select>&nbsp;

          <select name = "MenuChoice" style="height:30px" onchange="DisplayPage(this)" >  
          
          <option>Electronics</option>  
          <option value="e1.php">Home Appliances</option>  
          <option value="e2.php">Kitchen Appliances</option>
          <option value="e3.php">Mobile Accessories</option>  
          <option value="e4.php">Laptop & Computer</option>
          <option value="e5.php">Camera Accessories</option>   
      
          </select>

          
          </form>
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
          <a class="glyphicon glyphicon-user" href="cnt.php" style="font-size: 17px;color: white;" ><br>Contact</a>&emsp;
            <a class="fa fa-info" href="about.php" style="font-size: 17px;color: white;" ><br>About</a>&emsp;
            <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 17px;color: white;" ><br>Cart</a>
        </div>
      </div>

    </div>
  </center>

<!-- Thumbnail 1 -->

<img src="../img/kw1.jpg" alt="Avatar" style="width:200px; border-radius: 70%;margin-left: 85px;">

<img src="../img/kw2.jpg" alt="Avatar" style="width:200px; border-radius: 70%;margin-left: 85px;">
<img src="../img/kw3.jpg" alt="Avatar" style="width:200px; border-radius: 70%;margin-left: 85px;">
<img src="../img/kw4.jpg" alt="Avatar" style="width:200px; border-radius: 70%;margin-left: 85px;">
<img src="../img/kw5.jpg" alt="Avatar" style="width:200px; border-radius: 70%;margin-left: 85px;">
<div class="row">
<!-- thumbnails end -->
  <!-- 1st column -->
  <div class="col-md-2">
    <div class="panel panel-info"style="margin-top: 50px;">
      <div class="panel-heading">
        <h3 class="panel-title">Catagories</h3>
      </div>
      <div class="panel-body">
     
        <ul style="list-style-type:none;margin-left:-20px;">
          <li><a href="k1.php">Utensils</a></li>
          <li><a href="k2.php">Gas Stove</a></li>
          <li><a href="k3.php">Container</a></li>
          <li><a href="k4.php">Kitchen Racks</a></li>
          <li><a href="k5.php">Kitchen Cleaning</a></li>
         
        </ul>
      </div>
    </div>
  </div>
  <!-- 1st column -->
  <!-- 2nd column -->
  <!-- php fetch query -->
  
  <!-- php fetch query -->
  <div class="col-md-10 " style="margin-top: 50px;">
    <!-- Thumbnails -->
    <div class="row">
     <?php
        include('connection.php');
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `products` WHERE cat='container'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail" style="height:350px; width:300px;background-color: transparent;">
               <img src="../img/<?php echo $row['photo'];?>" alt="loading"height="150px" width="150px">
              <div class="caption" >
                <h3 style="margin-left:40px;"><?php echo $row['name']?> </h3>
                <p style="margin-left:40px;">MRP:<s><?php echo $row['mrp']?></s> </p>

                <p style="margin-left:40px;">Price:<?php echo $row['dealp']?></p>
                <p style="margin-left:40px;"><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button"style="padding: 2%;">Add to cart</a>&emsp;
                 <a href="view.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button"style="padding: 2%;">View details</a>  </p>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    <!-- end thumbnails -->
      </div>
  <!-- 2nd column -->
</div>
</div>

<?php

include 'foot.php';
?>

</body>
</html>