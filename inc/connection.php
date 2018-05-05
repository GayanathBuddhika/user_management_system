<?php

$dbhost="localhot";
$dbuser="root";
$dbpass="";
$dbname="umsdb";


$connection=mysqli_connect("localhost","root","","umsdb");

if(mysqli_connect_errno()){
	
	die("connection is fail :".mysqli_connect_error());
}
?>