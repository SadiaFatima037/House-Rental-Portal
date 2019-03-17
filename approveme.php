<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylemadhu.css">
<style>
#searchBar {
	border: 1px solid #0000000;
	border-right:none;
	font-size: 16px;
	padding: 10px;
	outline: none;
	width: 250px;
	-webkit-border-top-left-radius: 10px;
	-webkit-border-bottom-left-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-bottomleft: 10px;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
}
#searchBtn {
	border: 1px solid #0000000;
	font-size: 16px;
	padding: 10px;
	background: #f1d829;
	font-weight: bold;
	cursor: pointer;
	outline: none;
	-webkit-border-top-right-radius: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-topright: 10px;
	-moz-border-radius-bottomright: 10px;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
}
#searchBtn:hover {
	background: #f6e049;
}
</style>
<script type="text/javascript" >
	function active(){
	var searchBar = document.getElementById('searchBar');
	
	if(searchBar.value == 'Search...'){
		searchBar.value=''
		searchBar.placeholder='Search...'
		
		}
	}
	function inactive(){
	var searchBar = document.getElementById('searchBar');
	
	if(searchBar.value == ''){
		searchBar.value='Search...'
		searchBar.placeholder=''
		
		}
	}


</script>
</head>

<body>
<h2 style="text-align:center">User Profile Card</h2>
<form action="approveme.php" method="GET" >
		<input type="text" name="q" id="searchBar" value="Search..." placeholder=" " maxlength="25" autocomplete="off" onblur="inactive() " onmousedown="active() " ><input type="submit" id="searchBtn" value="Go!" >
</form>
<?php
	error_reporting(0);
	if($_GET['q'] !==''){
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$dbname = 'houserental';
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   
		$search = $_GET['q'];
		$sql = "SELECT * FROM sell WHERE name LIKE '%$search%' OR details LIKE '%$search%' OR type LIKE '%$search%' OR city LIKE '%$search%' OR locality LIKE '%$search%' OR price LIKE '%$search%' " ;
		$retval = mysqli_query( $conn ,$sql);
   
   
     while($row = mysqli_fetch_array($retval))
	    { if($row['Approval']=='1'){
	   ?>
	<div id='card'>

<br>

			<img src="<?php echo $row['img3']?>" width="250px" height="300px">
			
			name : <?php echo $row['name']?> <br>
			Details : <?php echo $row['details']?> <br>
			Type : <?php echo $row['type']?> <br>
			
			Locality : <?php echo $row['locality']?> <br>
		Address : <?php echo $row['address'] ?> <br>
	 

	</div>
	<?php
   }
		}
}
   
  
  
   
   mysqli_close($conn);
?>




</body>
</html>