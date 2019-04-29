<?PHP
include "config.php";
class InstallationC {
function afficherInstallation ($installation){
		echo "Numero_inst: ".$installation->getNumero_inst()."<br>";
		echo "Id_client: ".$installation->getId_client()."<br>";
		echo "Nombre_produit: ".$installation->getNombre_produit()."<br>";
		echo "Progres: ".$installation->getProgres()."<br>";
		echo "Prix: ".$installation->getPrix()."<br>";
		echo "Date_fin: ".$installation->getDate_fin()."<br>";
		echo "Date_debut: ".$installation->getDate_debut()."<br>";
	}
	/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterInstallation($installation){
		$sql="insert into installation (numero_inst,id_client,nombre_produit,progres,prix,date_debut,date_fin) values (:numero_inst,:id_client,:nombre_produit,:progres,:prix,:date_debut,:date_fin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $numero_inst=$installation->getNumero_inst();
        $id_client=$installation->getId_client();
        $nombre_produit=$installation->getNombre_produit();
        $progres=$installation->getProgres();
        $prix=$installation->getPrix();
        $date_debut=$installation->getDate_debut();
        $date_fin=$installation->getDate_fin();

		$req->bindValue(':numero_inst',$numero_inst);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nombre_produit',$nombre_produit);
		$req->bindValue(':progres',$progres);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherInstallations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From installation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerInstallation($numero_inst){
		$sql="DELETE FROM installation where numero_inst= :numero_inst";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numero_inst',$numero_inst);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierInstallation($installation,$numero_inst){
		$sql="UPDATE installation SET numero_inst=:numero_instt,id_client=:id_client,nombre_produit=:nombre_produit,progres=:progres,prix=:prix,date_debut=:date_debut,date_fin=:date_fin WHERE numero_inst=:numero_inst";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $numero_instt=$installation->getNumero_inst();
        $id_client=$installation->getId_client();
        $nombre_produit=$installation->getNombre_produit();
        $progres=$installation->getProgres();
        $prix=$installation->getPrix();
        $date_debut=$installation->getDate_debut();
        $date_fin=$installation->getDate_fin();
		$datas = array(':numero_instt'=>$numero_instt,':numero_inst'=>$numero_inst,':id_client'=>$id_client,':nombre_produit'=>$nombre_produit,':progres'=>$progres,':prix'=>$prix,         
		':date_debut'=>$date_debut,':date_fin'=>$date_fin);
		$req->bindValue(':numero_instt',$numero_instt);
		$req->bindValue(':numero_inst',$numero_inst);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nombre_produit',$nombre_produit);
		$req->bindValue(':progres',$progres);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function tri_numero(){
		$sql="SELECT * from installation ORDER BY numero_inst DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function tri_date_fin(){
		$sql="SELECT * from installation ORDER BY date_fin DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function tri_progres(){
		$sql="SELECT * from installation ORDER BY progres DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
	function rechercherListeInstallations($enter){
		$enter="%$enter%";
		$sql="SELECT * from installation where numero_inst like '$enter' or id_client like '$enter' or nombre_produit like '$enter' or progres like '$enter' or prix like '$enter' or date_debut like '$enter' or date_fin like '$enter'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherchermesInstallations($enter){
		
		$sql="SELECT * from installation where numero_inst ='$enter'";
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