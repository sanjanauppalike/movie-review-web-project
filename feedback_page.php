<html>
<head>
	<title> FEEDBACK FORM </title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
	<link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
	<body>
	
	<div class = "container">
		<div class = "login-box">
		<div class = "row">
		<div class = "col-md-6" login-left>
			<h2 style="color:white;"> Submit Feedback Here </h2>
			<form action = "feedback.php" method = "post">
				<div class = "form-group">
					<label style="color:white;"> user name </label>
					<input type = "text" name = "user" class = "form-control" required style="color:white;">
				</div>
				<div class = "form-group">
					<label style="color:white;"> feedback </label>
					<input type = "text" name = "fb" class = "form-control" required style="color:white; height:200px;" >
				</div>
				<button type = "submit" class = "btn btn-primary"> submit </button>
			</form>
		</div>
	
		
	
	</div>
	</div>
	</div>
		
	</body>
</html>