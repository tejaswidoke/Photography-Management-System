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
	 $mname = $_POST['mname'];
	 $lname = $_POST['lname'];
	 $email = $_POST['email'];
	 $pass = $_POST['pass'];
	 $cpass = $_POST['cpass'];
	 $sql =  "INSERT INTO `photography`.`registration` 
	 (`fname` ,`mname` ,`lname` ,`email` ,`pass` ,`cpass`)
VALUES ('$fname', '$mname', '$lname', '$email', '$pass', '$cpass')";



	 	 
	 if (mysqli_query($con,$sql)) {
		echo "Rigstration successfully !";
	 }else{
		echo "Error: " . $sql . "" . mysql_error($con);
	 }
	 mysqli_close($con);
}
?>	