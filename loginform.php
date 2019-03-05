<?php
 session_start();
 define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'houserental'); 
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
 
	
	


<html>
<head>
<title> login form design </title>
<link rel="stylesheet" type="text/css" href="styfinal.css">



<body> 
<div class="loginbox">
<img src="avatar.png" class="avatar">
<h1> LOGIN HERE </h1> 
<form name="myform" method="post" action="loginform.php" onsubmit="return validate()">
<p> Username </p>
<input type="text" name="username" placeholder="Enter Username"> <br> 
<p> Password </p>
<input type="password" name="password" placeholder="Enter Password"> <br> 
<input type="Submit" name="submit" value="Login"> <br> 
<a href="signupform.php " > Don't have an account  </a> <br>

</form>

<?php 
  
 
 
 
   if(isset($_POST['submit']))
   {
	   $username= $_POST['username'];
	   $password= $_POST['password'];
	    
	  
	          $query = "select * from SIGNUP WHERE username='$username' AND password='$password'";
			  $query_run = mysqli_query($con,$query);
			   
			   	if(mysqli_num_rows($query_run)>0)
				{
                          echo '<script type="text/javascript"> alert ("Invalid Username & Password Or Username & password exists") </script>';	
						  
				}  
		  else
		  {
		     $_SESSION['username']=$username;
			 header('location:loginsucess.php');
				
		  }
   }
    
   ?>
</div>
</body>
</head>

</html>