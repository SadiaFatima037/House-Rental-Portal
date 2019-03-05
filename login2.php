<!DOCTYPE HTML>
<html>
<body>
<?php
include("DBconlogin.php"); 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 

$inUsername = $_POST["username"];
$inPassword = $_POST["password"];






$stmt = $db->prepare("INSERT INTO LOGIN( USERNAME, PASSWORD) VALUES(?, ?)"); 
$stmt->bind_param("ss", $inUsername, $inPassword); 
$stmt->execute();
$result = $stmt->affected_rows;
$stmt -> close();
$db -> close(); 
if($result > 0)
{
header("location: http://localhost/finalhtml/admin/userlogin/version.php"); 
}
else
{
echo "Oops. Something went wrong. Please try again"; 
?>
<a href="">Try Login</a>
<?php 
}
}
?>
</body> 
</html>