<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


	<link rel="stylesheet" href="css/style1.css" type="text/css">
</head>

    <body  style="background-color: #EBF4FA;">
	<?php

	include 'connection.php';

	?>
<center>
	<div class="main">
		<div class="register">
			<h2>Register Here</h2>
			<form id="register" method="post">
				<label>First Name: </label><br>
				<input class="in" type="text" name="name" id="name" placeholder="Enter Your First Name" style="color: black;"><br><br>

				

                <label>Email: </label><br>
                <input style="color: black;" type="email" name="email" id="name" placeholder="Enter Your valid Email id"><br><br>

                <label>Address: </label><br>
                <input style="color: black;" type="addresss" name="address" id="name" placeholder="Enter Your Address"><br><br>

            
                <label>Password: </label><br>
                <input style="color: black;" type="Password" name="pass" id="name" placeholder="Enter Your Password"><br><br><br>
                <label>Phone no: </label><br>
                <input style="color: black;" type="text" name="ph_no" id="ph_no" placeholder="Enter Your phone no"><br><br><br>
                
                <input  type="button" value="Login" name="Login" id="Login" class="btn btn-md btn-warning"><a href="login.php"></a>
                <input type="submit" value="submit" class="btn-md btn-success" name="submit" id="submit">

      </center>         

        </form>
    </div>
</div><br><br>

	</body>
	</html>
<?php
if(isset($_POST['submit']))
{
extract($_POST);


    $asd = "INSERT INTO `register`(`name`, `email`, `address`, `pass`, `ph_no`)  VALUES ('$name', '$email', '$address', '$pass', '$ph_no');" ;

    $table= "CREATE TABLE `$email` (
    id int(100) auto_increment,
    name varchar(255),
    mrp int(100),
    dealp int(100),
    brand varchar(255),
    photo varchar(255),
    qty int(100),
    pid int(100),
    pcat varchar(255),
    date_time DATETIME(6) DEFAULT CURRENT_TIMESTAMP(6),
     PRIMARY kEY(id)
);";
    $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
    $tb = mysqli_query($connect,$table) or die(mysqli_error($connect));

    
if($add)
{
echo "<script>;";
echo "window.alert('Register successfully....!');";
echo 'window.location.href = "index.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo "</script>";
}
}
?>
