<?php
$dhost='localhost';
$duser='root';
$dpass='';

 $conn = mysqli_connect($dhost, $duser, $dpass,'houserental');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM sell';
   $retval = mysqli_query( $conn,$sql );
   
   
   while($row = mysqli_fetch_array($retval)) {
?>
<html>
<body>
<h1> Personal Details</h1>
<h4> Name of the owner  :<?php echo $row['name']  ?> </h4>
<h3> Property Details</h4>
 <h4>Enter Locality :<?php echo $row['locality']?></h4>
<h4>Enter Address :<?php echo $row['address']?> </h4>
 <h4> Floor Number :<?php echo $row['floorno']?> </h5>
 <h4>Covered Area :<?php echo $row['areaper']?></h4>
  Property Proof : 
 <br><br>
  <img src="<?php echo $row['propproof']?>" height=100 width=100> 
  <br><br>
  <pre>
 <b>Images</b>
  <img src="<?php echo $row['img1']?>" height=100 width=100> 
  <br>
  <img src="<?php echo $row['img2']?>" height=100 width=100> 
  <br>
  <img src="<?php echo $row['img2']?>" height=100 width=100> 
  <br></pre>

   <form method="post" action="check.php"><input name="id" value="<?php echo $row['id'] ?>" type="hidden"><input type="submit"></form>

	
</body>
</html>

<?php
   }
?>
