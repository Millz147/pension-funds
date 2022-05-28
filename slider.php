
<style type="text/css">
	* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container1111 {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides1111 {
  display: none;
}

/* Next & previous buttons */
.prev1111, .next1111 {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next1111 {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev1111:hover, .next1111:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text1111 {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext1111 {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot1111 {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active1111, .dot1111:hover {
  background-color: #717171;
}

/* Fading animation */
.fade1111 {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade1111 {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade1111 {
  from {opacity: .4}
  to {opacity: 1}
}
	
</style>

<script type="text/javascript">






var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides1111");
  var dots = document.getElementsByClassName("dot1111");
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

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}











	

</script>




						<!-- Slideshow container -->
<div class="slideshow-container1111">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides1111 fade1111">
    <div class="numbertext1111">1 / 3</div>
    <img src="images/pension.png" style="width:100%">
    <div class="text1111">Caption Text</div>
  </div>

  <div class="mySlides1111 fade1111">
    <div class="numbertext1111">2 / 3</div>
    <img src="images/pension3.jpg" style="width:100%">
    <div class="text1111">Caption Two</div>
  </div>

  <div class="mySlides1111 fade1111">
    <div class="numbertext1111">3 / 3</div>
    <img src="images/pension4.jpg" style="width:100%">
    <div class="text1111">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev1111" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next1111" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot1111" onclick="currentSlide(1)"></span>
  <span class="dot1111" onclick="currentSlide(2)"></span>
  <span class="dot1111" onclick="currentSlide(3)"></span>
</div>

