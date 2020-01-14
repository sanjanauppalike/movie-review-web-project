<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/3da4036404.js" crossorigin="anonymous"></script>
</head>
<body>
        <header class="showcase">
                <div class="showcase-top">
                        <h1><strong>M<span>ovi</span>X</strong></h1>
                         <a href="logout.php" class="btn btn-rounded">Logout</a>
                         
                </div>
				
				<!--<div class="topnav">
					<!--<a class="active" href="home.php">Home</a>
					<a href="list.php">Top movies</a>
					<a href="list.php">pooris page</a>
					<a href="home.php">contact us</a>
					<input type="button" onclick="list.php" value="Top movies">
				</div>-->
				
				
				
                <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="img/poster1.jpg" style="width:100%">
                          <div class="text">Caption Text</div>
                        </div>
                    
                        <div class="mySlides fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="img/poster2.jpg" style="width:100%">
                          <div class="text">Caption Two</div>
                        </div>
                    
                        <div class="mySlides fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="img/poster3.jpg" style="width:100%">
                          <div class="text">Caption Three</div>
                        </div>
                    
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    
                </div>
                      <br>
                    
                      <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                      </div>
                    
               
                
              </header>
              <script src="script.js"></script>
                
</body>
</html>