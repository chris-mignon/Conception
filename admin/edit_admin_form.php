<div class="row-fluid">
<a href="admin_user.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Admin</a>
<!-- block -->
<div class="block">
<div class="navbar navbar-inner block-header">
<div class="muted pull-left">Edit Administrator</div>
</div>
<div class="block-content collapse in">
<div class="span12">
<?php
$query = mysqli_query($conn,"select * from admin where user_id = '$get_id'")or die(mysqli_error());
$row = mysqli_fetch_array($query);
?>
<form method="post">
<div class="control-group">
<div class="controls">
<input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
</div>
</div>

<div class="control-group">
<div class="controls">
<input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
</div>
</div>

<div class="control-group">
<div class="controls">
<input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "Username" required>
</div>
</div>
<div class="control-group">
<div class="controls">
<input class="input focused" value="<?php echo $row['password']; ?>"  name="password" id="focusedInput" type="text" placeholder = "password" required>
</div>
</div>


<div class="control-group">
<div class="controls">
<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

</div>
</div>
</form>
</div>
</div>
</div>
<!-- /block -->
</div>
<?php		
if (isset($_POST['update'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($conn,"update admin set username = '$username'  , firstname = '$firstname' , lastname = '$lastname', password = '$password' where user_id = '$get_id' ")or die(mysqli_error());

mysqli_query($conn,"insert into activity_log (time,username,action) values(NOW(),'$user_username','Edit Admin $username')")or die(mysqli_error());
?>
<script>
window.location = "admin_user.php"; 
</script>
<?php
}
?>