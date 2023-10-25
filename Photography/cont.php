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
	 $cname = $_POST['cname'];
	 $email = $_POST['email'];
	 $subj = $_POST['subj'];	 
	 $msg = $_POST['msg'];	 
	 $sql =  "INSERT INTO `photography`.`contact` 
	 (`cname` ,`email` ,`subj` ,`msg`)
VALUES ('$cname', '$email', '$subj', '$msg')";



	 	 
	 if (mysql_query($sql)) {
		echo "contact successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysql_error($con);
	 }
	 mysql_close($con);
}
?>	