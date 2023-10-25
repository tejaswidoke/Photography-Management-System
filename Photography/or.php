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
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $mbno = $_POST['mbno'];
	 $add = $_POST['add'];
	 $city = $_POST['city'];
     $shoot = $_POST['shoot'];	 
	 $msg = $_POST['msg'];	 
	 $sql =  "INSERT INTO `photography`.`order` 
	 (`name` ,`email` ,`mbno`,`add` ,`city`,`shoot`,`msg`)
VALUES ('$name', '$email', '$mbno','$add', '$city', '$shoot', '$msg')";



	 	 
	 if (mysqli_query($sql)) {
		echo "Order Placed successfully !";
		header("location:payment.html");	
	 } else
		 {
		echo "Error: " . $sql . "" . mysql_error($con);
	 }
	 mysql_close($con);
}
?>	