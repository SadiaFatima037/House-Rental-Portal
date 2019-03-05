<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylemadhu.css">
</head>,

<body>
<h2 style="text-align:center">User Profile Card</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
<script type = "text/javascript" >
function myFunction(){
	var input;
	input = document.getElementById('myInput');
	</script>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'houserental';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM sell  '?> <script> input </script> <?php ;
   
   $retval = mysqli_query( $conn ,$sql);
   
   
   $row = mysqli_fetch_array($retval);
   while($row['Approval']=='1') {
	   ?>
	<div id='card'>
<div class='slideshow-container'>
  <div class='mySlides fade'>
    <img src="<?php echo $row['img1'] ?>" style="width:100%">
  </div>

  <div class='mySlides fade'>
    <img src="<?php echo $row['img2']?>" style="width:100%">
  </div>

  <div class='mySlides fade'>
    <img src="<?php echo $row['img3']?>" style="width:100%">
  </div>

  <a class='prev' onclick="plusSlides(-1)">&#10094;</a>
  <a class='next' onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class='dot' onclick="currentSlide(1)"></span> 
  <span class='dot' onclick="currentSlide(2)"></span> 
  <span class='dot' onclick="currentSlide(3)"></span> 
</div> <br> ".
	  
	  
			name : <?php echo $row['name']?> <br>
			Details : <?php echo $row['details']?> <br>
			Type : <?php echo $row['type']?> <br>
			
			Locality : <?php echo $row['locality']?> <br>
			Address : <?php echo $row['address']?> <br>
	 

	</div>;
	<?php
   }
   
  
  
   
   mysqli_close($conn);
?>
<script> } </script>

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









