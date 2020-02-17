<?php

session_start();
	include_once 'config.php';

	$email= mysqli_real_escape_string($conn, $_POST['email']);
	$password= mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($email) || empty($password)) {
		header("Location: index.php?login=username and password cannot be empty");
		exit();
	}
	else
	{
		$sql="select * from users where email='$email';";
		$result=mysqli_query($conn, $sql);
		$resultCheck=mysqli_num_rows($result);


		if ($resultCheck<1) {
			header("Location: login.php?login=noUsernameExist");
			exit();
		}
		else
		{
			$row=mysqli_fetch_assoc($result);
			if($password==$row['password'])
			{
						$_SESSION['id'] = $row['id'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['mobile'] = $row['phoneno'];
						$_SESSION['email'] = $row['email'];
		
						header("Location:index.php?login=success");
						exit();					

			}
			else{
					header("Location:login.php?login=wrong password");
					exit();
			}
		}

	}
?>