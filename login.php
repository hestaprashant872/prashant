<?php
if (isset($_POST["loginsubmit"])) 
{
	require "connection.php";
	$email=$_POST['email'];
	$password=$_POST['password'];
	$qry="select * from user where email='$email' and password='$password';";
	$q="insert into loggedin (email) values ('$email');";
	$row=$conn->query($qry);
	$result = $row->fetch_assoc();
	if (is_array($result))
	{
		session_start();
		$_SESSION["mail"]=$result[email];
		$_SESSION["name"]=$result[name];
		if($conn->query($q) === TRUE)
			header("location:connect.php");
	}
	else
	{
		$q="select * from user where email='$email';";
		$r=$conn->query($q);
		$s=$r->fetch_assoc();
		if(is_array($s)){
			header("location:index.php");
		}
		else
		{
			header("location:index.php");
		}
	}
}
?>