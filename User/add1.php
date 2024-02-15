
<?php
include "connection.php";
$row=0;
    $update = mysqli_query($connect,"select * from furniture where id='".$_GET['id']."'") or die(mysqli_error($connect));
    $row = mysqli_fetch_array($update);


if($_GET['id']=='' && $_GET['cat']==''){
$name='';
	$mrp='';
	$dealp='';
	$brand='';

	$photo='';

}
else{
    $name=$row['name'];
	$mrp=$row['mrp'];
	$dealp=$row['dealp'];
	$brand=$row['brand'];

	$photo=$row['photo'];
}
if($_GET['id']){
$email='';

                session_start(); //gets session id from cookies, or prepa
              	if (isset($_SESSION['login'])) { //if sid exists and login for sid exists
              		$email=$_COOKIE['username'];}
$asd = "INSERT INTO `$email`(`name`, `mrp`, `dealp`,`brand`, `photo`, `qty`) VALUES ('$name','$mrp','$dealp','$brand','$photo',1)" ;
$add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($add)
{
echo "<script>;";
echo "window.alert('Added to cart successfully....!');";
// echo 'window.location.href = "view.php";';
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
	<title>New Trendz - My Cart</title>
	<style type="text/css">
	.card
	{
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		transition: 0.3s; 
		border-radius: 5px;
	}
	.card:hover{
		box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2); 
	}
	.img{
		border-radius: 5px;
	}
</style>
</head>
<body class="b">
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
          <a class="glyphicon glyphicon-log-in" href="login.php" style="font-size: 17px;color: white;" ><br>Login</a>&emsp;
          <a class="glyphicon glyphicon-user" href="cnt.php" style="font-size: 17px;color: white;" ><br>Contact</a>&emsp;
            <a class="fa fa-info" href="about.php" style="font-size: 17px;color: white;" ><br>About</a>&emsp;
            <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 17px;color: white;" ><br>Cart</a>
        </div>
      </div>

    </div>
  </center>

	<!-- header end -->
<!-- cart section start -->
<h1 style="font-family: 'Zapf-Chanceery', cursive;">&emsp;<cite>Cart</cite></h1>
</div></center>

			<div class="container">
	
	<div class="col-md-12"  style="border: 2px #d1c4c4 solid; border-radius: 8px;"><br><br>
		<?php
							include('connection.php');
							$count=0;
							$total_price=0;
							$email='';

                			// session_start(); //gets session id from cookies, or prepa
              				if (isset($_SESSION['login'])) { //if sid exists and login for sid exists
              				$email=$_COOKIE['username'];}
         
							$fetch=mysqli_query($connect,"SELECT * FROM `$email`") or die(mysqli_error($connect));
							while ($row = mysqli_fetch_array($fetch)) 
							{
								extract($row);
							
						?>
		<div class="card">
			<div class="col-md-5">
				<br>
				
					<img src="../img/<?php echo $row['photo'];?>" class="img" height="150" width="225">
					<p>
					<!-- <a class="text-danger" onClick="return confirm('Are you sure you want to delete this item from cart?);" href="del.php?id=<?php echo $id;?>" title="Delete item from cart"><i class="glyphicon glyphicon-trash"></i>Delete Item</a><br>
					Quantity: <a href="qtyd.php?id=<?php echo $id;?>" title="Decrease Quantity">
            					<i class="glyphicon glyphicon-minus"></i>
          					  </a>
          						<?php echo $row['qty']?>
					          <a href="qtyi.php?id=<?php echo $id;?>" title="Increase Quantity">
					            <i class="glyphicon glyphicon-plus"></i>
					          </a></p>
					<br>
				 -->
			</div>
			<div class="col-md-7">
				<br>
				<p><strong>Name:</strong> <?php echo $row['name']?>  <br>
				   <strong>MRP:</strong> <?php echo $row['mrp']; ?>/- <br>
				   <strong>Deal Price:</strong> <?php echo $row['dealp']; $total_price+=$row['dealp'];?>/- <br>
				   <strong>Brand:</strong> <?php echo $row['brand'];?>kg
				</p>
				<p><br>Date: <?php echo $row['date_time']; ?></p>
				<p>
					<a class="text-primary" onClick="return confirm('Are you sure you want to delete this item from cart?);" href="del.php?id=<?php echo $id;?>" title="Delete item from cart"><i class="glyphicon glyphicon-trash"></i> Delete Item</a><br>
					Quantity: <a href="qtyd.php?id=<?php echo $id;?>" title="Decrease Quantity">
            					<i class="glyphicon glyphicon-minus"></i>
          					  </a>
          						<?php echo $row['qty']?>
					          <a href="qtyi.php?id=<?php echo $id;?>" title="Increase Quantity">
					            <i class="glyphicon glyphicon-plus"></i>
					          </a></p>
					          <br>
			</div>
		</div><br><br>
		<?php 
						} 
		?>
		<br>
	</div></center></div></center><form><input type="submit" name="placed_order" value="Place Order"/></form>

<!-- cart section end -->

<!-- footer start -->
<!-- <?php
include 'foot.php';
?> -->
<!-- footer end -->
</body>
</html>