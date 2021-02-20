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
							$query = mysqli_query($conn,"select teacher.teacher_id, teacher.user_id, teacher.teacher_firstname, teacher.middlename, teacher.teacher_lastname, teacher.picture, USER.username, USER.password, school.school_name, user_status.status_name FROM teacher LEFT JOIN school ON teacher.school = school.school_id LEFT JOIN user_status ON teacher.teacher_status = user_status.status_id LEFT JOIN user ON teacher.user_id= user.user_id where teacher_id='$get_id'; ")or die(mysqli_error());

							$row = mysqli_fetch_array($query);
              $user_id= mysqli_fetch_array($query);
			  $uid =$row['user_id'];
				?>
        <div class="span12">
				<form method="post">
								
          <div class="control-group">
            <div class="controls">
              <input name="firstname" value="<?php echo $row['teacher_firstname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "First name" required>
            </div>
          </div>

            <div class="control-group">
              <div class="controls">
                <input name="middlename" value="<?php echo $row['middlename']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Middle name(s)" >
              </div>
            </div>

          <div class="control-group">
             <div class="controls">
               <input name="lastname" value="<?php echo $row['teacher_lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Last name" required>
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
                    $status_query = mysqli_query($conn,"select * from user_status  WHERE status_id BETWEEN 3 AND 5 order by status_name");
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
      

      mysqli_query($conn,"update teacher set teacher_firstname ='$firstname', middlename = '$middlename', 
	  teacher_lastname ='$lastname', school = '$school', teacher_status = '$status' WHERE teacher_id = '$get_id' ") or die(mysqli_error());

    //   mysqli_query($conn, "update user set 
	//   user_firstname = '$firstname',
	//   user_lastname = '$lastname', 
	//   username ='$username',
	//    password ='$password',
	//    user_status ='$status'
	//     where user_id = '$uid'; ")or die(mysqli_error());
      ?>

      <script>
      window.location = "teachers.php"; 
      </script>

              <?php     }  ?>
