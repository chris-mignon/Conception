	<?php include('dbcon.php'); ?>
	<form action="delete_student.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="">
					<a href="students.php">All</a>
				</li>
				<li class="">
					<a href="unreg_students.php">Unregistered</a>
				</li>
				<li class="active">
				<a href="reg_students.php">Registered</a>
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
		<th></th>
				
				<th>Firstname</th>
				<th>Lastname</th>
				<th>school</th>
				<th>class</th>
				<th>Status</th>
				<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"SELECT users.user_id, users.firstname, users.middlename, users.lastname, users.username, users.password, users.user_role, users.user_status, student.student_id, student.school_id, student.class_id, class.class_name, user_role.role_name, user_status.status_name, school.school_name FROM users LEFT JOIN student ON users.user_id = student.user_id LEFT JOIN class ON student.class_id = class.class_id LEFT JOIN user_role ON users.user_role = user_role.role_id LEFT JOIN user_status ON users.user_status = user_status.status_name left join school on student.school_id= school.school_name WHERE user_role = '4' and user_status = '1'") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['student_id'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$school = $row['school_name'];
		$class = $row['class_name'];
		$status = $row['status_name'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $firstname; ?></td> 
		<td><?php echo $lastname; ?></td> 
		<td><?php echo $school; ?></td>
		<td><?php echo $class; ?></td>
		<td><?php echo $status; ?></td>
	
		<td width="30"><a href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>