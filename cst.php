<?php
include('./db-connect.php');

$sql = "SELECT * FROM college_leader WHERE department='cst'";
//getting result
$result = mysqli_query($conn,$sql);
//fetching results rows in array
$leader1= mysqli_fetch_all($result,MYSQLI_ASSOC);
$leader = $leader1[0];

?>

<!doctype html>
<html>
<head>
<title>UR ADMINISTRATION</TITLE>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.upper{
height:70%;
background-color:#ccbb34;
width:90%;
margin-left:5%;
}
.footer{
height:10%;

width:90%;
background-color:#ccbb34;
margin-left:5%;
}
a{
font-family: Constantia;
text-decoration:none;}
</style>
</head>
<body width="90%" style="background-color:green;">
<div class="upper">
<center><h2>UR ADMINISTRATION</h2>


<BUTTON><a href="home.html">HOME</a></button>
<div class="dropdown">
 <button class="dropbtn"><a href="#">CAMPUSES</a></button>
 <div class="dropdown-content">
  <a href="huye.php">HUYE</a>
 <a href="#">MUSANZE</a>
 <a href="#">RWAMAGANA</a>
 <a href="#">NYARUGENGE</a>
 <a href="#">RUSIZI</a>
 <a href="#">NYAGATARE</a>
 <a href="#">GIKONDO</a>
 <a href="#">RUKARA</a>
 </div>
</div>
<BUTTON><a href="contact.html">CONTACT US</a></button>
<BUTTON><a href="about.html">ABOUT US</a></button>
<BUTTON align="right"><a href="login.php">LOGIN</a></button>
</center>
<br>
<h3><center>IN THIS CAMPUS THERE IS AROUND FOUR COLLEGES THAT HAS ALSO MANY SCHOOLS</center></h3>
<table width="90%" border="0" style="margin-left:5%;">
<tr>
<td width="20%" style="margin-top:5%;">
<B>SCHOOLS IN <a href="cst.php">CST</a><BR><BR><BR><BR>
<BUTTON><a href="ce.html">COMPUTER ENGINEERING</a></button><BR><BR><BR>
<BUTTON><a href="csc.html">COMPUTER SCIENCE</a></button><BR><BR><BR>
<BUTTON><a href="is.html">INFORMATION SYSTEM</a></button><BR><BR><BR>
<BUTTON><a href="it.html">INFORMATION TECHNOLOGY</a></button><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
</td>
<td width="80%" style="margin-top:0px;">
<table width="90%" border="0" style="margin-left:5%;">
<tr>
<td width="50%" style="margin-top:5%;">
<img src="3.jfif" width="90%"height="200%" style="margin-left:1%;">
</td>
<td width="50%">
<h4>HERE IS AN INFORMATION ON Principle of CST</h4><br>
<table width="100%" border="2">
<tr style="background-color:#bbff00;">
<td width="50%">
Names
</td>
<td width="50%">
PHOTO
</TD>
</tr>
<tr>
<td width="50%">
<b>ENG MIHIGO Daniel</b> <br><br> Tel: 07878725642
<br>Email: mihigo@ur.ac.rw
</td>
<td width="50%">
<img src="images/nyarugenge.jpg" width="150"height="200" style="border-radius:25%;">
</TD>
</tr>
</table>
</TD>
</tr>

</table>
</table>
</div>

<div class="footer">
<h4 ><center> All Right Reserved &copy Elias</center></h4>
</div>
</body>
</html>