<?php
		include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "select * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn,$query)or die(mysqli_error());
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);
		$role= $row['user_role'];

		if( $num_row > 0 ) { 
			if( $role== 1)
			{

			
			$_SESSION['id']=$row['user_id'];
			echo 'true_admin';
			}
			else if( $role ==3)
			{
				$_SESSION['id']=$row['user_id'];
			echo 'true_teacher';
			}
			else if($role== 4)
			{
				$_SESSION['id']=$row['user_id'];
			echo 'true_student';
			}

			mysqli_query($conn,"insert into user_log (login_time,user)values(NOW(),".$row['user_id'].")")or die(mysqli_error());
		
		 }else{ 
				echo 'false';
		}	
				
				
		?>