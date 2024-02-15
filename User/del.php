<!-- delete query -->
<?php
include 'connection.php';
if (isset($_GET['id']))
{
	$email='';

                			session_start(); //gets session id from cookies, or prepa
              				if (isset($_SESSION['login'])) { //if sid exists and login for sid exists
              				$email=$_COOKIE['username'];}
$sel=mysqli_query($connect,"SELECT * from `$email` where id='".$_GET['id']."' ");


$delete = mysqli_query($connect,"DELETE FROM `$email` WHERE id='".$_GET['id']."'");


if ($delete)
{
echo "<script>;";
echo "window.alert('Product delete successfully from cart....!');";
echo 'window.location.href = "add.php?id=&cat=";';
echo "</script>";}
else {
echo "<script>;";
echo "alert('Error deleteing product from cart....!');";
echo 'window.location.href = "add.php";';
echo "</script>;";
}
}

?>
<!-- end delete query -->



<!-- update query -->




<!-- end delete query -->



<!-- update query -->



