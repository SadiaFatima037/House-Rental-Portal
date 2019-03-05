<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h2 style="text-align:center">User Profile Card</h2>

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'houserental';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM sell';
   
   $retval = mysqli_query( $conn ,$sql);
   
   
   $row = mysqli_fetch_array($retval);
   while($row['Approval']=='0') {
	echo "<div id="card">";
      echo  "
<div class="slideshow-container">
  <div class="mySlides fade">
    <img src=".$row[img1]." style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src=".$row[img2]." style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src=".$row[img3]." style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> <br> ".
	  
	  
			"name : ".$row['name']."  <br> ".
			"Details : ".$row['details']." <br> ".
			"Type : ".$row['type']." <br> ".
			
				"Locality : ".$row['locality']." <br>".
			"Address : ".$row['address']." <br>" ;
	  echo "	<p><button onclick See more images</button></p>";

	echo "</div>";
   }
  
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>

<script type = "text/javascript">
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

</script>



</body>
</html>









echo"
<div class="slideshow-container">


  <div class="mySlides fade">
    <img src=".$row[img1]." style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src=".$row[img2]." style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src=".$row[img3]." style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>"