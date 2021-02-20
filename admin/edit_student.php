<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_students_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Student List</div>
		</div>
		<div class="block-content collapse in">
				<div class="span12">
				<form action="delete_student.php" method="post">
				<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
				<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
				<?php include('modal_delete.php'); ?>
					<thead>
						<tr>
						<th></th>

					<th>Photo</th>
					<th> ID </th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>school</th>
					<th>class</th>
					<th>Status</th>

					<th></th>
					</thead>
					<tbody>
						
						<?php
			$query = mysqli_query($conn," SELECT users.user_id, users.firstname, users.middlename, users.lastname, users.username, users.password, users.user_role, users.user_status,users.picture, student.student_id, student.school_id, student.class_id, class.class_name, user_role.role_name, user_status.status_name, school.school_name FROM users LEFT JOIN student ON users.user_id = student.user_id LEFT JOIN class ON student.class_id = class.class_id LEFT JOIN user_role ON users.user_role = user_role.role_id LEFT JOIN user_status ON users.user_status = user_status.status_id left join school on student.school_id= school.school_id WHERE user_role = '4' ") or die(mysqli_error());
			while ($row = mysqli_fetch_array($query)) {
				$id = $row['user_id'];
				$sid = $row['student_id'];
				$pic = $row['picture'];
				$firstname = $row['firstname'];
				$middlename = $row['middlename'];
				$lastname = $row['lastname'];
				$school = $row['school_name'];
				$class = $row['class_name'];
				$status = $row['status_name'];
				?>

				<tr>
				<td width="30">
				<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
				</td>

		<td width="40"><img class="img-circle" src="<?php echo $row['picture']; ?>" height="40" width="40"></td> 
		<td><?php echo $sid; ?></td>
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