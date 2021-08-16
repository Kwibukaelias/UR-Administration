<?php
  $error ='';
  include('db-connect.php');
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['pass'];
  $sql = "SELECT admin_id FROM admin WHERE username='$username' and password='$password'";
  //getting result
  $result = mysqli_query($conn,$sql);
  //fetching results rows in array
  $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
  //checking how many answers
  $count=mysqli_num_rows($result);
  if($count == 1){
    header('location: dashboard.php');
}
  else{
    echo"<script> alert('username or password is incorrect')</script>";
  }
}

?>

<!doctype html>
<html>
<head>
<title>UR ADMINISTRATION</TITLE>
<style>
body{
height:100%;
}
.form{
font-family:Microsoft Tai Le;
color:#bbaa11;

}
</style>
</head>
<body width="90%" style="background-color:green;">
<div class="upper">
<center><h2>UR ADMINISTRATION</h2>

<div class="form">
<center>
<form action="login.php" method="POST" style="background-color:#334433; width:20%; height:160px; border-radius:10%;">

<b><center> LOGIN FORM</center></B>
<br><br>
<table border="0">
<tr>
<td><input type="text" name="username" placeholder="Enter your username"></td></TR>
<tr><td><input type="password" name="pass" placeholder="enter your password"></td></tr>
<tr>
<td colspan="1" valign="bottom"><center><input type="submit" name="submit" value="Login">
<!-- &nbsp&nbsp <input type="submit" name="submit" value="Login"> </center> -->
</form></center>
</div>
</div>
</body>
</html>