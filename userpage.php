<!DOCTYPE html>
<html>
<head>
<title>
TOURISM HOMEPAGE</title>
<style>

body{
 {font-family: Verdana, sans-serif;}
.mySlides {display: none;}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}



/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

  background-image:url("India_tourism.jpg");
  background-size:cover;
  font-family:Verdana;
  font-size:20px;
  margin:0;
  line-height:24px;
  }

.navbar{
   text-align:center;
   width:100%;
   background:grey;
  
   
}
.navbar ul {
   margin :10;
   padding:10;
   list-style:none;
   position:relative;
   
 }
 
.navbar ul li a{
  display:block;
  padding:10px;
  color:green;
  text-decoration:none;
  width:150px;
  border-right:3px solid #bbb;

}
.navbar ul:after {
  content:""; clear:both;
  display:block;
}
.navbar ul li {
   float:left;
   list-style:none;
}
.navbar ul ul {
display:none;
}
.navbar ul li:hover > ul{
  display:block;
}
.navbar ul li:hover{
    background:black;
	transition:0.9s;
}
.navbar ul li:hover a{
	  color:orange;
}
.navbar ul ul{
     background:black;
     padding:0;
	 margin:0;
	 position:absolute; top:100%;
}
.navbar ul ul li{
    float: none;
    position: relative;
}
.navbar ul ul li a{
   padding:10px;
   color:white;
   width:300px;
   text-align:left;
   
   
   
}
.navbar ul ul li a:hover {
   background:lightblue;
   color:red;
   transition:0.9s;
}
</style>
</head>
<body>
<div class ="navbar">
   <ul>
   <li><a href="#"> HOME</a></li>
   
   <li><a href="#"> PLACES</a>  
   
      <ul>
	  <li><a href ="#">DELHI</a></li>
	  <li><a href ="#">HYDERABAD</a><li>
	  <li><a href ="#">ANDAMAN AND NICOBAR</a></li>
	  </ul>
	  </li>
	  
	<li><a href="#">GALLERY</a>
	  <ul>
	  <li><a href="#">PHOTOS</a></li>
	  <li><a href="#">ARTS</a></li>
	  </ul>
	  </li>
	  
	<li><a href="#">FEEDBACK</a>
	  <ul>
	  <li><a href ="feedback.php">COMMENTS</a></li>
	  <li><a href="#">SUGGESTIONS</a><li>
	  </ul>
	  </li>
	  
	<li><a href="#"> CONTACT US</a>
	 <ul>
	 <li><a href="#">CALL US</a></li>
	 <li><a href ="#">EMAIL US</a></li>
	 </ul>
	 </li>
	 
	 <li><a href ="#">ABOUT US</a></li>
	 
	 </ul>
	 
	 </div>
	 
	 <div class="slideshow-container">

<div class="mySlides fade">
 
  <img src="sonmarg.jpg" style="width:100%">
  <div class="text">wanakam</div>
</div>

<div class="mySlides fade">

  <img src="Jama-Masjid.jpg" style="width:100%">
  <div class="text">welcome</div>
</div>

<div class="mySlides fade">
 
  <img src="India-gate.jpg" style="width:100%">
  <div class="text">namaste</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	 
	 
	 
	 
	 
	 
	 
	 
	 
</body>
	 </html>
	 
	  
	  
	  
	  
	  
	  
	  
	
   
    