<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beuty";
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysql_connect_error());
}

if($username!=''&&$password!='')
{
    $query="select * from login where username='".$username."' and password='".$password."'" or die("Connection failed: " . mysql_connect_error());
    $result=mysql_fetch_row($query);
    if($result)
    {
        $_SESSION['username']=$login;
        echo "welcome to php";
    }
    else
    {
        echo'You entere d username or password is incorrect';
    }
}
else
{
    echo'Enter both username and password';
}
?>
