<?php
$con = mysqli_connect('localhost', 'root', '', 'prosysteme');
if(isset($_GET['email'],$_GET['key']) AND !empty($_GET['email']) AND !empty($_GET['key'])){
    $email= htmlspecialchars($_GET['email']);
    $key=htmlspecialchars($_GET['key']);
    echo $email;
    echo $key;
			$result1 = mysqli_query($con,'SELECT * FROM client WHERE email="'.$email.'" AND confirmkey="'.$key.'"');
			var_dump($result1);
			if(mysqli_num_rows($result1)==1) {
				 while ($row=mysqli_fetch_row($result1))
				 {
				

    						if($row[11] == 0){
    		 					$resultat="UPDATE client SET confirm = 1 WHERE email = '".$email."'AND confirmkey = '".$key."'";
								$result = mysqli_query($con,$resultat);
          						echo "Votre compte a bien ete confirme !";
    						}
    						else {
    								echo "Votre compte a deja ete confirme !";
    						}

				}
			}
    		else {
    				echo "L utilisateur n existe pas !";
   				}

}


?>