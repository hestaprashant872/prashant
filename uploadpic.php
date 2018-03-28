<?php
 session_start();
include("connection.php");
 $pquery=mysqli_query($conn,"SELECT * FROM user WHERE email='".$_SESSION['mail']."'");
//var_dump($_SESSION['mail']);

if(isset($_POST['submit'])){
 
 $name = strtolower($_FILES['file']['filename']);
 $target_dir = "/var/www/html/hestabook/profile";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Insert record
$query = "UPDATE user SET picture ='".$name."' WHERE email='".$_SESSION['mail']."'";
  mysqli_query($link,$query);
  		$_SESSION['image'] = $name;

  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
echo "<script>
	alert('Your Profile Picture Updated Succefully');
	</script>";
	header("location:connect.php");
 }
 
}
?>
