<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_teacher.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Teacher List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<form action="delete_teacher.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#teacher_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										    <tr>
                                    <th></th>
                                    <th>Photo</th>
                                    <th> ID </th>
                                    <th>First Name</th>
                                    <th>Last name</th>
                                    <th>School</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
										</thead>
										<tbody>
												 <?php
                                    $teacher_query = mysqli_query($conn,"SELECT users.user_id, users.firstname, users.middlename, users.lastname, users.username, users.password, users.user_role, users.user_status,users.picture, teacher.teacher_id, teacher.user_id, teacher.school_id, user_role.role_name, user_status.status_name, school.school_name FROM users 
                                    LEFT JOIN teacher ON users.user_id = teacher.user_id 
                                    LEFT JOIN school ON teacher.school_id = school.school_id 
                                    LEFT JOIN user_role ON users.user_role = user_role.role_id 
                                    LEFT JOIN user_status ON users.user_status = user_status.status_id 
                                    WHERE user_role = '3' ") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($teacher_query)) {
                                    $id = $row['user_id'];
                                    $tid = $row['teacher_id'];
                                    $firstname = $row['firstname'];
                                   
                                    $lastname = $row['lastname'];
                                
                                    $school = $row['school_name'];
                                    $status = $row['status_name'];
                                        ?>
									<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                    <td width="40"><img class="img-circle" src="<?php echo $row['picture']; ?>" height="50" width="50"></td> 
                                    <td><?php echo $tid;?></td> 
                                    <td><?php echo $firstname; ?></td> 
                                    <td><?php echo $lastname; ?></td> 
                                    <td><?php echo $school; ?></td> 
                                    <td><?php echo $status; ?></td> 
                               
									<td width="50"><a href="edit_teacher.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i></a></td>

													
									
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