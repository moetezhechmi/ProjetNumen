<?PHP
include "../core/serviceReclamation.php";
$crud=new serviceReclamation();
echo $_GET["id_reclamation"];
if (isset($_GET["id_reclamation"])){

    $crud->supprimer_reclamation($_GET["id_reclamation"]);


}

?>
