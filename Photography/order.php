<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "photography";
$con=mysqli_connect($servername,$username,$password,"$dbname");
if(!$con){
   die('Could not Connect My Sql:' .mysql_error());
}


if(isset($_POST['submit']))
{	 
	 $fname = $_POST['fname'];
	 $mail = $_POST['mail'];
	 $mno = $_POST['mno'];
	 $add = $_POST['add'];
	 $city = $_POST['city'];
	 $shoot = $_POST['shoot'];
	 $sql =  INSERT INTO `photography`.`order` (`name`, `email`, `mno`, `add`, `city`, `shoot`)
VALUES ('$fname', '$mail', '$mno', '$add', '$city', '$shoot')";

	 if (mysql_query($sql)) {
		echo "Order Booked successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysql_error($con);
	 }
	 mysql_close($con);
}
?>	
