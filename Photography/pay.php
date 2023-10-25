
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
	 $cname=$_POST['cname'];
	 $name = $_POST['name'];
	 $cno = $_POST['cno'];	
	 $amt = $_POST['amt'];		
	 $sc = $_POST['sc'];	
	 $sql =  "INSERT INTO `photography`.`payment` 
	 (`cname`,`name` ,`cno` ,`amt`,`sc`)
VALUES ('$cname','$name', '$cno',  '$amt','$sc')";



	 	 
	 if (mysqli_query($sql)) {
		echo "Payment successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysql_error($con);
	 }
	 mysql_close($con);
}
?>	