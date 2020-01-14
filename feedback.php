<?php

include "fbconnect.php";
$name=$_POST['user'];
$feed=$_POST['fb'];



$result= mysqli_query($conn,"insert into feedback(name,fb) values('$name','$feed')");





?>
