<?php
session_start();
require "connection.php";
if(isset($_SESSION['mail']))
{
$email=$_SESSION["mail"];
$qry="delete from loggedin where email='$email';";
if($conn->query($qry)===TRUE)
{	
	session_destroy();
	echo "you are  successfully logout. click here to login again <a href='test.php'>TRY AGAIN</a>";
	header("location:index.php");
}
else
{
	header("location:connect.php");
}
}
else {
	header("location:connect.php");
}
?>