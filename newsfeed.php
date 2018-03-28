<?php
error_reporting(E_ALL);
session_start();
require "connection.php";
$feed=$_POST["feed"];
var_dump($feed);
$imgtest=getimagesize($feed);
if(is_array($imgtest)){
$post_type=0;}
else
{
	$post_type=1;
}
$email=$_SESSION["mail"];
$qry="insert into post (post_data,post_type,post_time) values ('$feed',$post_type,now());";
$post_id="select post_id from post order by post_time DESC limit 1;";
if($conn->query($qry)===TRUE)
{
	$val=$conn->query($post_id);
	$id=$val->fetch_assoc();
	$val=$id['post_id'];
	echo $val;
	echo $email;
	$sql="insert into feed (post_id, email) values ($val,'$email');";
	if($conn->query($sql)===TRUE)
	{
		echo "inserted";
		header("location:connect.php");
}
	else 
	{
		echo "error  " .$conn->error;
	}

}
else{
	echo "error somewhere";
}
?>