<?PHP
include "config.php";
class commandeC {
function afficherCommande ($commande){
		echo "id du commande: ".$commande->getIdC()."<br>";
		echo "id du client: ".$commande->getIdClient()."<br>";
		echo "id du produit: ".$commande->getIdP()."<br>";
		echo "Date de livraison: ".$commande->getDateL()."<br>";
	}
	function ajouterCommande($commande){
		$sql="insert into commande (idC,idClient,idP,dateL) values (:idC,:idClient,:idP,:dateL)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idC=$commande->getIdC();
        $idClient=$commande->getIdClient();
        $idP=$commande->getIdP();
        $dateL=$commande->getDateL();
		$req->bindValue(':idC',$idC);
		$req->bindValue(':idClient',$idClient);
		$req->bindValue(':idP',$idP);
		$req->bindValue(':dateL',$dateL);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCommande($idC){
		$sql="DELETE FROM commande where idC= :idC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idC',$idC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCommande($commande,$idC){
		$sql="UPDATE commande SET idC=:idC,idClient=:idClient,idP=:idP,dateL=:dateL WHERE idC=:idC";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idC=$commande->getIdC();
        $idClient=$commande->getIdClient();
        $idP=$commande->getIdP();
        $dateL=$commande->getDateL();
		$datas = array(':idC'=>$idC,':idClient'=>$idClient,':idP'=>$idP,':dateL'=>$dateL);
		$req->bindValue(':idC',$idC);
		$req->bindValue(':idClient',$idClient);
		$req->bindValue(':idP',$idP);
		$req->bindValue(':dateL',$dateL);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function recupererCommande($idC){
		$sql="SELECT * from commande where idC=$idC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCommande($dateL){
		$sql="SELECT * from commande where dateL=$dateL";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function trierCommandes($colonne)
	{
		$sql = "SELECT * from commande ORDER BY $colonne ASC";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
}

?>