<?php
include "../../cores/adminC.php";
include "../../entities/admin.php";


if (isset($_POST['bttLogin']))
   {
	require 'connect.php';
	$email =$_POST['email'];
	$password = $_POST['password'];
	$result = mysqli_query($con,'SELECT * FROM admin WHERE email="'.$email.'" AND password="'.$password.'"');
	if(mysqli_num_rows($result)==1){
		session_start();
		$_SESSION['email'] = $email;
		while ($row=mysqli_fetch_row($result))
		    {
		    $_SESSION['id']=$row[0];
		    $_SESSION['username']=$row[1];
		    $_SESSION['email']=$row[2];
		    }
		header('Location: http://localhost/b/views/page/index1.php');
	}
	else{ 
		echo "compte invalide";
}
}
?>
