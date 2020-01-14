<?php

$conn=mysqli_connect("localhost","root","");

mysqli_select_db($conn,"db");

if(!$conn)
	echo "error";
else
	echo "got connectede";

?>
	