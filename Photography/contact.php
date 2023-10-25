
<?php
   include("connect.php");

if(!$con){
   die('Could not Connect My Sql:' .mysql_error());
}


if(isset($_POST['submit']))
{	 
	 $n = $_POST['name'];
	 $e = $_POST['email'];
	 $s = $_POST['subject'];
	 $p = $_POST['Phono'];
	 $m = $_POST['message'];
	
	 $sql =  "INSERT INTO `photography`.`contact` (`Name` ,`E-mailid`` ,`Subject` ,`PhoneNumber` ,`Message`)
              values ('$n', '$e', '$s', '$p', '$m')";

 $sql="insert into contact  values('$n', '$e', '$s', '$p', '$m')";
	 

	 if (mysql_query($sql)) {
		echo "Contact successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysql_error($con);
	 }
	 mysql_close($con);
}
?>	