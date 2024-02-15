<?php
require 'connection.php';
?>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<body style="background-image: url(../img/s10.jpg);background-size: cover; margin-top: 10%">
<div class="container" >
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form method="post">
        <h1><center>Login</center></h1>
        UserName:<br><input type="text" class="form-control" name="login"><br>
        Password:<br><input type="password" class="form-control" name="password"><br>
        <br><CENTER>
          <a style="color: white;" href="register.php" id="create_acc"> Create a new account</a><br>
          <label style="color: white;">OR</label><br>
          <a style="color: white;" href="uppass.php" id="create_acc"> Forgot password?</a><br>
        <input type="submit" name="submit" value="Login" class="btn btn-success"></CENTER>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
</body>
<?php

session_start();
if (isset($_POST['submit'])) {
  # code...

if (isset($_POST['login']) && isset($_POST['password']) && $_POST['login'] != '' && $_POST['password'] != '') //when form submitted
{

  $sel = mysqli_query($connect, "SELECT * FROM `register` WHERE email='".$_POST['login']."' && pass = '".$_POST['password']."'");
  $row = mysqli_fetch_assoc($sel);
  if (mysqli_num_rows($sel) > 0) {
    if ($_POST['login'] === $row['email'] && $_POST['password'] === $row['pass'])
    {
      $_SESSION['login'] = $_POST['login']; //write login to server storage
      setcookie ("username",$_POST["login"],time()+ 7200);
      setcookie ("password",$_POST["password"],time()+ 7200);
      // header('Location: /login-with-session-cookie/'); 
      header('Location: index.php'); //redirect to main
      //redirect to main
    }
  }
  else
  {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}else{
  echo "<script>alert('UserName and password field required');</script>";
}
}
?>