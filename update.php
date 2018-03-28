<?php
error_reporting(E_ALL);
require "connection.php";
session_start();
$name=$_POST["name"];
$pass=$_POST["password"];
$desc=$_POST["description"];
$img=$_POST["picture"];
$addr=$_POST["address"];
$email=$_SESSION["mail"];
$dob=date("Y-m-d",strtotime($_POST['DOB']));
$qry="update user set name='$name',address='$addr' ,password='$pass', description='$desc' where email='$email';";
if($conn->query($qry)===TRUE){
	echo "row updated";
	header("location:connect.php");
}
?>