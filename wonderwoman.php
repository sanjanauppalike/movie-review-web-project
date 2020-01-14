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
                        <span>Wonder Woman</span>
                        <hr>
                        <div class="heading">
                       <h1>Wonder Woman<span><h4>(2017)</h4></span></h1>
                        <h3>PG-13 | 2h 21min | Action, Adventure, Fantasy | 2 June 2017 (USA)  </h3>
                        <h4> Genres: Action | Adventure | Sci-Fi </h4>
                        </div>

                    </div>
                    <div class="row1">
                        <div class="column1" /*style="background-color:#aaa;"*/>
                          <img src="img/wonder woman.jpg" alt="wonderwoman poster">
                        </div>
                        <div class="column2" /*style="background-color:#bbb;"*/>
                            <iframe 
                            src="https://www.youtube.com/embed/1Q8fG0TtVAY">
                           
                            </iframe> 
                        </div>
                      </div>
                      <hr>
                    <div class="story">
                        <h1>Storyline</h1>
                        <p style="color:black;">
                            When a pilot crashes and tells of conflict in the outside world, Diana, an Amazonian warrior in training, leaves home to fight a war, discovering her full powers and true destiny. <br/>
                           <br/>
                           
                           
                           
                           
                            <b>Directors</b>:Patty Jenkins<br/>
                            <b>Writers</b>: Allan Heinberg (screenplay by), Zack Snyder (story by) |<br/>
                            <b>Stars</b>: Gal Gadot, Chris Pine, Robin Wright | See full cast & crew » 
                        </p>

                        <h1>Details</h1>
                        <p>
                                
							Official Sites: Official Facebook | Official Instagram | See more »
							<br>
							Country: USA | China | Hong Kong
							<br>
							Language: English | German | Dutch | French | Spanish | Chinese | Greek, Ancient (to 1453) | North American Indian
							<br>
							Release Date: 2 June 2017 (USA) See more »
							<br>
							Also Known As: Wonder Woman See more »
							<br>
							Filming Locations: Lincoln's Inn, Holborn, London, England, UK See more » 
							<br>
                        </p>
                    </div>

                    <div class="review">
                           <h1> User Reviews</h1>
                            <p>
                            <h3>A Beautiful,Thrilling Portrayal of this Icon! Most enjoyable!</h3>
								2 June 2017 | by jmarinko925 
                            Last evening I saw Wonder Woman and it met and exceeded my expectations marvelously! Gal Gadot shines on screen as the Amazon Princess with an excellent supporting cast(The chemistry between her and co lead Chris Pine is wonderful!). You could very easily enjoy this film without seeing any of the previous films or will realize it as the best of it's franchise to date! Have no fear that this will be boring because of the period the film takes place in,it matters not. Creators of the film benefit greatly by staying true to the source material that has encapsulated audiences since Diana Prince's debut in comics over seven decades ago. As well as DC comic's own Geoff Johns joining the production team! Wonder Woman is done justice as she serves Justice by the amazing combat Sequences shot by Director Patty Jenkins and the score compliments the screen accordingly!
							I don't need humor in a film about a hero , nor do enjoy it when it's forced into a story. The humor in Wonder Woman is well placed and most called for and appreciated. The same goes for the action in this film it is not overdone nor is it to much or to little it is just right. . This movie benefits from an exciting story, heroic characters that are enjoyable and most credible vile villains. I want to see it again and can't wait to see Wonder Woman in Justice League this November!
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