<?php
include "config.php";
include "../entities/publication.php";

class servicePublication
{

    public $connexion;

    function __construct()
    {
        $this->connexion = Config::getConnexion();
    }

    function ajouter_publication($pub)
    {
        $sql = "INSERT INTO publication (id_pub ,contenu_pub,titre_pub ,auteur_pub) VALUES (:id_pub,:contenu_pub,:titre_pub,:auteur_pub )";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);


            $id_pub = $pub->getIdPub();
            $contenu_pub = $pub->getContenuPub();
            $titre_pub = $pub->getTitrePub();
            $auteur_pub = $pub->getAuteurPub();

            $req->bindValue(':id_pub', $id_pub);
            $req->bindValue(':contenu_pub', $contenu_pub);
            $req->bindValue(':titre_pub', $titre_pub);
            $req->bindValue(':auteur_pub', $auteur_pub);

            $req->execute();
            header('Location: ../sublime/afficheeeege.php');
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }

    function modifier_publication($pub,$id_pub)
    {
        $sql = "UPDATE publication SET  titre_pub=:titre_pub,contenu_pub=:contenu_pub ,auteur_pub=:auteur_pub WHERE id_pub=:id_pub";

        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        try {
            $req = $db->prepare($sql);
            $id_pub = $pub->getIdPub();
            $titre_pub = $pub->getTitrePub();
            $contenu_pub = $pub->getContenuPub();
            $auteur_pub = $pub->getAuteurPub();

            $datas = array(':id_pub' => $id_pub, ':titre_pub' => $titre_pub, ':contenu_pub' => $contenu_pub, ':auteur_pub' => $auteur_pub);
            $req->bindValue(':id_pub', $id_pub);
            $req->bindValue(':titre_pub', $titre_pub);
            $req->bindValue(':contenu_pub', $contenu_pub);
            $req->bindValue(':auteur_pub', $auteur_pub);


            $s = $req->execute();

            header('Location: ../sublime/afficheeeege.php');
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
            echo " Les datas : ";
            print_r($datas);
        }

    }

    function afficherPublication()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql = "SElECT * From publication";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }



        $likes = $db->prepare('SELECT id_like_pub FROM likes WHERE id_like_pub = ?');
        $likes->execute(array($id_like_pub));
        $likes = $likes->rowCount();
        $dislikes = $db->prepare('SELECT id_dislike_pub FROM dislikes WHERE id_dislike_pub = ?');
        $dislikes->execute(array($id_dislike_pub));
        $dislikes = $dislikes->rowCount();





    }

    function rechercher_publication($id_pub)
    {
        try {
            $sql = "select * from publication where id_pub=" . $id_pub . "";
            $resultat = $this->connexion->query($sql);
        } catch (Exception $ex) {
            die('Error:' . $ex->getMessage());
        }
        return $resultat;
    }

    function recuperer($id_pub)
    {
        $sql = "SELECT * from publication where id_pub=$id_pub";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimer_publication($id_pub){
        $sql="DELETE FROM publication where id_pub= :id_pub";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_pub',$id_pub);
        try{
            $req->execute();
            header('Location: ../sublime/afficheeeege.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function supprimer_publication_admin($id_pub){
        $sql="DELETE FROM publication where id_pub= :id_pub";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_pub',$id_pub);
        try{
            $req->execute();
            header('Location: ../AdminLTE-2.4.5/afficheeeegeRec.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}

