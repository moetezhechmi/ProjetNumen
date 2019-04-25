<?PHP
include "../core/servicePublication.php";
if (isset($_POST['id_pub']) and isset($_POST['contenu_pub']) and isset($_POST['titre_pub']) and isset($_POST['auteur_pub']))
{
    $pub1= new publication($_POST['id_pub'],$_POST['contenu_pub'],$_POST['titre_pub'],$_POST['auteur_pub']);
//Partie2

var_dump($pub1);


//Partie3
    $ser=new servicePublication();
    $ser->ajouter_publication($pub1);


}else{


    echo "vérifier les champs";
}


?>
