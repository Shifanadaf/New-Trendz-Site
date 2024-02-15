<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="style.css" rel='stylesheet' type='text/css' >
     <!-- <link href="css/styleindex.css" rel='stylesheet' type='text/css' > -->
     <link href="css/style.css" rel='stylesheet' type='text/css' >
   <script type="text/javascript" src="js/pro.js"></script>
   <script type="text/javascript" src="js/slider.js"></script>

<?php

session_start();?>
   <title>New Trendz</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">

  <!-- OwlCarouse css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <!-- OwlCarouse css -->



  <!-- jquery   -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <!-- jquery   -->

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
<body onload="ShowBanners()"  style="background-color: #e4e1fb; " >
<center>

<div> 

      <div class="header row"  onmouseover="MH()" >
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
          <option value="f2.php">Table </option>
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
          <!-- <a class="glyphicon glyphicon-log-in" href="login.php" style="font-size: 17px;color: white;" ><br>Login</a>&emsp; -->
          <a class="glyphicon glyphicon-user" href="cnt.php" style="font-size: 17px;color: white;" ><br>Contact</a>&emsp;
            <a class="fa fa-info" href="about.php" style="font-size: 17px;color: white;" ><br>About</a>&emsp;
            <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 17px;color: white;" ><br>Cart</a>
        </div>

        <div >
            <h1 id="h1"><strong></strong></h1>
            <p style="color: white;">Discover the best <strong>High Quality Furniture </strong></p>
            
          </div>
         
    </div>
   
 
    <!-- Slider start -->
      <img   id="img"  src="../img/1.jpg" style="width: 100%" height="550" name="ChangeBanner">
  <!-- Slider end -->
</div>
</center>
<br> 







  <section class="flash Deals">
    <div class="container mtop">
      <div class="heading flex1">
        <h2><i class="fas fa-bolt"></i> Flash Deals</h2>
        <a href="view_all.php">View all <i class="fas fa-caret-right"></i></a>
      </div>


      <div class="owl-carousel owl-theme">
        <?php
           include 'connection.php';
           $view = mysqli_query($connect,"SELECT * FROM `deals`;") or die(mysqli_error($connect));

            $counter = 0;
            while ($row = mysqli_fetch_array($view)) {
            extract($row);
        ?>
        <div class="item">
          <div class="img">
            <span>50% off</span>
            <img src="../img/<?php echo $row['photo'];?>" alt="" style="height: 200px;">
            <div class="view">
              <a href="view.php?id=<?php echo $row['pid'];?>"> <i class="fas fa-eye"></i> </a> <br>
              <i class="far fa-heart"></i>
            </div>
          </div>

          <div class="text">
            <h5><?php echo $row['name']; ?></h5>
            <div class="star flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price flex1">
              <p> Rs.<?php echo $row['dealp']; ?><label> Rs.<?php echo $row['mrp']; ?></label></p>
              <a href="add.php?id=<?php echo $pid;?>&cat=<?php echo $cat;?>"> <i class="fas fa-plus"> Add to cart</i></a>
            </div>
          </div>
        </div>
        <?php } ?></div>


      </div>
    </div>
  </section>
  <!-- OwlCarouse js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <!-- OwlCarouse js -->


  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      navText: ["<i class='far fa-arrow-left'></i>", "<i class='far fa-arrow-right'></i>"],
      responsive: {
        511: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>

<!-- 2nd deal -->
<section class="flash Deals">
    <div class="container mtop">
      <div class="heading flex1">
        <h2><i class="fas fa-bolt"></i> Special  Deals</h2>
        <a href="view_all.php">View all <i class="fas fa-caret-right"></i></a>
      </div>


      <div class="owl-carousel owl-theme">
        <?php
           include 'connection.php';
           $view = mysqli_query($connect,"SELECT * FROM `products` ORDER BY  id DESC;") or die(mysqli_error($connect));

            $counter = 0;
            while ($row = mysqli_fetch_array($view)) {
            extract($row);
        ?>
        <div class="item">
          <div class="img">
            <span>20% off</span>
            <img src="../img/<?php echo $row['photo'];?>" alt="" style="height: 200px;">
            <div class="view">
              <a href="view.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>"> <i class="fas fa-eye"></i> </a> <br>
              <i class="far fa-heart"></i>
            </div>
          </div>

          <div class="text">
            <h5><?php echo $row['name']; ?></h5>
            <div class="star flex">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price flex1">
              <p> Rs.<?php echo $row['dealp']; ?><label> Rs.<?php echo $row['mrp']; ?></label></p>
              <a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>"> <i class="fas fa-plus"> Add to cart</i></a>
            </div>
          </div>
        </div>
        <?php } ?></div>


      </div>
    </div>
  </section>
  <!-- OwlCarouse js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <!-- OwlCarouse js -->


  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      navText: ["<i class='far fa-arrow-left'></i>", "<i class='far fa-arrow-right'></i>"],
      responsive: {
        511: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script><br><br> 

<!-- slider -->
<div class="container">
      <img   id="img"  src="../img/kit.jpg" style="width: 100%" height="550" name="Banner" onmouseover="Slider()">

</div>
<br>

  <section class="flash new_arrivals Deals">
    <div class="container mtop">
      <div class="heading flex1">
        <h2 class="flex">
          <img src="https://img.icons8.com/color-glass/48/000000/new.png" />
          New Arrivals 
        </h2>
         </div>


      <div class="owl-carousel owl-carousel2 owl-theme">
         <?php
           include 'connection.php';
           $view = mysqli_query($connect,"SELECT * FROM `products`  ORDER BY  id DESC LIMIT 10;") or die(mysqli_error($connect));

            $counter = 0;
            while ($row = mysqli_fetch_array($view)) {
            extract($row);
        ?>
        <div class="item">
          <div class="img">
            <img src="../img/<?php echo $row['photo'];?>" alt=""style="height: 125px;">
          </div>
          <div class="text">
            <h5><?php echo $row['name']; ?></h5>
            <p> Rs.<?php echo $row['dealp']; ?></p>
          </div>
        </div>
        <?php } ?>
      </div>
        
     
      </div>
  </section>



  <script>
    $('.owl-carousel2').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      navText: ["<i class='far fa-arrow-left'></i>", "<i class='far fa-arrow-right'></i>"],
      responsive: {
        511: {
          items: 1
        },
        768: {
          items: 4
        },
        1000: {
          items: 6
        }
      }
    })
  </script>


<!--   brands  -->
<br><br>
<br><br>
<center>
<div class="container" style="background-color:#fdf1e9;">
  <h1><strong>Top Brands</strong></h1><br>

 <div class="row" >


    <div class="col-md-3">
  
         <div style="margin-top: 20px;">
            <a href="https://www.ikea.com/in/en/">
              <input type="image" src="../img/br1.jpg" name="submit" width="100" height="60" alt="submit"/>  
            </a>
          </div>
    </div>



    <div class="col-md-3">
  
         <div style="margin-top: 20px;">
            <a href="https://www.godrejinterio.com/">
             <input type="image" src="../img/br2.jpg" name="submit" width="100" height="60" alt="submit"/>  
            </a>
          </div>
    </div>




  <div class="col-md-3">
    
           <div style="margin-top: 20px;">
              <a href="https://www.usha.com/">
                <input type="image" src="../img/br3.jpg" name="submit" width="100" height="60" alt="submit"/>  
              </a>
            </div>
      </div>


    <div class="col-md-3">
      
             <div style="margin-top: 20px;">
                <a href="https://www.hawkinscookers.com/">
                  <input type="image" src="../img/br4.jpg" name="submit" width="100" height="60" alt="submit"/>  
                </a>
              </div>
        </div>

</div>
<br>
<br>
<!-------------------------------------------end 1st row---------------->


<div style="background-color:##fdf1e9; "class="row" >


    <div class="col-md-3">
  
         <div style="margin-top: 20px;">
            <a href="https://xtore.in/">
              <input type="image" src="../img/br5.jpg" name="submit" width="100" height="60" alt="submit"/>  
            </a>
          </div>
    </div>



    <div class="col-md-3">
  
         <div style="margin-top: 20px;">
            <a href="https://www.sony.co.in/">
              <input type="image" src="../img/br6.jpg" name="submit" width="100" height="60" alt="submit"/>  
            </a>
          </div>
    </div>




<div class="col-md-3">
  
         <div style="margin-top: 20px;">
            <a href="https://www.samsung.com/in/">
              <input type="image" src="../img/br7.jpg" name="submit" width="100" height="60" alt="submit"/>  
            </a>
          </div>
    </div>


<div class="col-md-3">
  
         <div style="margin-top: 20px;">
            <a href="https://www.lenovo.com/in/en/">
             <input type="image" src="../img/br8.jpg" name="submit" width="100" height="60" alt="submit"/>  
  
            </a>
          </div>
    </div>







  </div>
   <br>
    <br>


</div>
</center>
<br>
<br>

<!-- end brand -->

<br>


<!-- //footer -->
<!-- footer1 -->

<div class="footer" style="background-color: #373a3c;  height: 250px">
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

<!-- </div>   -->

</body>
</html>
