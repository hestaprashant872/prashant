<form action="test.php" enctype="multipart/form-data" method="post">
<input type="file" name="file_img">
<input type="submit" name="btn_upload" value="upload">
</form>
<!--<?php 
require "connection.php";
if(isset($_POST['btn_upload']))
{
	$filetmp=$_FILES["file_img"]["tmp"];
	var_dump($filetmp);
	$filename=$_FILES["file_img"]["name"];
	$filetype=$_FILES["file_img"]["type"];
	$filesize=$_FILES['file_img']['size'];

	$filepath="photo/".$filename;
	var_dump($filepath);
	move_uploaded_file($filetmp,$filepath);

	$sql="update user set picture='$filepath' where email='kavi2101sh@gmail.com';";
	if($conn->query($sql)===TRUE){
		echo "success";
	}
	else{
		echo "naah";
	}
}
$sql="select * from user where email='kavi2101sh@gmail.com';";
$dataObj = $conn->query($sql);
$user = $dataObj->fetch_row();

echo $user[9];
?>-->
<!--<img src="<?php echo $user[9];?>" width="100px" height="100px" alt="profile picture">
--><img src="photo/card-1.png"><br/>
<img src="<?php echo $user['picture']; ?>">
