<?php
$host = 'localhost';
$user = 'root';
$pass = '';

$con = mysqli_connect($host,$user,$pass) or die("Erorr: Can't Connect to Server");
$db = mysqli_select_db($con,'projects') or die("Erorr: Can't Connect to Database");

?>