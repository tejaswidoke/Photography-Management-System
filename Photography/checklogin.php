<?php
session_start();
 include("connect.php");
	 
  $em=$_POST['em'];
     $pa=$_POST['pa'];
	$ltype=$_POST['ltype'];
	 $a="A";
	 $b="Customer";
	 
	  
	 $q= "select emailid , password ,status, rtype from customer where emailid='$em' and password='$pa' and status='$a' ";
	
		 
		 $rec=mysql_query($q);
	  
	while($row=mysql_fetch_array($rec))
		{
		$name=$row[0];
	$pass=$row[1];
	$rtype=$row[3];
		
		}
		
		
	if($em==$name && $pa==$pass  && $ltype==$rtype && $ltype=='Customer')
	{
	$_SESSION["name"]=$name;
	header("location:customerfacility.php");

	}
	
	else if($em==$name && $pa==$pass  && $ltype==$rtype && $ltype=='Agent')
	{
	$_SESSION["name"]=$name;
	header("location:empfacility.php");

	}
	
	
	
   else{
        
   header("location:loginerror.php");
   }
	
	
   mysql_close($conn);
?>