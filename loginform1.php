
<!DOCTYPE HTML>
<html>

<?php
 session_start();

 ?>
<title>Login Success </title>
<body bgcolor="pink">
<div style="text-align:left"><h1><font color="blue"> <center> LOGIN SUCCESFULL </center> </font> </h1>
 <h1> <center><font color="red"> Welcome 
 <?php echo $_SESSION['username'] ?>
 </font> </center> </h1>
</div>
<br/>
<div style="text-align: left"><a href="own.php" <h3> <center> <font color="green">Please Click here to continue </font> </center> </h3> </a></div>
</body>
</html>