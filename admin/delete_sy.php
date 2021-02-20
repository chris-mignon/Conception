<?php
include('dbcon.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM school_year where school_year_id='$id[$i]'");
	mysqli_query($conn,"insert into activity_log (username,time,action) values('$user_username',NOW(),'school year deleted')")or die(mysqli_error());
}
header("location: school_year.php");
}
?>