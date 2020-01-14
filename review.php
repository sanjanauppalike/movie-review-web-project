<?php

include "connect.php";
$email=$_POST['email'];
$review=$_POST['review'];

echo $email." ". $review;

$result= mysqli_query($conn,"insert into review(email,rating) values('$email','$review')");



header('location:avenger.php');

?>
