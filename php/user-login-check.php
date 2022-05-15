<?php 
	require("../includes/config.php");
	session_start();
	if(isset($_POST['logInBtn'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM User WHERE email = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$data = $result->fetch_assoc();
			$sameOrNot = password_verify($password, $data['password']);
			if($sameOrNot){
				if(isset($_SESSION['login-error'])){
					unset($_SESSION['login-error']);
				}
				$_SESSION['user_id'] = $data['user_id'];
				header('Location: ./user-dashboard.php');
			}else{
				$_SESSION['login-error'] = 'Invalid Password!'; 
				header('Location: ./user-login.php');
			}
		}else{
			$_SESSION['login-error'] = 'Invalid Login Credentials!'; 
			header('Location: ./user-login.php');
		}
	}else{
		header('Location: ./user.php');
	}
?>