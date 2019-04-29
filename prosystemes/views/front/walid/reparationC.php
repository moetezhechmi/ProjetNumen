<?PHP
include "config.php";
class ReparationC {
function afficherReparation ($reparation){
		echo "Numero_rep: ".$reparation->getNumero_rep()."<br>";
		echo "Id_client: ".$reparation->getId_client()."<br>";
		echo "Id_produit: ".$reparation->getId_produit()."<br>";
		echo "nb_panne: ".$reparation->getNb_panne()."<br>";
		echo "Progres: ".$reparation->getProgres()."<br>";
		echo "Prix: ".$reparation->getPrix()."<br>";
		echo "Delai: ".$reparation->getDelai()."<br>";
		echo "Responsable: ".$reparation->getResponsable()."<br>";
	}
	
	function ajouterReparation($reparation){
		$sql="insert into reparation (numero_rep,id_client,id_produit,nb_panne,progres,prix,responsable,delai) values (:numero_rep,:id_client,:id_produit,:nb_panne,:progres,:prix,:responsable,:delai)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $numero_rep=$reparation->getNumero_rep();
        $id_client=$reparation->getId_client();
        $id_produit=$reparation->getId_produit();
        $nb_panne=$reparation->getNb_panne();
        $progres=$reparation->getProgres();
        $prix=$reparation->getPrix();
        $responsable=$reparation->getResponsable();
        $delai=$reparation->getDelai();

		$req->bindValue(':numero_rep',$numero_rep);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nb_panne',$nb_panne);
		$req->bindValue(':progres',$progres);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':responsable',$responsable);
		$req->bindValue(':delai',$delai);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReparations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reparation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReparation($numero_rep){
		$sql="DELETE FROM reparation where numero_rep= :numero_rep";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numero_rep',$numero_rep);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReparation($reparation,$numero_rep){
		$sql="UPDATE reparation SET numero_rep=:numero_repp,id_client=:id_client,id_produit=:id_produit,nb_panne=:nb_panne,progres=:progres,prix=:prix,responsable=:responsable,delai=:delai WHERE numero_rep=:numero_repp";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $numero_repp=$reparation->getNumero_rep();
        $id_client=$reparation->getId_client();
        $id_produit=$reparation->getId_produit();
        $nb_panne=$reparation->getNb_panne();
        $progres=$reparation->getProgres();
        $prix=$reparation->getPrix();
        $responsable=$reparation->getResponsable();
        $delai=$reparation->getDelai();
		$datas = array(':numero_repp'=>$numero_repp,':numero_rep'=>$numero_rep,':id_client'=>$id_client,':id_produit'=>$id_produit,':nb_panne'=>$nb_panne,':progres'=>$progres,':prix'=>$prix,         
		':responsable'=>$responsable,':delai'=>$delai);
		$req->bindValue(':numero_repp',$numero_repp);
		$req->bindValue(':numero_rep',$numero_rep);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nb_panne',$nb_panne);
		$req->bindValue(':progres',$progres);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':responsable',$responsable);
		$req->bindValue(':delai',$delai);
		
            $s=$req->execute();
			
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function recupererReparation($numero_inst){
		$sql="SELECT * from reparation where numero_rep=$numero_rep";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function tri_numero(){
		$sql="SELECT * from reparation ORDER BY numero_rep DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function tri_delai(){
		$sql="SELECT * from reparation ORDER BY delai DESC";
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
		$sql="SELECT * from reparation ORDER BY progres DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function tri_id(){
		$sql="SELECT * from reparation ORDER BY id_produit DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeReparations($enter){
		$enter="%$enter%";
		$sql="SELECT * from reparation where numero_rep like '$enter' or id_client like '$enter' or id_produit like '$enter' or nb_panne like '$enter' or progres like '$enter' or prix like '$enter' or  responsable like '$enter' or delai like '$enter'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function recherchermesReparations($enter){
		
		$sql="SELECT * from reparation where numero_rep ='$enter'";
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