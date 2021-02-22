<?php
include('dbcon.php');
        
                
               $firstname = $_POST['firstname'];
               $lastname = $_POST['lastname'];
               $username = $_POST['username'];
               $password= $_POST['password'];
               $class_id= $_POST['class_id'];

               mysqli_query($conn,"insert into student (firstname,lastname,class_id,username,password,picture,status)
		values ( '$firstname', '$lastname', '$class_id','$username','$password','uploads/NO-IMAGE-AVAILABLE.jpg','2')                                    
		") or die(mysqli_error()); ?>
<?php    ?>