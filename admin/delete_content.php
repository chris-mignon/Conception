<?php
include('dbcon.php');
if (isset($_POST['delete_content'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM content where content_id='$id[$i]'");
	mysqli_query($conn,"insert into activity_log (username,time,action) values('$user_username',NOW(),'Content deleted')")or die(mysqli_error());
}
header("location: content.php");
}
?>