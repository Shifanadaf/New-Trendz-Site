<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


<!----------------------from W3 school--------------------->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body style="background-image: url('img/bg.jpg');background-size: cover;
">

<?php 
include 'connection.php';


?>

<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
        	<div class="brand">
    <a href="#" class="logo">
    	 <i class="glyphicon glyphicon-user"></i>
     Admin
    </a>
    </div>
            <ul class="sidebar-menu" id="nav-accordion">
                              <li>
                    <a class="active" href="main.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="view_pro.php">
                        <i class="glyphicon glyphicon-th"></i>
                        <span>View products</span>
                        </a>
                    
                </li>
                <li>
                    <a class="active" href="deal.php">
                        <i class="glyphicon glyphicon-th"></i>
                        <span>View Deals products</span>
                        </a>
                    
                </li>
                <li>
                    <a class="active" href="add_pro.php">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Insert a product</span>
                    </a>
                </li>
                <li>
                    <a class="active" href="feed.php">
                        <i class="glyphicon glyphicon-comment"></i>
                         <span>FeedBack</span>
                    </a>
                </li>
                <li>
                    <a class="active" href="logout.php">
                        <i class="glyphicon glyphicon-log-out"></i>
                        <span>Log out</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</aside>    


 <center><h1 style="margin-left: 200px; margin-top: 50px;"><strong>View Deals Products</strong></h1></center>


<section id="main-content" style="margin-top:-50px;">
<section class="wrapper">
<!-- //market-->



<div class="container" style="background-color: white;width: 95%;">

<table id="datatable" class="table table-striped table-bordered" style="margin-top: 15px;">
<thead>
<tr>
<th>Sr No</th>
<th>Pname</th>
<th>MRP price</th>
<th>Deal price</th>
<th>photo</th>
<th>Description</th>
<th>About item</th>
<th>Color</th>

<th>Material</th>
<th>Stock Qty</th>


<th>Brand</th>
<th>Category</th>
<th>Action</th>


</tr>
</thead>
<tbody>
	<?php

	 $view = mysqli_query($connect,"SELECT * FROM `deals`;") or die(mysqli_error($connect));

	$counter = 0;


while ($row = mysqli_fetch_array($view)) {
	extract($row);

?>
<tr>
<td><?php echo ++$counter; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['mrp']; ?></td>
<td><?php echo $row['dealp']; ?></td>
<td><img src="../img/<?php echo $row['photo'];?>" height="100"
width="100"></td>
<td><?php echo $row['discription']; ?></td>
<td><?php echo $row['about']; ?></td>
<td><?php echo $row['color']; ?></td>
<td><?php echo $row['material']; ?></td>
<td><?php echo $row['stockqty']; ?></td>
<td><?php echo $row['brand']; ?></td>




<td><?php echo $row['cat']; ?></td>

<td>

<a class="text-danger" onClick="return confirm('Are you sure you want to delete this product details ?);"
href="deal.php?id=<?php echo $id;?>"
title="Delete product details"><i class="glyphicon glyphicon-trash"></i></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div><br>
<br><br><br>
 
</section></section>
<!-- delete query -->
<?php
if (isset($_GET['id']))
{
$sel=mysqli_query($connect,"select * from deals where
id='".$_GET['id']."' ");
while ($fetch=mysqli_fetch_array($sel))
 {
 $img=$fetch["Photo"];
 }
 $isrc="image/".$img;
 unlink($isrc);

 $delete = mysqli_query($connect,"delete from deals where
id='".$_GET['id']."'");


if ($delete)
{
echo "<script>;";
echo "window.alert('Data delete successfully....!');";
echo 'window.location.href = "deal.php";';
echo "</script>";}
else {
echo "<script>;";
echo "alert('registration data error....!');";
echo 'window.location.href = "main.php";';
echo "</script>;";
}
}

?>
<!-- end delete query -->



<!-- update query -->




</body>
</html>