var slideIndex = 1;

showSlidesByClick(slideIndex);

function showSlidesByClick(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// Next Image
function plusSlides(n) {
  showSlidesByClick(slideIndex += n);
}
// Previous Image
function currentSlide(n) {
  showSlidesByClick(slideIndex = n);
}

// Auto Slideshow
showSlides();
function showSlides() {
    slideIndex++;
    //slides[slideIndex-1].style.display = "block";
    showSlidesByClick(slideIndex);
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}