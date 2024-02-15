<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="pro.js"></script>
  <link href="style.css" rel='stylesheet' type='text/css' >
  <link href="css/style4.css" rel='stylesheet' type='text/css' >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="css/styleindex.css" rel='stylesheet' type='text/css' >
     <link href="styleabout.css" rel='stylesheet' type='text/css' >
     <?php

session_start();?>
	<title>New Trendz - About Us</title>
</head>
<body class="b" style="background-color: #e4e1fb;">
<center>
  <div> 


      <div class="contact row">
       
        <div class="col-md-1 margin" >
          <a class="glyphicon glyphicon-home" href="index.php" style="font-size: 20px;color: white;"><br>Home</a>

        </div>

         <div class="col-md-3 margin" >
          
           <form action="search.php" method="GET"> <input type="text" name="query" style="height: 40px;width: 230px; border-radius: 25px;" placeholder="  Search">&nbsp;
                          <button class="btn" type="submit" >Search</button></form>
        </div>



         <div class="col-md-5 " ><h1 style="color: white;font-family: 'Lucdia Handwriting',cursive;"><center>New Trendz </center></h1>
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
            <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 20px;color: white;" ><br>Cart</a>
        </div>
       
</div>

<!-- <?php

// include 'nav.php';

?> -->

<!-- about section -->
<!-- 
<center>
	
	<div>
		<h1><strong>About Us</strong></h1><br>
		
    		<center><div class="thumbnail" style="width:50%;">
          <br><br>
      				<center><img class="img-rounded" src="../../img/gp.jpg" alt="Profile picture">
      				<div class="caption">
        				<h3><strong>Government Polytechnic, Solapur</strong></h3>
        				<p><h4>Department: Computer Technology (CM)<br>
        					Subject: Capstone Project Planning<hr>
                  <strong>Group Members:</strong><br>
                  1. Shifa Nadaf (Roll no 39)<br>
                  2. Mahek Shahbad (Roll no 50)<br>
                  3. Kausar Shaikh (Roll no 77)<br>
                  4. Shafin Zartar (Roll no 65)<br>
        				We created this web site using HTML,php,java Script and CSS language.</h4></p>
        				
      				</div></center>
    			</div></center>
  			
	
 -->
	<!------------------------ Division 1.0(column 1)-end ------------------------------->
<div class="about-section">
  <h1>About Us</h1>
  <p>We are the students persuing diploma from Govenment Polytecnic, Solapur college Computer Technology(CM) Department.</p>
  <p>We developed this New Trendz site as a final year project of Capstone Project Planning (22058)</p>
</div>

<h2 style="text-align:center"><strong>Our Team</strong></h2>
<div class="row">
  <div class="col-md-3">
    <div class="card">
      <img src="../img/acc.jpg" alt="Jane" style="width:80%">
      <div class="container">
        <h2>Kausar Shaikh</h2>
        <p class="title">Designer & Developer</p>
        <p><b>Enrollment no:</b> 1900150323</p>
        <p><b>Email:</b>kausar@gmail.com</p>
        
      </div>
    </div>
  </div>

    <div class="col-md-3">
      <div class="card">
        <img src="../img/acc.jpg" alt="Mike" style="width:80%">
        <div class="container">
          <h2>Shafin Zartar</h2>
          <p class="title">Designer & Developer</p>
          <p><b>Enrollment No:</b>1900150311</p>
          <p><b>Email:</b> shafin@gmail.com</p>
        </div>
      </div>
    </div>
  
    <div class="col-md-3">
      <div class="card">
        <img src="../img/acc.jpg" alt="John" style="width:80%">
        <div class="container">
          <h2>Shifa Nadaf</h2>
          <p class="title">Designer & Developer</p>
          <p><b>Enrollment No:</b>1900150283</p>
          <p><b>Email:</b> shifa@gmail.com</p>
        </div>
      </div>
    </div>
 
  <div class="col-md-3">
      <div class="card">
        <img src="../img/acc.jpg" alt="John" style="width:80%">
        <div class="container">
          <h2>Mahek Shahbad</h2>
          <p class="title">Designer & Developer</p>
          <p><b>Enrollment No:</b>1900150296</p>
          <p><b>Email:</b> mahek@gmail.com</p>
        </div>
      </div>
    </div>

</div>
	

</div>
  </center>
  </div></center>
<!----------------------------- footer-start ----------------------------------------->
 <?php
include 'foot.php';
?>      
<!----------------------------- footer-end ----------------------------------------->

<!-- end about -->



</body>
</html>