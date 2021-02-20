<!-- <?php $get_id = $_GET['id']; ?> -->
<div class="row-fluid">

       <a href="students.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Student</a>
                        <!-- block -->
        <div class="block">
        <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Student Information</div>
        </div>
        <div class="block-content collapse in">
				<?php
							$query = mysqli_query($conn,"select student.student_id, student.middlename, student.school, student.student_id, student.class, USER.user_id, USER.user_firstname, USER.user_lastname, USER.username, USER.password, USER.user_status, user_status.status_name, school.school_name, class.class_name FROM student  LEFT JOIN USER ON student.user_id = USER.user_id LEFT JOIN user_status ON student.status = user_status.status_id LEFT JOIN school ON student.school = school.school_id LEFT JOIN class oN student.class = class.class_id where student.student_id ='$get_id'; ")or die(mysqli_error());

							$row = mysqli_fetch_array($query);
              $user_id= mysqli_fetch_array($query);
				?>
        <div class="span12">
				<form method="post">
								
          <div class="control-group">
            <div class="controls">
              <input name="firstname" value="<?php echo $row['user_firstname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "First name" required>
            </div>
          </div>

            <div class="control-group">
              <div class="controls">
                <input name="middlename" value="<?php echo $row['middlename']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Middle name(s)" >
              </div>
            </div>

          <div class="control-group">
             <div class="controls">
               <input name="lastname" value="<?php echo $row['user_lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Last name" required>
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
            <select  name="class" class="" required>
            <option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php
											 $class_query = mysqli_query($conn,"select * from class order by class_name");
										  while($class_row = mysqli_fetch_array($class_query)){
											?>
						  <option value="<?php echo $class_row['class_id']; ?>"><?php echo $class_row['class_name']; ?></option>
					  	 <?php } ?>
             </select>
           </div>
         </div>
								
								
										
          <div class="control-group">
                                           
            <div class="controls">
              <select  name="status" class="" required>
                <option value="<?php echo $row['status_id']; ?>"><?php echo $row['status_name']; ?></option>
                  <?php
                    $status_query = mysqli_query($conn,"select * from user_status  WHERE status_id BETWEEN 1 AND 2 order by status_name");
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
                $class = $_POST['class'];
                $status = $_POST['status'];
      

      mysqli_query($conn,"update student
       set firstname = '$firstname',
       middlename = '$middlename'
       
       
        where student_id = '$get_id' ")or die(mysqli_error());

      // mysqli_query($conn, "update user set user_name ='$username' password ='$password' where user_id = '$user_id' ")
      ?>

      <script>
      window.location = "students.php"; 
      </script>

              <?php     }  ?>
