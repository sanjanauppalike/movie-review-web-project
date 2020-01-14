<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root', '');
if($con)
	echo " conecteed " ;

mysqli_select_db($con, 'useregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

echo $name;

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "<h1 style='color:white;'>"."Username already taken"."</h1>"; //onclick function
}  
else{
	$reg = "insert into usertable(name, password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo "<h1 style='color:white;'>"."Registration Successfull"."</h1>";
}

?>