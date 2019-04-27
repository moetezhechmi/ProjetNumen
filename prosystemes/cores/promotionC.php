<?PHP
include "../../../config.php";
class PromotionC {
function afficherPromotion ($promotion){
		echo "Id_produit: ".$promotion->getId_produit()."<br>";
		echo "Pourcentage: ".$promotion->getpourcentage()."<br>";
		echo "Date_debut: ".$promotion->getDate_debut()."<br>";
		echo "Date_fin: ".$promotion->getDate_fin()."<br>";
	}
	/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterPromotion($promotion){
		$sql="insert into promotion (id_produit,pourcentage,date_debut,date_fin) values (:id_produit,:pourcentage,:date_debut,:date_fin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_produit=$promotion->getId_produit();
        $pourcentage=$promotion->getpourcentage();
        $date_debut=$promotion->getDate_debut();
        $date_fin=$promotion->getDate_fin();
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPromotions(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPromotion($id_produit){
		$sql="DELETE FROM promotion where id_produit= :id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function triNom()
	{
		$sql = "SELECT * from promotion ORDER BY id_produit DESC";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function triDebut()
	{
		$sql = "SELECT * from promotion ORDER BY date_debut DESC";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function triOuverture()
	{
		$sql = "SELECT * from promotion ORDER BY pourcentage DESC";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function modifierPromotion($promotion,$id_produit){
		$sql="UPDATE promotion SET id_produit=:id_produitt,pourcentage=:pourcentage,date_debut=:date_debut,date_fin=:date_fin WHERE id_produit=:id_produit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id_produitt=$promotion->getId_produit();
        $pourcentage=$promotion->getpourcentage();
        $date_debut=$promotion->getDate_debut();
        $date_fin=$promotion->getDate_fin();
		$datas = array(':id_produitt'=>$id_produitt,':id_produit'=>$id_produit,':pourcentage'=>$pourcentage,':date_debut'=>$date_debut,':date_fin'=>$date_fin);
		$req->bindValue(':id_produitt',$id_produitt);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function recupererPromotion($id_produit){
		$sql="SELECT * from promotion where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePromotions($enter){
		$mots="%$enter%";
		$sql="SELECT * from promotion where id_produit like '$mots' or pourcentage like '$mots' or date_debut like '$mots' or date_fin like '$mots' ";
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