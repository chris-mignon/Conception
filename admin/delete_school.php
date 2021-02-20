<?php
include('dbcon.php');
if (isset($_POST['delete_school'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM school where school_id='$id[$i]'");
}
header("location: school.php");
}
?>