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


   <?php

session_start();?>
  <title></title>

<script type="text/javascript">
//Deop down menu linking script end

//Script for marquee < >
function mar()
{
document.getElementById('m').stop();


}
function out()
{

document.getElementById('m').start();

}
// function set_i()
// {
//   i=0;
// }
</script>



</head>
<body onload="ShowBanners()" style="background-color: #e4e1fb; " >
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
  

<h1>&emsp;<u>Search Results</u></h1></center><br>
<?php
include 'connection.php';
	$query = $_GET['query']; 
	// gets value sent over search form
	
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = mysqli_real_escape_string($connect,$query);
		// makes sure nobody uses SQL injection
		
		$raw_results = mysqli_query($connect,"SELECT * FROM products
			WHERE (`name` LIKE '%".$query."%') OR (`brand` LIKE '%".$query."%') OR  (`cat` LIKE '%".$query."%') OR (`discription` LIKE '%".$query."%')") or die(mysql_error());

			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table   OR (`dname` LIKE '%".$query."%')
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
?>			
<div class="row"><div class="col-md-12"><?php
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
?>	
	<div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <br>
                   <img src="../img/<?php echo $results['photo'];?>" alt="loading" height="175px" width="250px">
                    <div class="caption">
                      <h3><?php echo $results['name']?> </h3>
                      <p>Price:<?php echo $results['dealp']?></p>
                      <p style="margin-left:40px;"><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button"style="padding: 2%; width: 100px;">Add to cart</a>&emsp;
                 <a href="view.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button"style="padding: 2%;width: 100px;">View details</a>  </p>


                    </div>
                
              </div>


          </div>
<?php 
}   ?>
</div><!-- end row-->     
</div><!-- end row-->
    
    <?php
			
			
		}
		else{ // if there is no matching rows do following
			echo "No results Found";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>

</center><br>
 <!-- footer1 -->

	</center>
	<?php
include 'footer.php';
?>
</body>
</html>

  
