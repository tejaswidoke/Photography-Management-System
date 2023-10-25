<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "photography";
$con=mysqli_connect($servername,$username,$password,"$dbname");
if(!$con){
   die('Could not Connect My Sql:' .mysql_error());
}
$username=$POST['username'];
$password=$POST['password'];
if($username!=''&&$password!='')
{
 	$query="select * from login where username='".$username."' and password=''.$password."'" or die ("Connection failed: ".mysql_connect_error());
	$result=mysql_fetch_row($query);
	if($result) 
	{
		$_SESSION['username']=$login;
		echo "welcome to php";
	}
	 else
	 {
		 echo'you enters username or passowrd is incorrect';
	 }
}
else
{
	echo'enter both username and password';
}
?>
