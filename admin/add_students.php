   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Student</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form id="add_student" method="post">
								
								<div class="control-group">
            <div class="controls">
              <input name="firstname"  class="input focused" id="focusedInput" type="text" placeholder = "First name" required>
            </div>
          </div>

            
          <div class="control-group">
             <div class="controls">
               <input name="middlename"  class="input focused" id="focusedInput" type="text" placeholder = "Middle name(s)" >
             </div>
          </div>

          <div class="control-group">
             <div class="controls">
               <input name="lastname"  class="input focused" id="focusedInput" type="text" placeholder = "Last name" required>
             </div>
          </div>

          <div class="control-group">
              <div class="controls">
                <input name="username"  class="input focused" id="focusedInput" type="text" placeholder = "username" required>
              </div>
          </div>

                                        
          <div class="control-group">
              <div class="controls">
               <input name="password"  class="input focused" id="focusedInput" type="text" placeholder = "password" required>
              </div>
          </div>



        
                            
					
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
                    <?php
if (isset($_POST['save'])){
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($conn,"select * from users where firstname  =  '$firstname' and lastname = '$lastname' and username ='$username' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('User Already Exist');
</script>
<?php
}else{
mysqli_query($conn,"insert into users (firstname, middlename, lastname, username, password, user_role, user_status,picture) values('$firstname','$middlename','$lastname','$username', '$password','4','2','uploads/NO-IMAGE-AVAILABLE.jpg' )")or die(mysqli_error());
?>
<script>
window.location = "students.php";
</script>
<?php
}
}
?>
		