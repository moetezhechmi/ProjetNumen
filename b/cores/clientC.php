<?PHP
include "../../config.php";
class ClientC {
function afficherClient ($client){
		echo "id: ".$client->getId()."<br>";
		echo "username: ".$client->getUsername()."<br>";
		echo "email: ".$client->getEmail()."<br>";
		echo "password: ".$client->getPassword()."<br>";
		
	}

function afficherClients(){

		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function ajouterClients($client,$conf){
	    $nom =$_POST['nom'];
	    $prenom =$_POST['prenom'];
	    $date =$_POST['date'];
	    $sexe =$_POST['sexe'];
	    $code =$_POST['code'];
	    $ville =$_POST['ville'];
	    $num =$_POST['num'];
	    $email =$_POST['email'];
	    $password =$_POST['password'];
	    $key=$conf;
	    $sql="INSERT INTO client( nom , prenom, date_naissance, sexe, code_postal, ville, num_tel, email, password, confirmkey) VALUES ("."'".$nom."','".$prenom."','".$date."','".$sexe."','".$code."','".$ville."','".$num."','".$email."','".$password."','".$key."')";

		//$sql="insert into client (nom,description,date_debut,date_fin,ouverture) values (:nom,:description,:date_debut,:date_fin,:ouverture)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $date_naissance=$client->getDate_naissance();
        $sexe=$client->getSexe();
        $code=$client->getCode_postal();
        $ville=$client->getVille();
        $num=$client->getNum_tel();
        $email=$client->getEmail();
        $password=$client->getPassword();
        
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date_naissance',$date_naissance);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':code_postal',$code);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':num_tel',$num);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);

        


		            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function supprimerClient($id){
		$id =$_POST['id'];
		$sql="DELETE FROM client where id=' ".$id."'";
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


    

       public static function sendMail($titre,$email,$sujet,$body,$chemin)
	    {
			        $mail = new PHPMailer;
				
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';  
					$mail->SMTPAuth = true;          
					$mail->Username = 'midoun.tv@gmail.com'; 
					$mail->Password = 'destroyersblue';      
					$mail->SMTPSecure = 'tls';               
					$mail->Port = 587;                       

					$mail->setFrom('midoun.tv@gmail.com', $titre); //ehdb no reply
					$mail->addAddress($email);
					$mail->addReplyTo('midoun.tv@gmail.com', 'Information');

					$mail->isHTML(true);                                  

					$mail->Subject = $sujet;
					$mail->Body    = $body;
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
					if ($chemin!="")
						$mail->AddAttachment($chemin);
					$mail->send();

	  }	

	  function modifierClient($client){

	  	$code =$_POST['code'];
	    $ville =$_POST['ville'];
	    $num =$_POST['num'];
	    $email =$_POST['email'];
		
		
		$sql="UPDATE `client` SET `code_postal` =' ".$code."', `ville` = ' ".$ville."', `num_tel` = ' ".$num."', `email` =' ".$email."' WHERE `client`.`id` = ' ".$_SESSION['id']."'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

        $code =$client->getCode_postal();
	    $ville =$client->getVille();
	    $num =$client->getNum_tel();
	    $email =$client->getEmail();
        $password=$client->getPassword();
		$datas = array(':code'=>$code,':ville'=>$ville,':num'=>$num,':email'=>$email,':password'=>$password);
		$req->bindValue(':code',$code);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':num',$num);
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