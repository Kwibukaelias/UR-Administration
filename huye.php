<?php
include('./db-connect.php');

$sql = "SELECT * FROM school_leader WHERE department='Huye'";
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
<style>
body{
height:100%;
}
.upper{
height:90%;
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

/* Style The Dropdown Button */
.dropbtn {
 background-color: #4CAF50;
 color: white;
 padding: 16px;
 font-size: 16px;
 border: none;
 cursor: pointer;
}
/* The container <div> - needed to position the dropdown content */
.dropdown {
 position: relative;
 display: inline-block;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
 display: none;
 position: absolute;
 background-color: #f9f9f9;
 min-width: 160px;
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
}
/* Links inside the dropdown */
.dropdown-content a {
 color: black;
 padding: 12px 16px;
 text-decoration: none;
 display: block;}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
 display: block;
 }
 .dropdown:hover .dropdown-content a:hover {
background-color:#112233;
color:white}

</style>
</head>
<body width="90%" style="background-color:green;">
<div class="upper">
<center><h2>UR ADMINISTRATION</h2>


<BUTTON><a href="home.html">HOME</a></button>
<div class="dropdown">
 <button class="dropbtn"><a href="campus.html">CAMPUSES</a></button>
 <div class="dropdown-content">
 <a href="huye.php">HUYE</a>
 <a href="#">MUSANZE</a>
 <a href="#">RWAMAGANA</a>
 <a href="huye.php">NYARUGENGE</a>
 <a href="#">RUSIZI</a>
 <a href="#">NYAGATARE</a>
 <a href="huye.php">GIKONDO</a>
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
<td width="10%" style="margin-top:5%;">
<B>COLLEGES<BR><BR><BR><BR>
<BUTTON><a href="cst.php">CST</a></button><BR><BR>
<BUTTON><a href="#cbe.html">CBE</a></button><BR><BR>
<BUTTON><a href="#cmhs.html">CMHS</a></button><BR><BR>
<BUTTON><a href="#cass.html">CASS</a></button><BR><BR><BR><BR><BR><BR>
</td>
<td width="90%">
<table width="90%" border="0" style="margin-left:5%;">
<tr>
<td width="50%" style="margin-top:5%;">
<img src="3.jfif" width="80%"height="150%" style="margin-left:1%;">
</td>
<td width="50%">
<h4>HERE IS AN INFORMATION ON PRINCIPLE OF Huye Campus</h4><br>
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
<b><?php echo $leader['fullname']; ?> </b> <br><br> Tel: <?php echo $leader['phone']; ?>
<br>Email: <?php echo $leader['email']; ?>
</td>
<td width="50%">
<img src="images/huye.jpg" width="150"height="250" style="border-radius:25%;">
</TD>
</tr>
</table>
</TD>
</tr>

</table>
</div>

<div class="footer">
<h4 ><center> All Right Reserved &copy Elias</center></h4>
</div>
</body>
</html>