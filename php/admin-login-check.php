<?php 
	require("../includes/config.php");
	session_start();
	if(isset($_POST['logInBtn'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
        // echo $email;
        // echo $password;
		$sql = "SELECT * FROM Administrator WHERE email = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$data = $result->fetch_assoc();
			$sameOrNot = password_verify($password, $data['password']);
			if($sameOrNot){
				if(isset($_SESSION['login-error'])){
					unset($_SESSION['login-error']);
				}
				$_SESSION['username'] = $email;
				$_SESSION['admin_id'] = $data['admin_id'];
				header('Location: ./admin-dashboard.php');
			}else{
				$_SESSION['login-error'] = 'Invalid Password!'; 
				header('Location: ./admin-login.php');
			}
		}else{
			$_SESSION['login-error'] = 'Invalid Login Credentials!'; 
			header('Location: ./admin-login.php');
		}
	}else{
		header('Location: ./admin.php');
	}
?>