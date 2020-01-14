<html>
<head>
	<title> User Login and Registration </title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
	<link rel = "stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
	<body>
	
	<div class = "container">
		<div class = "login-box">
		<div class = "row">
		<div class = "col-md-6" login-left>
			<h2 style="color:white;"> Login Here </h2>
			<form action = "validation.php" method = "post">
				<div class = "form-group">
					<label style="color:white;"> user name </label>
					<input type = "text" name = "user" class = "form-control" required style="color:white;">
				</div>
				<div class = "form-group">
					<label style="color:white;"> password </label>
					<input type = "password" name = "password" class = "form-control" required style="color:white;">
				</div>
				<button type = "submit" class = "btn btn-primary"> Login </button>
			</form>
		</div>
	
		<div class = "col-md-6" login-right>
			<h2 style="color:white;"> Register Here </h2>
			<form action = "registration.php" method = "post">
				<div class = "form-group">
					<label style="color:white;"> user name </label>
					<input type = "text" name = "user" class = "form-control" required>
				</div>
				<div class = "form-group">
					<label style="color:white;"> password </label>
					<input type = "password" name = "password" class = "form-control" required>
				</div>
				<button type = "submit" class = "btn btn-primary"> Register </button>
			</form>
		</div>
	
	</div>
	</div>
	</div>
		
	</body>
</html>