<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='houserental';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM sell';
   $result = mysqli_query($conn,$sql);
   
   while($row = mysqli_fetch_array($result)) {
	      
	   echo " name : ".$row['name']."  <br> ".
         "Details : ".$row['details']." <br> ".
         "Type : ".$row['type']." <br> ".

		"Location : ".$row['location']." <br>".
		 "Locality : ".$row['locality']." <br>".
		 "Address : ".$row['address']." <br>".
		 "FloorNumber : ".$row['floorno']." <br>".
		 "Area per square : ".$row['areaper']." <br>".
		 "Property Proof : ".$row['propproof']." <br>".
		 "Image1: ".$row['img1']." <br>".
		 "Image2 : ".$row['img2']." <br>".
		"Image3 : ".$row['img3']." <br>".
	  "--------------------------------<br>";
      
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>