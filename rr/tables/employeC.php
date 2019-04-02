<?PHP
include "config.php";
class factureC {
function afficherFacture ($facture){
		echo "id du facture: ".$facture->getIdF()."<br>";
		echo "id de la commande: ".$facture->getIdC()."<br>";
		echo "prix : ".$facture->getPrix()."<br>";
	}
	function ajouterFacture($facture){
		$sql="insert into facture (idF,idC,prix) values (:idF,:idC,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idF=$facture->getIdF();
        $idC=$facture->getIdC();
        $prix=$facture->getPrix();
		$req->bindValue(':idF',$idF);
		$req->bindValue(':idC',$idC);
		$req->bindValue(':prix',$prix);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherFactures(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From facture";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerFacture($idF){
		$sql="DELETE FROM facture where idF= :idF";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idF',$idF);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierFacture($facture,$idF){
		$sql="UPDATE facture SET idF=:idF,idC=:idC,prix=:prix WHERE idF=:idF";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idF=$facture->getIdF();
        $idC=$facture->getIdC();
        $prix=$facture->getPrix();
		$datas = array(':idF'=>$idF,':idC'=>$idC,':prix'=>$prix);
		$req->bindValue(':idF',$idF);
		$req->bindValue(':idC',$idC);
		$req->bindValue(':prix',$prix);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function recupererFacture($idF){
		$sql="SELECT * from facture where idF=$idF";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeFacture($idF){
		$sql="SELECT * from facture where idF=$idF";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherFacture($idF)
	{
		$sql = "SELECT * from facture where idF=$idF";
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