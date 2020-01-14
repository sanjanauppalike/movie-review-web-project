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
                        <span>Coco</span>
                        <hr>
                        <div class="heading">
                       <h1>Coco<span><h4>(2017)</h4></span></h1>
                        <h3>PG | 1h 45min | Animation, Adventure, Family | 22 November 2017 (USA)  </h3>
                        <h4> Genres: Animation | Adventure | Family </h4>
                        </div>

                    </div>
                    <div class="row1">
                        <div class="column1" /*style="background-color:#aaa;"*/>
                          <img src="img/coco.jpg" alt="coco poster">
                        </div>
                        <div class="column2" /*style="background-color:#bbb;"*/>
                            <iframe 
                            src="https://www.youtube.com/embed/5sSMRg1X1vg">
                           
                            </iframe> 
                        </div>
                      </div>
                      <hr>
                    <div class="story">
                        <h1>Storyline</h1>
                        <p style="color:black;">
                            Aspiring musician Miguel, confronted with his family's ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer. <br/>
                           <br/>
                           
                           
                           
                           
                            <b>Directors</b>: Lee Unkrich, Adrian Molina (co-director) <br/>
                            <b>Writers</b>: Lee Unkrich (original story by), Jason Katz (original story by) |<br/>
                            <b>Stars</b>: Anthony Gonzalez, Gael García Bernal, Benjamin Bratt | See full cast & crew » 
                        </p>

                        <h1>Details</h1>
                        <p>
                                
							Official Sites: Official Facebook | Official site | See more »
							<br>
							Country: USA
							<br>
							Language: English | Spanish
							<br>
							Release Date: 22 November 2017 (USA) See more »
							<br>
							Also Known As: Untitled Dia de los Muertos Project See more »
							<br>
							Filming Locations: Pixar Animation Studios - 1200 Park Avenue, Emeryville, California, USA See more » 
							<br>
                        </p>
                    </div>

                    <div class="review">
                           <h1> User Reviews</h1>
                            <p>
                            <h3>A Charming Depiction of a Beautiful Spanish-Language Tradition</h3>
								10 January 2018 | by Jared_Andrews
                            Coco tells the story of young boy named Miguel living in Mexico (Coco is his great grandmother). Miguel loves music and must keep his love a secret from his family who has forbidden music of any kind since the days of his great great grandmother. On Día de Muertos, Miguel wants to enter a contest to showcase his musical talent, but his grandmother intervenes, reiterating the family's ban on music.

							In his hunt for a suitable guitar to play, Miguel finds himself in the land of dead, meeting the spirits of those who have passed on. On his adventure he meets his musical hero, much of his deceased family, and a strange man who asks for his help and quickly becomes a close friend. Along the way, Miguel helps his new friend and his friend helps him understand the true significance of Día de Muertos.

							Of course, the title character (Coco) turns out to play a vital role before the movie is over. When the moment arrives, she delivers something powerful, and it's beautiful. It moved me in a very satisfying way that felt well-earned and authentic, rather than manipulative, the way many movie moments of this sort feel.

Quick sidebar: when I took Spanish in high school, my teachers would occasionally incorporate culture from Spanish-speaking countries (usually Mexico) into the lessons. In some of these lessons, I learned about Día de Muertos. Sort of. I'm not sure if the lessons were lacking or if I just wasn't paying much attention to them. Regardless, I learned more about Día de Muertos from Coco than I did in four years of high school Spanish classes.

In high school, my understanding of Día de Muertos was that it was basically a Mexican Halloween. They raised spirits from the dead and played music or something, as I understood it. It seemed silly to me. After watching Coco I realized that the tradition is anything but silly.

It's not about the dressing up or the food or the music. It's about family and remembering those that came before us. Leave it to Pixar to not only entertain me, but also educate me about a rich and wonderful tradition of another culture. Bravo!
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