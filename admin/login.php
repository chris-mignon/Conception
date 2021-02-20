<?php
		include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($conn,"select * FROM users WHERE username='$username' AND password='$password' and user_role = '1'")or die(mysqli_error());
		$count = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);


		if ($count > 0){
		
		$_SESSION['id']=$row['user_id'];
		
		echo 'true';
		
		mysqli_query($conn,"insert into user_log (login_time,user_id)values(NOW(),".$row['user_id'].")")or die(mysqli_error());
		 }else{ 
		echo 'false';
		}	
				
		?>