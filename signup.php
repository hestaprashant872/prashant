<?php 
error_reporting(E_ALL);
require "connection.php";
$name=htmlspecialchars($_POST["name"]);
$email=htmlspecialchars($_POST["email"]);
$mobile=(int)htmlspecialchars($_POST["mobile"]);
$password=htmlspecialchars($_POST["password"]);
$gender=htmlspecialchars($_POST['gender']);
$dob=date("Y-m-d",strtotime($_POST['dateofbirth']));
$address=htmlspecialchars($_POST['addr']);
$descr=htmlspecialchars($_POST["description"]);
$target_dir = "photo";

if(isset($_FILES['image'])){
      $errors= array();
     	$file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
       $file_tmp = $_FILES['image']['tmp_name'];
       $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"photo/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

$file_path = $target_dir."/".$file_name;
$sql = "INSERT INTO user (name, email,mobile,password,gender,dob,address,description,picture) VALUES ('$name', '$email',$mobile,'$password','$gender','$dob','$address','$descr','$file_path');";
		if ($conn->query($sql) === TRUE) 
		{
    	echo "New record created successfully";
    	header("location:index.php");
	} 
	else
	 {
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
?>