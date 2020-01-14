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
                        <li class="menu-item"><a href="trailer.php">Latest trailer</a></li>
                        
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
                        <span>Endgame</span>
                        <hr>
                        <div class="heading">
                       <h1>Endgame<span><h4>(2019)</h4></span></h1>
                        <h3>PG-13 | 3h 1min | Action, Adventure, Sci-Fi | 26 April 2019 (USA) </h3>
                        <h4> Genres: Action | Adventure | Sci-Fi </h4>
                        </div>

                    </div>
                    <div class="row1">
                        <div class="column1" /*style="background-color:#aaa;"*/>
                          <img src="img/endgame.jpg" alt="joker poster">
                        </div>
                        <div class="column2" /*style="background-color:#bbb;"*/>
                            <iframe 
                            src="https://www.youtube.com/embed/TcMBFSGVi1c">
                           
                            </iframe> 
                        </div>
                      </div>
                      <hr>
                    <div class="story">
                        <h1>Storyline</h1>
                        <p style="color:black;">
                            After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos's actions and undo the chaos to the universe, no matter what consequences may be in store, and no matter who they face....<br/>
                           <br/>
                           
                           
                           
                           
                            <b>Directors</b>: Anthony Russo, Joe Russo<br/>
                            <b>Writers</b>: Christopher Markus (screenplay by), Stephen McFeely (screenplay by) | 14 more credits »<br/>
                            <b>Stars</b>: Robert Downey Jr., Chris Evans, Mark Ruffalo | See full cast & crew »
                        </p>

                        <h1>Detailes</h1>
                        <p>
                                
                                Official Sites: Marvel [United States] | Official Site
                                <br>
                                Country: USA | UK | Canada
                                <br>
                                Language: English | Japanese | Xhosa
                                <br>
                                Release Date: 26 April 2019 (USA) See more »
                                <br>
                                Also Known As: Avengers 4 See more »
                                <br>
                                Filming Locations: Atlanta, Georgia, USA See more » 
                        </p>
                    </div>

                    <div class="review">
                           <h1> User Reviews</h1>
                            <p>
                            <h3>All Great Things...</h3>
                            26 April 2019 | by subxerogravity – See all my reviews
                            
                            Man! I thought Infinity War was off the hook, but this one... A perfect compliment to a two part epic. It was what I thought it was going to be, a lot of talk, a lot of planning, but amazingly it was not boring. Not for one second! Infinity War was the moment we were all waiting for and then they tell us they are going to split it into two films. End Game could have gone south with this choice, but it did not. It's always exciting, especally if you are a comic book fan or have been watching these movies for now eleven years. Don't want to say too much, but shine a light on Robert Downey Jr. who got to perfect his Iron Man persona to the point where Hugh Jackman can't even surpass him. Captain American is giving all us FanBoys everything we ever wanted to see and Thor...underperforms with hilarious results (and hopefully will create 2019's most popular costume for a certain type of man). Loved Mark Rufflo in this film and Thanos baby, still the baddest villain around. It's fun it's dramatic, it's like Lord of the Rings with one less movie. Three hours well worth the ticket. Stan Lee would be proud! Nuff said!
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