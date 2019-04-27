<?PHP
include "../../../config.php";
class EvenementC {
function afficherEvenement ($evenement){
		echo "Nom: ".$evenement->getNom()."<br>";
		echo "Description: ".$evenement->getdescription()."<br>";
		echo "Date_debut: ".$evenement->getDate_debut()."<br>";
		echo "Date_fin: ".$evenement->getDate_fin()."<br>";
		echo "ouverture: ".$evenement->getouverture()."<br>";
	}
	/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterEvenement($evenement){
		$sql="insert into evenement (nom,description,date_debut,date_fin,ouverture) values (:nom,:description,:date_debut,:date_fin,:ouverture)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$evenement->getNom();
        $description=$evenement->getdescription();
        $date_debut=$evenement->getDate_debut();
        $date_fin=$evenement->getDate_fin();
        $ouverture=$evenement->getouverture();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		$req->bindValue(':ouverture',$ouverture);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEvenements(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEvenement($nom){
		$sql="DELETE FROM evenement where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
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
		$sql = "SELECT * from evenement ORDER BY nom DESC";
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
		$sql = "SELECT * from evenement ORDER BY date_debut AND ouverture DESC";
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
		$sql = "SELECT * from evenement ORDER BY ouverture DESC";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function modifierEvenement($evenement,$nom){
		$sql="UPDATE evenement SET nom=:nomm,description=:description,date_debut=:date_debut,date_fin=:date_fin,ouverture=:ouverture WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nomm=$evenement->getNom();
        $description=$evenement->getdescription();
        $date_debut=$evenement->getDate_debut();
        $date_fin=$evenement->getDate_fin();
        $ouverture=$evenement->getouverture();
		$datas = array(':nomm'=>$nomm,':nom'=>$nom,':description'=>$description,':date_debut'=>$date_debut,':date_fin'=>$date_fin,':ouverture'=>$ouverture);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		$req->bindValue(':ouverture',$ouverture);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function recupererEvenement($nom){
		$sql="SELECT * from evenement where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEvenements($enter){
		$mots="%$enter%";
		$sql="SELECT * from evenement where nom like '$mots' or description like '$mots' or date_debut like '$mots' or date_fin like '$mots' or ouverture like '$mots' ";
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