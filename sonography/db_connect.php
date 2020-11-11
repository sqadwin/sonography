<?php
$dbname="sonography";
$user="root";
$pass="";
$host="localhost";
$con=mysqli_connect($host,$user,$pass);
$p=mysqli_select_db($con,$dbname);
?>