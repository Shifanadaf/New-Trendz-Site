<!-- INCREASE QTY query -->
<?php
include 'connection.php';
if (isset($_GET['id']))
{
	$email='';

                			session_start(); //gets session id from cookies, or prepa
              				if (isset($_SESSION['login'])) { //if sid exists and login for sid exists
              				$email=$_COOKIE['username'];}
$sel=mysqli_query($connect,"SELECT * FROM `$email` WHERE
id='".$_GET['id']."' ");
 $row = mysqli_fetch_array($sel);
 $qty=$row['qty'];
 if ($qty<5) {

 	$qty=$qty+1;
 	echo '$qty';
	 $inc = mysqli_query($connect,"UPDATE `$email` SET `qty`='".$qty."' WHERE 
	id='".$_GET['id']."'");


	if ($inc)
	{
	echo "<script>;";
	// echo "window.alert('Data delete successfully....!');";
	echo 'window.location.href = "add.php?id=&cat=";';
	echo "</script>";}
	else {
	echo "<script>;";
	echo "alert('registration data error....!');";
	echo 'window.location.href = "add.php";';
	echo "</script>;";
	}
 }
 else
 {
 	echo "<script> alert('You cannot order more than 5 products of a type');</script>";
 	echo "<script>;";
	// echo "window.alert('Data delete successfully....!');";
	echo 'window.location.href = "add.php?id=&cat=";';
	echo "</script>";
 }
 
 
}

?>
<!-- end delete query -->
