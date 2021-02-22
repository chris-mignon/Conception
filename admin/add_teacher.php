   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add  Teacher</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
                <div class="control-group">
            <div class="controls">
              <input name="firstname"  class="input focused" id="focusedInput" type="text" placeholder = "First name" required>
            </div>
          </div>

          <div class="control-group">
             <div class="controls">
               <input name="middlename"  class="input focused" id="focusedInput" type="text" placeholder = "Middle name(s)" required>
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
            <select  name="status" class="" required>
              
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
          if (isset($_POST['save'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $middlename =$_POST['middlename'];
              $password = $_POST['password'];
              $status = $_POST['status'];


        $query = mysqli_query($conn,"select * from users where firstname = '$firstname' and lastname = '$lastname' ")or die(mysqli_error());
        $count = mysqli_num_rows($query);
        
        if ($count > 0){ ?>
        <script>
        alert('Data Already Exist');
        </script>
        <?php
        }else{

        mysqli_query($conn,"insert into users (firstname,middlename,lastname,username,password,user_role,user_status,picture)
        values ('$firstname','$middlename','$lastname','$username', '$password','3','$status','uploads/NO-IMAGE-AVAILABLE.jpg')") or die(mysqli_error()); 
         
        mysqli_query($conn,"insert into activity_log (username,time,action) values('$user_username',NOW(),'Add Teacher $firstname $lastname')")or die(mysqli_error());
        ?>
        <script>
        window.location = "teachers.php"; 
        </script>
        <?php   }} ?>
      
      