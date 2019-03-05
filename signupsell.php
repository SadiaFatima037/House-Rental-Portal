<html>


<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title> SignUp form </title>
<link rel="stylesheet" type="text/css" href="stylesignup.css">



</head>
<body>
<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'houserental'); 

$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
$name = $_POST["fullname"]; 
$email = $_POST["email"];
$phoneno = $_POST["phone"];
$user = $_POST["username"];
$pass = $_POST["password"];
$cpass = $_POST["cpassword"];
$gender = $_POST["gender"];
$address = $_POST["address"];

if( $pass == $cpass){
$stmt = $con->prepare("INSERT INTO registration(name, email, phoneno, username, userpassword, confirmpassword, gender, address ) VALUES(?, ?, ?, ?, ?, ?, ?, ?)"); 
$stmt->bind_param("ssssssss", $name, $email, $phoneno, $user, $pass, $cpass, $gender, $address); 
$stmt->execute();

$stmt1 =$con->prepare("INSERT INTO login(username,userpassword) VALUES(?,?)");
$stmt1->bind_param("ss",$user, $pass); 
$stmt1->execute();
$result = $stmt->affected_rows;
$result1 =$stmt->affected_rows;

$stmt -> close();
$stmt1 -> close();
$con -> close();
}
else
{
	echo "Passwords don't match\n";
}
 

if($result > 0 && $result1 > 0 )
{
header("location: loginsell.php"); 
}
else
{
echo "Oops. Something went wrong. Please try again"; 

?>
<a href="sign.php">Try Login</a>
<?php 
}
}
?>

<div class="wrap">
	<form name="myform" method="post"  >
	<h2> SignUp </h2>
	<input name="fullname" placeholder="Name" required="" type="text"><br>
	<input name="email" placeholder="Email" required="" type="email"><br>
	<input name="phone" placeholder="Phone Number" required="" type="text"><br>
	<input name="username" placeholder="Username" required="" type="text"><br>
	<input name="password" placeholder="Password" required="" type="password"><br>
	<input name="cpassword" placeholder="Confirm Password" required="" type="password"><br>
	
	<br>
		Gender:
	<input name="gender" type="radio" value="male">Male
	<input name="gender" type="radio" value="female">Female<br>
	<input name="address" placeholder="Address" type="text"><br>
	
	<br>
	<input value="Submit" type="submit">
	</form>
	</div>
	
</body></html>