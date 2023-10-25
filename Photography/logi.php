<?php
//code for check Login Credentials 
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'photography');

 
     $email=$_POST['email'];
     $pass=$_POST['pass'];	
     $q="select email,pass from registration where email='$email' and pass='$pass'";	
	 $rec=mysqli_query($q);	  
	while($row=mysqli_fetch_array($rec))
		{
		$email=$row[0];
	$pass=$row[1];
		}			
	if($email==$email && $pass==$pass)
	{
	if($email=='admin@gmail.com')
	{
		$_SESSION["email"]=$email;
		
			header("location:http://localhost/photography/AdminLTE-master/index1.html");
	}
	else
	{
	$_SESSION["email"]=$email;

	header("location:gallery.html");
	}
	}
else{
        
   header("location:login.html");
   }	
   mysql_close();
?>