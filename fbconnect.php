<?php

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,"fb1");

if(!$conn)
	echo "error";
else
	header('location:list.php');

?>
	