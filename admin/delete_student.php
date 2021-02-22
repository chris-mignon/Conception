<?php
include('dbcon.php');
if (isset($_POST['delete_student'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($conn,"DELETE FROM users where user_id ='$id[$i]'");
	 mysqli_query($conn,"insert into activity_log (username,time,action) values('$user_username',NOW(),'Student deleted')")or die(mysqli_error());
	
}
header("location: students.php");
}
?>