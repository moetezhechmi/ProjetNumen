<?php
include "../core/config.php";
include "../entities/reclamation.php";

class serviceReclamation
{

    public $connexion;

    function __construct()
    {
        $this->connexion = Config::getConnexion();
    }

    function ajouter_reclamation($rec)
    {
        $sql = "INSERT INTO reclamation (id_reclamation ,type_reclamation,contenu_reclamation ,auteur_reclamation) VALUES (:id_reclamation,:type_reclamation,:contenu_reclamation,:auteur_reclamation )";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);


            $id_reclamation = $rec->getIdReclamation();
            $type_reclamation = $rec->getTypeReclamation();
            $contenu_reclamation = $rec->getContenuReclamation();
            $auteur_reclamation = $rec->getAuteurReclamation();

            $req->bindValue(':id_reclamation', $id_reclamation);
            $req->bindValue(':type_reclamation', $type_reclamation);
            $req->bindValue(':contenu_reclamation', $contenu_reclamation);
            $req->bindValue(':auteur_reclamation', $auteur_reclamation);

            $req->execute();
            header('Location: ../sublime/RECC.html');
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }

    function modifier_reclamation($rec,$id_reclamation)
    {
        $sql = "UPDATE reclamation SET  type_reclamation=:type_reclamation,contenu_reclamation=:contenu_reclamation ,auteur_reclamation=:auteur_reclamation WHERE id_reclamation=:id_reclamation";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try {
            $req = $db->prepare($sql);
            $id_reclamation = $rec->getIdReclamation();
            $type_reclamation = $rec->getTypeReclamation();
            $contenu_reclamation = $rec->getContenuReclamation();
            $auteur_reclamation = $rec->getAuteurReclamation();

            $datas = array(':id_reclamation' => $id_reclamation, ':type_reclamation' => $type_reclamation, ':contenu_reclamation' => $contenu_reclamation, ':auteur_reclamation' => $auteur_reclamation);
            $req->bindValue(':id_reclamation', $id_reclamation);
            $req->bindValue(':type_reclamation', $type_reclamation);
            $req->bindValue(':contenu_reclamation', $contenu_reclamation);
            $req->bindValue(':auteur_reclamation', $auteur_reclamation);


            $s = $req->execute();

            header('Location: afficherReclamation.php');
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
            echo " Les datas : ";
            print_r($datas);
        }

    }

    function afficherReclamation()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql = "SElECT * From reclamation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function rechercher_reclamation($id_reclamation)
    {
        try {
            $sql = "select * from reclamation where id_reclamation=" . $id_reclamation . "";
            $resultat = $this->connexion->query($sql);
        } catch (Exception $ex) {
            die('Error:' . $ex->getMessage());
        }
        return $resultat;
    }

    function recuperer_reclamation($id_reclamation)
    {
        $sql = "SELECT * from reclamation where id_reclamation=$id_reclamation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimer_reclamation($id_reclamation){
        $sql="DELETE FROM reclamation where id_reclamation= :id_reclamation";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_reclamation',$id_reclamation);
        try{
            $req->execute();
            header('Location: afficherReclamation.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimer_reclamation_admin($id_reclamation){
        $sql="DELETE FROM reclamation where id_reclamation= :id_reclamation";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_reclamation',$id_reclamation);
        try{
            $req->execute();
            header('Location: ../AdminLTE-2.4.5/adminRec.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}

