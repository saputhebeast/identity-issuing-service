<?php 
	session_start();
	if(isset($_POST['logInBtn'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		if($email == 'peterparker@gmail.com' && $password == '12345678'){
			if(isset($_SESSION['login-error'])){
				unset($_SESSION['login-error']);
			}
			$_SESSION['username'] = $email;
			header('Location: ../php/driving-school-dashboard.php');
		}else{
			$_SESSION['login-error'] = 'error-login'; 
			header('Location: ../php/driving-school-login.php');
		}
	}else{
		header('Location: ../index.php');
	}
?>