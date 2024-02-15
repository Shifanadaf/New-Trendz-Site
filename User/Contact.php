<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- link -->
<link rel="stylesheet" type="text/css" href="css/style4.css">
 <link href="css/styleindex.css" rel='stylesheet' type='text/css' >
</head>
<body>

<?php

session_start();?>
<!-- contact us -->



<div class="row"> 
  <div  class="container" id="container">
<!-- Google map start -->
	      <center><h1>Contact Us</h1></center><br>

        <div class="column" style="background-color:#e4e1fb;">
          <center><h2>Google Map</h2></center><br><br><br>
          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.31977747976!2d75.91095921411073!3d17.635007287930705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da1ce5e3b57d%3A0x16da55b7823d3eef!2sD%20Mart!5e0!3m2!1sen!2sin!4v1630403152062!5m2!1sen!2sin" width="520" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        </div>

<!-- Google map end -->


          <!-- leave us a msg -->

            <div class="column" style="background-color:#e4e1fb;">

                  <h2>Leave a Massage</h2>

                  <form method="post"><br><br>
                    <!-- name feild -->
                      <label >First Name</label>
                      <input type="text" id="fname" name="fname" placeholder="Your name..">
                    <!-- lname feild -->
                      <label >Last Name</label>
                      <input type="text" id="lname" name="lname" placeholder="Your last name..">
                    <!-- country feild -->
                      <label >City</label>
                        <input type="text" id="country" name="country" placeholder="enter Your  city..">
                      <!-- <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                      </select> -->
                      <!-- subject feild -->
                      <label >Feed Back</label>
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:157 px"></textarea>
                       <input type="submit" value="submit" name="submit">
                     </form>
            </div>
  </div><br><br><br><!---container--->
</div><!--- row--->




<!-- leave us a msg end -->


 
<!-- end contact -->
<!-- <?php
if(isset($_POST['submit']))
{
extract($_POST);


    $asd = "INSERT INTO `contact_us`( `fname`, `lname`, `country`, `subject`)  VALUES ('$fname','$lname','$country','$subject')" ;
    $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($add)
{
echo "<script>;";
echo "window.alert('Feedback sent successfully....!');";
echo 'window.location.href = "Contact.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo "</script>";
}
}
?> -->


</body>
</html>