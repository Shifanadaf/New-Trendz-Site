<!-- <!DOCTYPE html>
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
  <title>New Trendz - View details</title>
</head>
<body class="b"> -->


<?php
include 'view/DBController.php';
$db_handle = new DBController();
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style5.css" rel="stylesheet" type="text/css">
</head>
<?php

session_start();?>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="style.css" rel='stylesheet' type='text/css' >
     <!-- <link href="css/styleindex.css" rel='stylesheet' type='text/css' > -->
   <script type="text/javascript" src="js/pro.js"></script>
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
          <a class="glyphicon glyphicon-user" href="cnt.php" style="font-size: 17px;color: white;" ><br>Contact</a>&emsp;
            <a class="fa fa-info" href="about.php" style="font-size: 17px;color: white;" ><br>About</a>&emsp;
            <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 17px;color: white;" ><br>Cart</a>
        </div>
      </div>

    </div>
  </center>
<div class="container">
<?php 
$id1=$_GET['id'];
$productResult = $db_handle->runQuery("SELECT * FROM products WHERE id = '$id1';");
if (! empty($productResult)) {
    ?>
     
        <div id="product-view" style="width: 100%;">
    <?php 
    $productImageResult = $db_handle->runQuery("SELECT * FROM product_image WHERE product_id = '$id1';");
    if(! empty($productImageResult)) {
    ?> 
            <div class="preview-image">
            <div id="preview-enlarged">
            <img src="../img/<?php echo $productImageResult[0]["preview_source"] ; ?>" />
            </div>
            
            <div id="thumbnail-container">
            <?php foreach($productImageResult as $key=>$value) { 
                $focused = "";
                if($key == 0) {
                    $focused = "focused";
                }
                ?>
                <img class="thumbnail <?php echo $focused; ?>" src="../img/<?php echo $productImageResult[$key]["preview_source"] ; ?>" />
            <?php } ?>
            </div>
        </div>
        <?php } ?>
        <div class="product-info">
                <div class="product-title"><?php echo $productResult[0]["name"] ; ?></div><br>
               
                <!-- <div class="product-category"><?php echo $productResult[0]["cat"] ; ?></div> -->
                <div>MRP: <s><?php echo $productResult[0]["mrp"] ; ?> Rs.</s>  <br><br>
                  Deal Price: <?php echo $productResult[0]["dealp"] ; ?> Rs.
                </div><br>

                <div>Brand:<?php echo $productResult[0]["brand"] ; ?></div>  <br>
                <div>Color:<?php echo $productResult[0]["color"] ; ?></div>  <br>

                
                <div><a href="add.php?id=<?php echo $id1;?>&cat=<?php echo $productResult[0]["cat"];?>" ><input type="submit" name="submit" class="btn-info" value="Add to Cart" style="padding: 10px;
    margin: 20px 20px 10px 0px;
    padding: 10px 20px;
    background: #67bdf7;
    border: #60b2e8 1px solid;
    border-radius: 3px;
    color: #FFF;"/></a></div>
            </div> 

        <div class="product-info">
          <table cellspacing="30" cellpadding="10">
            <tr>
            <th>Descreption: </th>
            <td>
                <div><?php echo $productResult[0]["discription"] ; ?></div>  <br>

            </td>

            </tr>

            <tr>
            <th>About This Item: </th>
            <td>
                <div><?php echo $productResult[0]["about"] ; ?></div>  <br>

            </td>
            </tr>
          </table>
        </div>


<?php
}
?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>
$("#thumbnail-container img").click(function() {
  $("#thumbnail-container img").css("border", "1px solid #ccc");
    var src = $(this).attr("src");
    $("#preview-enlarged img").attr("src", src);
    $(this).css("border", "#fbb20f 2px solid");
    
});
</script>

</div>
<?php
include 'foot.php';
?>
</body>
</html>