<?php

if (isset($_POST['bttLogin']))
   {
	require 'connect.php';
	$email =$_POST['email'];
	$password = $_POST['pwd'];
	$result = mysqli_query($con,'SELECT * FROM client WHERE email="'.$email.'" AND password="'.$password.'"');
	if(mysqli_num_rows($result)==1){
		session_start();
		$_SESSION['email'] = $email;
		while ($row=mysqli_fetch_row($result))
		    {
		    $_SESSION['id']=$row[0];
		    $_SESSION['code']=$row[5];
		    $_SESSION['ville']=$row[6];
		    $_SESSION['num']=$row[7];
		    $_SESSION['email']=$row[8];
		    }
		header("Location: marketing.php");
	}
	else{ 
		echo "Account invalid";
}
}
?>
