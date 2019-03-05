<?php
$dhost='localhost';
$duser='root';
$dpass='';

 $conn = mysqli_connect($dhost, $duser, $dpass,'houserental');
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $id=$_POST['id'];
   $sql = "UPDATE sell SET Approval=1 where id='$id'";
   $retval = mysqli_query( $conn,$sql );
   if(!$retval)
   {
	   echo "false";
   }
   else
   {
	   echo("approved");
   }
   header('Location: retcode.php');
exit;
?>