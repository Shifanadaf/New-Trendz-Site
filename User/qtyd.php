add<!-- INCREASE QTY query -->
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
 $qty=$qty-1;
 if($qty > 0)
 {
 	$dec = mysqli_query($connect,"UPDATE `$email` SET `qty`='".$qty."' WHERE id='".$_GET['id']."'");

	if ($dec)
		{
			echo "<script>;";
			echo 'window.location.href = "add.php?id=&cat=";';
			echo "</script>";
		}
	else 
		{
			echo "<script>;";
			echo "alert('Couldn\'t decrease quantity....!');";
			echo 'window.location.href = "add.php?id=&cat=";';
			echo "</script>;";
		}
 }
 else 
	{
		echo "<script>;";
		echo "alert('Quantity can\'t be zero');";
		echo 'window.location.href = "add.php?id=&cat=";';
		echo "</script>;";
	}

}

?>
<!-- end delete query -->
