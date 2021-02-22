<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('users_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_user.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">List of users</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_users.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>User ID </th>
												<th> First Name </th>
												<th> Last Name </th>
												<th> Username </th>
												<th> password </th>
												<th>Role</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
										<?php
													$user_query = mysqli_query($conn,"select user.user_id, user.user_firstname, user.user_lastname, user.username, user.password, user.user_role, user_roles.role_name, user_roles.role_id FROM user LEFT JOIN user_roles ON user.user_role = user_roles.role_id")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['user_id'];
													$rolename = $row['role_name'];
													$roleid=$row['role_id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['firstname']; ?></td>
												<td> <?php echo $row['lastname']; ?></td>
	
												<td><?php echo $row['username']; ?></td>
											
												<td width="40">
												<a href="edit_user.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
												</td>
		
									
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