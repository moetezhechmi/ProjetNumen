<?PHP
include "../connect.php";
class AdminC {
function afficherUser ($admin){
		echo "Id: ".$admin->getId()."<br>";
		echo "User_name: ".$admin->getUser_name()."<br>";
		echo "Email: ".$admin->getEmail()."<br>";
		echo "Password: ".$admin->getPassword()."<br>";
		
	}
	
	function ajouterAdmin($admin){


		$sql="INSERT INTO admin( username,email,password) VALUES (:username, :email, :password)";
		$db = connect::getConnexion();
		try{
        $req=$db->prepare($sql);
		
       
		
		$req->bindValue(':username',$employe->getUser_name());
		$req->bindValue(':email',$employe->getEmail());
		$req->bindValue(':password',$employe->getPassword());
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAdmins(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
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
	function supprimerAdmin($cin){
		$sql="DELETE FROM admin where email= :email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAdmin($admin,$email){
		$sql="UPDATE admin SET username=:username, email=:email,password=:password WHERE email=:email";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		//$id=$employe->getCin();
        $username=$employe->getUser_name();
        $email=$employe->getEmail();
        $password=$employe->getPassword();
        
		$datas = array(':username'=>$username, ':email'=>$email, ':password'=>$password);
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($email){
		$sql="SELECT * from admin where email=$email";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from admin where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>