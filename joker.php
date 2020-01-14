<!DOCTYPE html>
<html lang="en">
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
                        <li class="menu-item"><a href="trailer.html">Latest trailer</a></li>
                       
                        <li class="menu-item"><a href="list.php">Top movies</a></li>
                        <li class="menu-item"><a href="feedback_page.php">Contact</a></li>
                    </ul> <!-- .menu -->

                    
                </div> <!-- .main-navigation -->

                <div class="mobile-navigation"></div>
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="page">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a>
                        <a href="review.html">Movie Review</a>
                        <span>Joker</span>
                        <hr>
                        <div class="heading">
                       <h1>Joker<span><h4>(2019)</h4></span></h1>
                        <h3>R | 2h 2min | Crime, Drama, Thriller | 4 October 2019 (USA) </h3>
                        <h4> Genres: Crime | Drama | Thriller </h4>
                        </div>

                    </div>
                    <div class="row1">
                        <div class="column1" /*style="background-color:#aaa;"*/>
                          <img src="img/joker_poster.jpg" alt="joker poster">
                        </div>
                        <div class="column2" /*style="background-color:#bbb;"*/>
                            <iframe 
                            src="https://www.youtube.com/embed/zAGVQLHvwOY&t=2s">
                           
                            </iframe> 
                        </div>
                      </div>
                      <hr>
                    <div class="story">
                        <h1>Storyline</h1>
                        <p style="color:black;">
                            In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.<br/>
                           <br/>
                           
                           
                           
                           
                            <b>Directors</b>: Todd Phillips<br/>
                            <b>Writers</b>: Todd Phillips, Scott Silver | 3 more credits »<br/>
                            <b>Stars</b>: Joaquin Phoenix, Robert De Niro, Zazie Beetz | See full cast & crew »
                        </p>

                        <h1>Detailes</h1>
                        <p>
                                
							Official Sites: Facebook - Official | Filmnegah [Iran] | See more »
							<br>
							Country: USA | Canada
							<br>
							Language: English
							<br>
							Release Date: 4 October 2019 (USA) See more »
							<br>
							Also Known As: Joker See more »
							<br>
							Filming Locations: Harlem, Manhattan, New York City, New York, USA See more »
							<br>
                        </p>
                    </div>

                    <div class="review">
                           <h1> User Reviews</h1>
                            <p>
                            <h3>Went for a second time to watch</h3>
                            3 October 2019 | by mariamelkott – See all my reviews
                            
                            I get why some people hate this . It's because of the political message and how some people think that you need get empathy for Arthur's madness. But come on that is not the point and it will never be. Enjoy this masterpiece because Joaquin Phoenix and Todd Phillips overdid themselves with this movie . The acting,music and cinematography are just amazing ! Please enjoy the movie without overthinking it.
                            </p>
                            <p>Review this movie</p>
                            <form action="review.php" class="form1" method="POST">
								<div >
									Enter your email <input type="text" name="email" width="100px">
								</div>
                                <div>
									Enter your review <input type="text" name="review" style="height:200px;" >
								</div>
								<input type="submit" name="submit" value="submit" style="width:100px; align:center;">
                                
                            </form>
                            <br><a href="display.php" name="display">See all the other reviews</a>
                    </div>

                    

                <!--    <div class="irow">
                        <div class="icolumn">
                          <img src="../review/img/iron1.jpg" alt="Snow" style="width:100%">
                        </div>
                        <div class="icolumn">
                          <img src="../review/img/chris.jpg" alt="Forest" style="width:100%">
                        </div>
                        <div class="icolumn">
                          <img src="../review/img/scarlette.jpg" alt="Mountains" style="width:100%">
                        </div>
                      </div>

                    -->

                  <!---  <div class="cast">
                        <div>
                            <img src="../review/img/chris3.jpg" alt="">
                        </div>
                    </div>-->


                    <script src="js/jquery-1.11.1.min.js"></script>
                    <script src="js/plugins.js"></script>
                    <script src="js/app.js"></script>


</body>