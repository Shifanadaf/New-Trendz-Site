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


<style>
 .form_box{width:500px; margin:0 auto; margin-top:10px; marginbottom: 40px; text-align: left;}
 .fileinput{margin-left:0px;}
 .preview_box{clear: both; padding: 5px; margin-top: 10px; textalign:left;}
 .preview_box img{max-width: 150px; max-height: 150px;}
</style>
<script type="text/javascript">
 $(document).ready(function(){

 $("#image").change(function(){
 readImageData(this);

 });
 });

 function readImageData(imgData){
 if (imgData.files && imgData.files[0]) {
 var readerObj = new FileReader();

 readerObj.onload = function (element) { 
    $('#preview_img').attr('src', element.target.result);
 }

 readerObj.readAsDataURL(imgData.files[0]);

 }
 }
</script>
</head>
<body>

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
                    <a class="active" href="v1.php">
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
</aside>    <center><h1 style="margin-left: 200px; margin-top: 50px;"><strong>update furniture</strong></h1></center>

<section id="main-content" style="margin-top:-50px;">
<section class="wrapper">
<!-- //market-->
<?php
if($_GET['id'])
{
$update = mysqli_query($connect,"select * from products where
id='".$_GET['id']."'") or die(mysqli_error($connect));
$row = mysqli_fetch_array($update);
}
?>


        <div class="panel panel-default" style="align-items: center;">
  <div class="panel-body">
        <center><table class="table table-bordered" >
            <tr>

        <form name="add_pro" method="post">
          <div class="form-group">
            <td><label >Enter product name:</label></td>
            <td><input type="text" class="form-control" name="pname" value="<?php echo $row['name']; ?>"></td>
          </div>
        </tr>


        <tr>
          <div class="form-group">
            <td><label >Enter product MRP:</label></td>
            <td><input type="number" class="form-control" name="price" value="<?php echo $row['mrp']; ?>"></td>
          </div>
          </tr>

          <tr>
          <div class="form-group">
            <td><label >Enter product deal price:</label></td>
            <td><input type="number" class="form-control" name="dprice" value="<?php echo $row['dealp']; ?>"></td>
          </div>
          </tr>


          <tr>
          <div class="form-group">
           <td> <label >Choose thumbnail for the product:</label><br>
            <img src="..." alt="photonotloaded"></td>
           <td> <input type="file" name="photo" accept=".png, .jpeg, .jpg"></td>

            <!-- <p class="help-block">Example block-level help text here.</p> -->
          </div>
            </tr>

             <tr>
          <div class="form-group">
            <td><label >Enter product Description:</label></td>
            <td><textarea name="discription" class="form-control" rows="4" placeholder="Item details"><?php echo $row['discription']; ?></textarea></td>
          </div>
          </tr>


          <tr>
          <div class="form-group">
            <td><label >Enter product color:</label></td>
            <td><input type="text" class="form-control" name="color" value="<?php echo $row['color']; ?>"></td>
          </div>
          </tr>


           <tr>
          <div class="form-group">
            <td><label >Enter product material:</label></td>
            <td><input type="text" class="form-control" name="material" value="<?php echo $row['material']; ?>"></td>
          </div>
          </tr>



           <tr>
          <div class="form-group">
            <td><label >Enter product StockQuantity:</label></td>
            <td><input type="number" class="form-control" name="qty" value="<?php echo $row['stockqty']; ?>"></td>
          </div>
          </tr>



           <tr>
          <div class="form-group">
            <td><label >Enter product brand:</label></td>
            <td><input type="text" class="form-control" name="brand" value="<?php echo $row['brand']; ?>"></td>
          </div>
          </tr>
          <tr>
          <div class="form-group">
            <td><label >Enter the item details:</label></td>
            <td>
              <!-- <input type="text" class="form-control" name="about" placeholder="item details "> -->
              <textarea name="about" class="form-control" rows="4" placeholder="Item details"><?php echo $row['about']; ?></textarea>
            </td>
          </div>
          </tr>


              <tr>
          <div class="form-group">
            <td><label >Choose catagorty of the product:</label></td>
          <td>  <select class="form-control" name="cat">
                <option value="sofa" <?php if($row['cat']=='sofa'){echo "selected";}?>>Sofa</option>
                <option value="table"<?php if($row['cat']=='table'){echo "selected";}?>>Table</option>
                <option value="bed" <?php if($row['cat']=='bed'){echo "selected";}?>>Bed</option>
                <option value="chair" <?php if($row['cat']=='chair'){echo "selected";}?>>Chair</option>
                <option value="cup" <?php if($row['cat']=='cup'){echo "selected";}?>>CupBoard</option>
                
                <!-- Furniture options end -->
                
                <option value="clock" <?php if($row['cat']=='clock'){echo "selected";}?>>Clock</option>
                <option value="frame" <?php if($row['cat']=='frame'){echo "selected";}?>>Frame</option>
                <option value="curtain"<?php if($row['cat']=='curtain'){echo "selected";}?>>Curtain</option>
                <option value="light"<?php if($row['cat']=='light'){echo "selected";}?>>Lights</option>
                <option value="pillow"<?php if($row['cat']=='pillow'){echo "selected";}?>>Pillows</option>
                
                <!-- Home Decor options end -->

                <option value="uten"<?php if($row['cat']=='uten'){echo "selected";}?>>Utensils</option>
                <option value="gas"<?php if($row['cat']=='gas'){echo "selected";}?>>Gas Stove</option>
                <option value="container"<?php if($row['cat']=='container'){echo "selected";}?>>Container</option>
                <option value="rack"<?php if($row['cat']=='rack'){echo "selected";}?>>Kitchen Racks</option>
                <option value="clean"<?php if($row['cat']=='clean'){echo "selected";}?>>Kitchen Cleaning</option>
                <

                <!-- Kitchenware options end  -->
                
                <option value="home" <?php if($row['cat']=='home'){echo "selected";}?>>Home Appliances</option>
                <option value="kitchen" <?php if($row['cat']=='kitchen'){echo "selected";}?>>Kitchen Appliances</option>
                <option value="mobile" <?php if($row['cat']=='mobile'){echo "selected";}?>>Mobile Accessories</option>
                <option value="lc" <?php if($row['cat']=='lc'){echo "selected";}?>>Laptop and Computer</option>
                <option value="cam" <?php if($row['cat']=='cam'){echo "selected";}?>>Camera Accessories</option>
                <!-- Electronics options end  -->

                

            </select></td>
          </div>
        </tr>
          <tr >
          <td colspan="2" ><center style="margin-left: -70px"><button type="submit"  name="update" class="btn btn-success">Update</button>&ensp;
              
        </tr>
        </form></table></center>
        

  </div>
</div>
    </section></section>
<!-- end delete query -->



<!-- update query -->




</body>
</html>

<?php

if(isset($_POST['update']))
{
extract($_POST);

 
 // $p_name=$_FILES['photo']['name'];
 // $type=$_FILES['photo']['type'];
 // $size=$_FILES['photo']['size'];
 // $temp=$_FILES['photo']['tmp_name'];
 // if($pname)
 // {

 // $upload= "image/";
 // $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION));
 // $valid_ext= array('jpg','png','jpeg' );
 // $photo= rand(1000,1000000).".".$imgExt;
 // unlink($upload.$row['Photo']);
 // move_uploaded_file($temp,$upload.$photo);
 // }
 // else
 // {
 // $photo=$row['photo'];
 // }
$update = mysqli_query($connect,"update `products` set 
name='".$pname."', 
mrp='".$price."',
dealp='".$dprice."', 
photo='".$photo."',
discription='".$discription."', 
color='".$color."',
material='".$material."',
stockqty='".$qty."',
brand='".$brand."',
cat='".$cat."',
about='".$about."'
where id='".$_GET['id']."' ") or die
(mysqli_error($connect));
if($update)
{
echo "<script>;";
echo "window.alert('Data update successfully....!');";
echo 'window.location.href = "view_pro.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo 'window.location.href ="update-pro.php";';
echo "</script>";
}
}

?>