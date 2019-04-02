<?PHP
include "../core/serviceReclamation.php";
if (isset($_POST['id_reclamation']) and isset($_POST['type_reclamation']) and isset($_POST['contenu_reclamation']) and isset($_POST['auteur_reclamation']))
{
    $rec1= new reclamation($_POST['id_reclamation'],$_POST['type_reclamation'],$_POST['contenu_reclamation'],$_POST['auteur_reclamation']);
//Partie2

    var_dump($rec1);


//Partie3
    $ser=new serviceReclamation();
    $ser->ajouter_reclamation($rec1);


}else{


    echo "vérifier les champs";
}


?>
