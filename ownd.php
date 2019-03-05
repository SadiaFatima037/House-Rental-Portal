<!DOCTYPE HTML>
<html>
<body>
<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'houserental'); 
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
$inname = $_POST["uname"]; 
$indetails = $_POST["prodetails"];
$intype = $_POST["propertyType"];
$incity = $_POST["quickCity"];
$inlocality = $_POST["locality"];
$inaddress = $_POST["address"];
$infloorno = $_POST["floorno"];
$inareaper = $_POST["areaper"];
$inpropproof = $_POST["propproof"];
$inimg1 = $_POST["img1"];
$inimg2 = $_POST["img2"];
$inimg3 = $_POST["img3"];





$stmt = $db->prepare("INSERT INTO sell(name, details, type, city, locality, address, floorno, areaper, propproof, img1, img2, img3 ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
$stmt->bind_param("ssssssssssss", $inname, $indetails, $intype, $incity, $inlocality, $inaddress, $infloorno, $inareaper, $inpropproof, $inimg1, $inimg2, $inimg3); 
$stmt->execute();
$result = $stmt->affected_rows;
$stmt -> close();
$db -> close(); 
if($result > 0)
{
header("location: RegSuccess.php"); 
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
</body> 
</html>