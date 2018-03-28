<?php
function getTime($time){
	$now =strtotime("now");
	$lastWeek = strtotime($time);
    $difference = abs($now - $lastWeek)/3600;
    $agoTime=getAgoTime($difference/24);
    return $agoTime;
}
function getAgoTime($time)
{
	if (floor($time)>=1)
	{
		return floor($time)." days ago";
	}
	else{
		if(floor($time*24>=1)){
		return floor($time*24)." hours ago";
	}
	else{
		return floor($time*60*24)." minutes ago";
	}

}
}
function getPostType($type)
{
	if($type==0)
	{
		return "I";
	}
	else{
		return "T";	 
	}
}
require "connection.php";
$sql="select post.post_data, post.post_type, post.post_time,feed.email from post inner JOIN feed on post.post_id=feed.post_id order by post.post_time DESC;";
$dataObj = $conn->query($sql);
while ($row = $dataObj->fetch_assoc()) {
        $data[] = $row;
    }

?>
<div class="timeline">
<ul>
<?php foreach ($data as $key) :?>
					<li>
<?php 
	$pic= $key['post_data'];
	$post_mail=$key['email'];
	$qry="select name from user where email='$post_mail';";
	$dataval=$conn->query($qry);
	$row=$dataval->fetch_assoc();
?>
						<div class="post">
							<span id="type"><?php echo getPostType($key['post_type']);?></span>
<?php if($key['post_type']==1)
{
	echo "<p>$pic</p>";
}
else {
	echo '<img src='.$pic.' alt="image"/>';
}
?>
						<p><span>Posted by <?php echo $row['name'];?></span><span>      Posted at <?php echo getTime($key['post_time']);?></span></p>
		</div>
	</li>
	<?php endforeach;?>
</ul>
</div>