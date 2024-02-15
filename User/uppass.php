<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
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
			color: white;	
		  font-family: "times new roman",times,serif;
		}
#email,#pass,#nickname
{
  width:250px;
  height: 40px ;
}

 </style>

</head>
<body>
<center>

   <div class="container" style="margin-top: 190px;margin-left: 195px; " >
   <div class="form">
    <form class="cmxform form-horizontal tasi-form" method="post" novalidate="novalidate" enctype="multipart/form-data">
      <div class="form-group">

<div class="login-box" >
  <strong><h1>Forget password</h1></strong><br>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Enter Username/ Email" id="email" name="email" >
  </div><br>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Enter New Password" id="pass" name="pass">
  </div><br>

<div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Enter nickname" id="nickname" name="nickname" >
  </div><br>

 <a href="index.php" class="btn btn-md btn-warning" id="btn1" value="Back to login" name="login">Back to login</a>
  <input type="submit" class="btn btn-md btn-success" id="btn1" value="Update Password" name="uppass">
</div>

</div>
</div>
</form>
</div>
</center>
<?php
include 'connection.php';
if(isset($_POST['uppass']))
{
extract($_POST);
 
  
if($nickname== 'admin')

{
$update = mysqli_query($connect,"UPDATE `admin` SET `pass`='".$pass."' WHERE email='".$email."' ") or die
(mysqli_error($connect));
if($update )
{
echo "<script>;";
echo "window.alert('Data update successfully....!');";
echo 'window.location.href = "index.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo 'window.location.href ="uppass.php";';
echo "</script>";
}
}
else
{
echo "<script>;";
echo "window.alert('plz enter correct nickname!');";
echo 'window.location.href ="uppass.php";';
echo "</script>";
}
}
?>

   

</body>
</html>
