<?php

include_once('connection.php');

$query="Select * from review";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<body>
	<table align="center" border="1px" style="width:800px; line-height:30px;">
	<tr>
		<th colspan="2"> <h2> User reviews</h2></th>
	</tr>
	<tr>
		<th>email</th>
		<th>review</th>
	</tr>
	
	<?php
		while($rows=mysqli_fetch_assoc($result))
		{
	?>
	
			<tr>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['rating'];?></td>
			</tr>
	<?php
		}
	?>
	
	</table>
</body>
</html>
	
	