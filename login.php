<?php
include "../../cores/clientC.php";
include "../../entities/client.php";

if (isset($_POST['bttLogin']))
   {
	require 'connect.php';
	$email =$_POST['email'];
	$password = $_POST['pwd'];
	$result = mysqli_query($con,'SELECT * FROM client WHERE email="'.$email.'" AND password="'.$password.'" AND confirm = 1');
	if(mysqli_num_rows($result)==1){
		session_start();
		$_SESSION['email'] = $email;
		while ($row=mysqli_fetch_row($result))
		    {
		    $_SESSION['id']=$row[0];
		    $_SESSION['code']=$row[5];
		    $_SESSION['ville']=$row[7];
		    $_SESSION['num']=$row[8];
		    $_SESSION['email']=$row[9];
		    }
		header('Location: http://localhost/b/views/clients/index.php');
	}
	else{ 
		echo "Account invalid";
}
}
?>
