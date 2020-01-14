<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="x.css">
<link rel="stylesheet" href="x2.css">
<link rel="stylesheet" href="style5.css">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<!--<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b><font color="red" size="40px">MoviX</font></b></h4>
    <p class="w3-text-grey">one stop for movie reviews</p>
  </div>
  
</nav>-->

<!-- Overlay effect when opening sidebar on small screens 
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>-->

<!-- !PAGE CONTENT! -->
<div class="w3-main">
	

  <!-- Header -->
  
     

	<div class="main-navigation" style="margin:50px;">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu" style="color:black; background-color:white">
                        <li class="menu-item" style="color:red;"><a href="home.php">Home</a></li>
                        <li class="menu-item"><a href="trailer.php">Latest trailer</a></li>
                        
                        <li class="menu-item"><a href="list.php">Top movies</a></li>
                        <li class="menu-item"><a href="feedback_page.php">Contact</a></li>
                    </ul> <!-- .menu -->

                    
                </div> <!-- .main-navigation -->
<!-- <h1 ><b><font color="grey" style="margin-top:10px;">LATEST TRAILERS</font></b></h1> -->
    
	
    <div class="w3-container" style="height:200px;" >
	<p>"/n"</p>
	<p>"/n"</p>
    </div>
  
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
                            <iframe 
                            src="https://www.youtube.com/embed/hej47fWFLQs"  style="width:480px; height:300px;" >
                           
                            </iframe>      <div class="w3-container w3-white">
        <p style="width:0px;"><b>Dolittle</b></p>
        <!--<p>Dolittle is an upcoming American fantasy adventure comedy film directed by Stephen Gaghan and written by Gaghan and Thomas Shepherd. It is based on the character Doctor Dolittle created by Hugh Lofting, primarily The Voyages of Doctor Dolittle</p>-->
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
                            <iframe 
                            src="https://www.youtube.com/embed/rzRGVoNDA9g"  style="width:480px; height:300px;">
                           
                            </iframe>      <div class="w3-container w3-white">
        <p><b>The Laundromat</b></p>
        <!--<p>The Laundromat is a 2019 American biographical comedy-drama film directed by Steven Soderbergh, with a screenplay by Scott Z. Burns. It stars Meryl Streep, Gary Oldman, Antonio Banderas, Jeffrey Wright, David Schwimmer, Matthias Schoenaerts, James Cromwell, and Sharon Stone.</p>-->
      </div>
    </div>
    <div class="w3-third w3-container">
                            <iframe 
                            src="https://www.youtube.com/embed/cjXE_9ZmOpk"  style="width:480px; height:300px;">
                           
                            </iframe>      <div class="w3-container w3-white">
        <p><b>The Report</b></p>
        <!--<p>The Report (also known as The Torture Report) is a 2019 American docudrama film written and directed by Scott Z. Burns and starring Adam Driver, Annette Bening, Ted Levine, Michael C. Hall, Tim Blake Nelson, Corey Stoll, Maura Tierney and Jon Hamm.</p>-->
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
                            <iframe 
                            src="https://www.youtube.com/embed/FF932ZU6Kn4"  style="width:480px; height:300px;">
                           
                            </iframe>      <div class="w3-container w3-white">
        <p><b>Jungle Cruise</b></p>
        <!--<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>-->
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
                            <iframe 
                            src="https://www.youtube.com/embed/B2G9-KhBek8"  style="width:480px; height:300px;">
                           
                            </iframe>      <div class="w3-container w3-white">
        <p><b>Bombshell</b></p>
        <!--<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>-->
      </div>
    </div>
    <div class="w3-third w3-container">
                            <iframe 
                            src="https://www.youtube.com/embed/LmCQrpagfHQ"  style="width:480px; height:300px;">
                           
                            </iframe>      <div class="w3-container w3-white">
        <p><b>Lady and the Tramp</b></p>
        <!--<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>-->
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black"><font color="white">«</font></a>
      <a href="#" class="w3-bar-item w3-black w3-button"><font color="white">1</font></a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black"><font color="white">2</font></a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black"><font color="white">3</font></a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black"><font color="white">4</font></a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black"><font color="white">»</font></a>
    </div>
  </div>


  

</body>
</html>
