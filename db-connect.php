<?php
$conn = mysqli_connect('localhost','elias','1234','ur-staff');

if(!$conn){
    die('connection error:' .mysqli_connect_error());
}
?>