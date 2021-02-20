 <?php $get_id = $_GET['id']; ?>

<div class="row-fluid">

       <a href="teachers.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Teacher</a>
                        <!-- block -->
        <div class="block">
        <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Teacher Information</div>
        </div>
        <div class="block-content collapse in">
				<?php
							$query = mysqli_query($conn,"SELECT users.user_id, users.firstname, users.middlename, users.lastname, users.username, users.password, users.user_role, users.user_status,users.picture, teacher.teacher_id, teacher.user_id, teacher.school_id, user_role.role_name, user_status.status_name, school.school_name FROM users 
              LEFT JOIN teacher ON users.user_id = teacher.user_id 
              LEFT JOIN school ON teacher.school_id = school.school_id 
              LEFT JOIN user_role ON users.user_role = user_role.role_id 
              LEFT JOIN user_status ON users.user_status = user_status.status_id 
               where users.user_id='$get_id'; ")or die(mysqli_error());

							$row = mysqli_fetch_array($query);
              $user_id= mysqli_fetch_array($query);
			  $uid =$row['user_id'];
				?>
        <div class="span12">
				<form method="post">
								
          <div class="control-group">
            <div class="controls">
              <input name="firstname" value="<?php echo $row['firstname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "First name" required>
            </div>
          </div>

            <div class="control-group">
              <div class="controls">
                <input name="middlename" value="<?php echo $row['middlename']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Middle name(s)" >
              </div>
            </div>

          <div class="control-group">
             <div class="controls">
               <input name="lastname" value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Last name" required>
             </div>
          </div>

          <div class="control-group">
              <div class="controls">
                <input name="username" value="<?php echo $row['username']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "username" required>
              </div>
          </div>

                                        
          <div class="control-group">
              <div class="controls">
               <input name="password" value="<?php echo $row['password']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "password" required>
              </div>
          </div>



          <div class="control-group">
                                  School  
              <div class="controls">
                <select  name="school" class="" required>
                <option value="<?php echo $row['school_id']; ?>"><?php echo $row['school_name']; ?></option>
                <?php
                $school_query = mysqli_query($conn,"select * from school order by school_name");
                               while($school_row = mysqli_fetch_array($school_query)){
                              ?>
               <option value="<?php echo $school_row['school_id']; ?>"><?php echo $school_row['school_name']; ?></option>
               <?php } ?>
                </select>
              </div>
          </div>
                        						
										
          <div class="control-group">              
            <div class="controls">
              <select  name="status" class="" required>
                <option value="<?php echo $row['status_id']; ?>"><?php echo $row['status_name']; ?></option>
                  <?php
                    $status_query = mysqli_query($conn,"select * from user_status  WHERE status_id BETWEEN 3 AND 4 order by status_name");
                    while($status_row = mysqli_fetch_array($status_query)){
                   ?>
               <option value="<?php echo $status_row['status_id']; ?>"><?php echo $status_row['status_name']; ?></option>
               <?php } ?>
              </select>
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
            if (isset($_POST['update'])) {
			
                $firstname = $_POST['firstname'];
                $middlename = $_POST['middlename'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $school = $_POST['school'];
                 $status = $_POST['status'];
      

      mysqli_query($conn,"update users, teacher set users.firstname = '$firstname', users.middlename = '$middlename', users.lastname ='$lastname', users.username = '$username', users.password ='$password', users.user_status = '$status', teacher.school_id ='$school' where users.user_id = '$get_id' and teacher.user_id ='$get_id' ") or die(mysqli_error());
      mysqli_query($conn,"insert into activity_log (username,time,action) values ('$user_username', NOW(),' Edit Teacher data $firstname $lastname')")or die(mysqli_error());
    
      ?>

      <script>
      window.location = "teachers.php"; 
      </script>

              <?php     }  ?>
