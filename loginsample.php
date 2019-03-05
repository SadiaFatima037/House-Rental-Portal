<html>
<head>
<title> login form design </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">
	
function validation()
{
	var user = document.getElementById("username").value;
	varpwd  =document.getElementById("password").value;
	
	if(user==""&&pwd=="")
	{
		alert("Enter all the fields");
		return false;
			}
	else if(user=="")
	{
		alert("Please Enter Username");
		return false;
	}
	else if(pwd=="")
	{
		alert("Password cannot be empty");
		return false;
	}
		else if(user=="shyamala"&&pwd=="Osmania@100")
	{
		//alert("Enter all the fields");
		
		
		alert("You have Logged in successfully");
		
		return true;
			}
			
	else
	{
		alert("Incorrect Username or Password");
		return false;
	}
	
}
</script>

<body> 
<div class="loginbox">
<img src="avatar.png" class="avatar">
<h1> LOGIN HERE </h1> 
<form name="myform" method="post" action="login2.php" onsubmit="return validate()">
<p> Username </p>
<input type="text" name="username" placeholder="Enter Username"> <br> 
<p> Password </p>
<input type="password" name="password" placeholder="Enter Password"> <br> 
<input type="Submit" name="submit" value="Login"> <br> 

<a href="http://localhost/finalhtml/admin/signup/signupform.php" > Don't have an account  </a> <br>
<a href="http://localhost/finalhtml/admin/adminlogin.php" > Admin Login </a>
</form>
</div>
</body>
</head>

</html>