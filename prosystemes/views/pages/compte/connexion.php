<?php
session_start();
if (isset($_POST['bttLogin'])){
	require 'connect.php';
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$result = mysqli_query($con,'SELECT * FROM admin WHERE email="'.$email.'" AND password="'.$password.'"');
	if(mysqli_num_rows($result)==1){
		$_SESSION['email'] = $email;
		header('Location: ../marketing/fixed.php');
	}
	else 
		echo "Account invalid";
}
?>
