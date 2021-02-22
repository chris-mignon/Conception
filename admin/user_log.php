<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container-fluid">
<div class="row-fluid">
<?php include('user_log_sidebar.php'); ?>

<div class="span9" id="content">
<div class="row-fluid">
<!-- block -->
<div id="block_bg" class="block">
<div class="navbar navbar-inner block-header">
<div class="muted pull-left">Users Log List</div>
</div>
<div class="block-content collapse in">
<div class="span12">
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

<thead>
<tr>
<th>Log #</th>
<th>Login time</th>
<th>Logout time</th>
<th>First name</th>
<th>Last name</th>	
<th>User ID</th>
<th>Role</th>	
</tr>
</thead>
<tbody>
<?php
$user_query = mysqli_query($conn,"SELECT user_log.log_id, user_log.login_time, user_log.logout_time, user_log.user_id, users.firstname, users.lastname, users.user_role, user_role.role_name FROM user_log LEFT JOIN users ON user_log.user_id = users.user_id LEFT JOIN user_role ON users.user_role = user_role.role_id ORDER BY user_log.log_id ")or die(mysqli_error());
while($row = mysqli_fetch_array($user_query)){
$id = $row['log_id'];
$logintime =$row['login_time'];
$logouttime =$row['logout_time'];
$firstname =$row['firstname'];
$lastname =$row['lastname'];
$userid =$row['user_id'];
$role =$row['role_name'];

?>

<tr>
<td><?php echo $id; ?></td>
<td><?php echo $logintime; ?></td>
<td><?php echo $logouttime; ?></td>
<td><?php echo $firstname; ?></td>
<td><?php echo $lastname; ?></td>
<td><?php echo $userid ?></td>
<td><?php echo $role; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
<!-- /block -->
</div>


</div>
</div>
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
</body>

</html>