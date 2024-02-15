<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      
    </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 <style type="text/css">
   body
   {
    background-image: url('../img/bg3.jpg') ;
      background-size: cover;
   }
h1
{
  font-family: "times new roman",times,serif;
}
#email,#pass
{
  width:250px;
  height: 40px ;
}

 </style>
  </head>
  <body>
<center>

   <div class="container"  style="margin-top: 180px;margin-left: 200px;  " >
   <div class="form">
    <form class="cmxform form-horizontal tasi-form" method="post" novalidate="novalidate" enctype="multipart/form-data">
      <div class="form-group">

<div class="login-box"  >

  <strong><h1 style="color:white;">Login</h1></strong><br>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username/ Email" id="email" name="email" >
  </div><br>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" id="pass" name="pass">
  </div><br>
  <div><a href="uppass.php">Forgot password?</a></div><br>
 <a href="../User/index.php" class="btn btn-md btn-warning" id="btn1" value="Home" name="Home">Home</a>
  <input type="submit" class="btn btn-md btn-success" id="btn1" value="Login" name="login">
</div>


</div>
</div>
</form>
</div>
</center>




<?php
include 'connection.php';


if(isset($_POST['login']))
{
  extract($_POST);

  $email=mysqli_real_escape_string($connect,$_POST['email']);
  $pass=mysqli_real_escape_string($connect,$_POST['pass']);

$log=mysqli_query($connect,"select * from admin where email='$email' and pass='$pass'")
or die (mysqli_error($connect));

  if(mysqli_num_rows($log)>0)
 {
  $fetch=mysqli_fetch_array($log);
   
  $_SESSION['id']=$fetch['id'];
  $_SESSION['email']=$fetch['email'];
  $_SESSION['pass']=$fetch['pass'];

 
  echo "<script>";
  echo 'window.location.href="main.php";';
  echo "</script>";

 }
else
 {
  echo "<script>";
  echo "alert('Login Failed');";
  echo "</script>";
 }
}

?> 


  </body>
</html>
