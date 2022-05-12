<?php 
	require("../includes/config.php");
	session_start();
	if(isset($_POST['logInBtn'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM Driving_School WHERE email = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$data = $result->fetch_assoc();
			$sameOrNot = password_verify($password, $data['password']);
			if($sameOrNot){
				if(isset($_SESSION['login-error'])){
					unset($_SESSION['login-error']);
				}
				$_SESSION['username'] = $email;
				$_SESSION['school_id'] = $data['school_id'];
				header('Location: ./driving-school-dashboard.php');
			}else{
				$_SESSION['login-error'] = 'Invalid Password!'; 
				header('Location: ./driving-school-login.php');
			}
		}else{
			$_SESSION['login-error'] = 'Invalid Login Credentials!'; 
			header('Location: ./driving-school-login.php');
		}
	}else{
		header('Location: ./driving-school.php');
	}
?>