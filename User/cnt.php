<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="pro.js"></script>
	<link href="style.css" rel='stylesheet' type='text/css' >
  <link href="css/style4.css" rel='stylesheet' type='text/css' >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php

session_start();?>
 <link href="css/styleindex.css" rel='stylesheet' type='text/css' >
<!-- <?php
include 'connection.php';

?>
<!-  Form validation -->
<script type="text/javascript">
  function validateForm() {
  let f = document.forms["myForm"]["fname"].value;
  let l = document.forms["myForm"]["lname"].value;
  let e = document.forms["myForm"]["email"].value;
  let fb = document.forms["myForm"]["fb"].value;
  var reg=/[\d]/;
  if (f == ""  || f.match(reg) )
   {
    alert("Plz fill only letters in Fisrt name");
    return false;
  }
    if (l == "" || l.match(reg)) 
    {
    alert("Plz fill only letters in last name");
    return false;
  }
  if (e == "" ) 
  {
    alert("email must be filled out");
    return false;
  }
  if (fb == "" ) 
  {
    alert("Feedback must be filled out");
    return false;
  }
}
</script>
</head>

<body class="b" style="background-color: #e4e1fb">
<center>
	<div> 


      <div class="contact row" >
       
        <div class="col-md-1 margin" >
          <a class="glyphicon glyphicon-home" href="index.php" style="font-size: 20px;color: white;"><br>Home</a>

        </div>

         <div class="col-md-3 margin" >
          
           <form action="search.php" method="GET"> <input type="text" name="query" style="height: 40px;width: 230px; border-radius: 25px;" placeholder="  Search">&nbsp;
                          <button class="btn" type="submit" >Search</button></form>
        </div>



         <div class="col-md-5 " ><h1 style="color: white;font-family: 'Lucdia Handwriting',cursive;"><center>New Trendz </center></h1>
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
          <a class="glyphicon glyphicon-user" href="cnt.php" style="font-size: 20px;color: white;" ><br>Contact</a>&emsp;
            <a class="fa fa-info" href="about.php" style="font-size: 20px;color: white;" ><br>About</a>&emsp;
            <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 20px;color: white;" ><br>Cart</a>
        </div>
       
</div>
		<!--  contact us form -->
<center>
		<div class="row"  > 
  <div  class="container" id="container"style="background-color:#bbb;">
<!-- Google map start -->
        <center><h1>Contact Us</h1></center><br>

        <div class="column">
          <center><h2>Google Map</h2></center><br><br><br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.541582751392!2d75.92072481390949!3d17.671857887908686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da5dc381e2b5%3A0x74dd6309403c8258!2sGovernment%20Polytechnic%2C%20Solapur!5e0!3m2!1sen!2sin!4v1647598687480!5m2!1sen!2sin" width="520" height="385" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     
        </div>

<!-- Google map end -->


          <!-- leave us a msg -->

            <div class="column" style="background-color:#bbb;">

                  <h2>Leave a Massage</h2>

                  <form method="post"><br><br>
                    <!-- name feild -->
                      <label >First Name</label>
                      <input type="text" id="fname" name="fname" placeholder="Your name..">
                    <!-- lname feild -->
                      <label >Mobile</label>
                      <input type="text" id="mob" name="mob" placeholder="Your Mobile number..">
                    <!-- country feild -->
                      <label >City</label>
                        <input type="text" id="city" name="city" placeholder="enter Your  city..">
                     
                      <label >Subject</label>
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:157px"></textarea>
                       <input type="submit" value="submit" name="submit">
                     </form>
            </div>
  </div><br><br><br><!---container--->
</div><!--- row--->


</center></div></center>

<!-- footer start -->

<?php
include 'foot.php';
?>

<!-- footer end -->
<br>

<?php
if(isset($_POST['submit']))
{
extract($_POST);


    $asd = "INSERT INTO `cnt`( `fname`, `lname`, `email`, `feed`)  VALUES ('$fname','$lname','$email','$fb')" ;
    $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($add)
{
echo "<script>;";
echo "window.alert('Feedback sent successfully....!');";
echo 'window.location.href = "cnt.php";';
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

</body>
</html>
