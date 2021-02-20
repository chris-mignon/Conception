<?php
include('dbcon.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);

for($i=0; $i < $N; $i++)
{ 
	mysqli_query($conn,"insert into activity_log (username,time,action) values( '$user_username',NOW(),'Delete user')")or die(mysqli_error());
	$result = mysqli_query($conn,"DELETE FROM users where user_id='$id[$i]'");
	mysqli_query($conn,"insert into activity_log (username,time,action) values('$user_username',NOW(),'Delete Admin User ')")or die(mysqli_error());
}
header("location: admin_user.php");
}
?>