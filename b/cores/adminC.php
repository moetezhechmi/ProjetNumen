<?PHP
include "../../config.php";
class AdminC {
function afficherAdmin ($admin){
		echo "id: ".$admin->getId()."<br>";
		echo "username: ".$admin->getUsername()."<br>";
		echo "email: ".$admin->getEmail()."<br>";
		echo "password: ".$admin->getPassword()."<br>";
		
	}

function afficherAdmins(){

		$sql="SElECT * From admin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function ajouterAdmins($admin){
	    $username =$_POST['username'];
	    $email =$_POST['email'];
	    $password =$_POST['password'];
	    $sql="INSERT INTO admin( username , email, password) VALUES ("."'".$username."','".$email."','".$password."')";
		//$sql="insert into admin (nom,description,date_debut,date_fin,ouverture) values (:nom,:description,:date_debut,:date_fin,:ouverture)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $username=$admin->getUsername();
        $email=$admin->getEmail();
        $password=$admin->getPassword();
        
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function supprimerAdmin($id){
		$id =$_POST['id'];
		$sql="DELETE FROM admin where id=' ".$id."'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
  /* function login($email,$password)
   {
   	    $email =$_POST['email'];
   	    $password=$_POST['password'];
		$sql="DELETE FROM admin where email=' ".$email."' and password=' ".password."'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
   	
	
   }*/

     /* function Validate(){
		if (password.value != password_confirmation.value) {
			password_error.textContent = "Les deux mots de passe ne sont pas identiques";
			password.style.border = "1px solid red";
			password_confirmation.style.border = "1px solid red";
			password.focus();
			return false;
		}

	}*/

       public static function sendMail($titre,$email,$sujet,$body,$chemin)
	    {
			        $mail = new PHPMailer;
				
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';  
					$mail->SMTPAuth = true;          
					$mail->Username = 'proprosystemes@gmail.com'; 
					$mail->Password = 'propropro';      
					$mail->SMTPSecure = 'tls';               
					$mail->Port = 587;                       

					$mail->setFrom('proprosystemes@gmail.com', $titre); //ehdb no reply
					$mail->addAddress($email);
					$mail->addReplyTo('proprosystemes@gmail.com', 'Information');

					$mail->isHTML(true);                                  

					$mail->Subject = $sujet;
					$mail->Body    = $body;
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
					if ($chemin!="")
						$mail->AddAttachment($chemin);
					$mail->send();

	  }	


	  function modifierAdmin($admin){

	  	 $username =$_POST['username'];
	    $email =$_POST['email'];
		
		$sql="UPDATE `admin` SET `username` ='".$username."', `email` = '".$email."' WHERE `admin`.`id` = '".$_SESSION['id']."'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $username=$admin->getUsername();
        $email=$admin->getEmail();
        $password=$admin->getPassword();
		$datas = array(':username'=>$username,':email'=>$email,':password'=>$password);
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

}
	?>