<?php
	require "../includes/config.php";
	session_start();
	if(isset($_SESSION['user_id'])){
		header('Location: ./user-dashboard.php');
	}
	if(isset($_POST['btnForPass'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPass = $_POST['confirm-password'];

		$sql = "SELECT * FROM User WHERE email = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$data = $result->fetch_assoc();
			$hashPass = password_hash($confirmPass, PASSWORD_DEFAULT);
			$changePassSQL = "UPDATE User SET password = '$hashPass' WHERE email = '$email'";
			if($conn->query($changePassSQL) === TRUE){
				echo "<script>alert('Account password was changed successfully!'); window.location = './user-login.php'</script>";
			}else{
				echo "<script>alert('Account password was not changed successfully!'); window.location = './user-login.php'</script>";
			}
		}else{
			$_SESSION['change-pass-error'] = 'Invalid Email!';
			header('Location: ./user-login-forgot-password.php');
		}
	}else{
		header('Location: ./user.php');
	}
?>