<?PHP
include "../core/serviceReclamation.php";
$crud=new serviceReclamation();
echo $_GET["id_reclamation"];
if (isset($_GET["id_reclamation"])){

    $crud->supprimer_reclamation_admin($_GET["id_reclamation"]);


}

?>
