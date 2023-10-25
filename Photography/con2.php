<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "photography";
$con=mysql_connect($servername,$username,$password,"$dbname");
if(!$con){
   die('Could not Connect My Sql:' .mysql_error());
}


if(isset($_POST['submit']))
{	 
	 $name = $_POST['name'];
	 $email= $_POST['email'];
	 $subject = $_POST['subject'];
	 $Phno = $_POST['Phono'];
	 $message = $_POST['message'];
	 
	 $sql =  "INSERT INTO `photography`.`contact` (`Name` ,`E-mailid` ,`Subject	` ,`PhoneNumber` ,`Message`)
VALUES ('$name', '$email', '$subject', '$Phno', '$message')";



	 	 
	 if (mysql_query($sql)) {
		echo "contact successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysql_error($con);
	 }
	 mysql_close($con);
}
?>	