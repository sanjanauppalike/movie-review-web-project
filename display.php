<?php

include_once('connection.php');

$query="Select * from review";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | Single</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style1.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>
<body>
<div id="site-content">
        <header class="site-header">
            <div class="container">
                <a href="index.html" id="branding">
                     
                    <div class="logo-copy">
                        <h1 class="site-title"><span>MOVIX</span></h1>
                        <small class="site-description">one stop for movie reviews</small>
                    </div>
                </a> <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="home.php">Home</a></li>
                        <li class="menu-item"><a href="trail.php">Latest trailer</a></li>
                        
                        <li class="menu-item"><a href="list.php">Top movies</a></li>
                        <li class="menu-item"><a href="feedback_page.php">Contact</a></li>
                    </ul> <!-- .menu -->

                    
                </div> <!-- .main-navigation -->

                <div class="mobile-navigation"></div>
            </div>
        </header>
        <main class="main-content" >
		<div class="container">
                <div class="page">
                    <div class="breadcrumbs" style="color:black;">
					<!---<table align="center" border="1px" style="width:800px; line-height:30px;">
					<tr>
						<th colspan="2"> <h2> User reviews</h2></th>
					</tr>
					<tr>
						<th>email</th>
					<th>review</th>
					</tr> -->
	
				<?php
					while($rows=mysqli_fetch_assoc($result))
					{
				?>
	
				<!--<tr> -->
				<!--	<td><?php echo $rows['email']."<br>";?></td>
					<td><?php echo $rows['rating']."<hr>";?></td>
				</tr> -->
				
				
				<?php echo $rows['email'].":";?>
				<?php echo $rows['rating']."<hr>";?>
				<?php
					}
				?>
	
				</table>
				</div>
				</div>
				</div>
			</main>
</div>
			
		
			
			 <script src="js/jquery-1.11.1.min.js"></script>
                    <script src="js/plugins.js"></script>
                    <script src="js/app.js"></script>
		
		
		


</body>
</html>
	