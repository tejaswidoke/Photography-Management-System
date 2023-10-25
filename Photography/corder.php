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
	 $fname = $_POST['fname'];
	 $mname = $_POST['mname'];
	 $lname = $_POST['lname'];
	 $email = $_POST['email'];
	 $pass = $_POST['pass'];
	 $cpass = $_POST['cpass'];
	 $sql =  "INSERT INTO `photography`.`signin` 
	 (`FirstName` ,`MiddleName` ,`LastName` ,`E-mailid` ,`Password` ,`Confirmpassword`)
VALUES ('$fname', '$mname', '$lname', '$email', '$pass', '$cpass')";

	 if (mysql_query($sql)) {
		echo "Rigstration successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysql_error($con);
	 }
	 mysql_close($con);
}
?>	