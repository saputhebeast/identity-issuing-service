<?php
	require "../includes/config.php";
	session_start();
	if(isset($_SESSION['school_id'])){
		header('Location: ./driving-school-dashboard.php');
	}
	if(isset($_POST['btnForPass'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPass = $_POST['confirm-password'];

		$sql = "SELECT * FROM Driving_School WHERE email = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$data = $result->fetch_assoc();
			$hashPass = password_hash($confirmPass, PASSWORD_DEFAULT);
			$changePassSQL = "UPDATE Driving_School SET password = '$hashPass' WHERE email = '$email'";
			if($conn->query($changePassSQL) === TRUE){
				echo "<script>alert('Account password was changed successfully!'); window.location = './driving-school-login.php'</script>";
			}else{
				echo "<script>alert('Account password was not changed successfully!'); window.location = './driving-school-login.php'</script>";
			}
		}else{
			$_SESSION['change-pass-error'] = 'Invalid Email!';
			header('Location: ./driving-school-login-forgot-password.php');
		}
	}else{
		header('Location: ./driving-school.php');
	}
?>