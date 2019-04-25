<?PHP
include "../core/servicePublication.php";
$crud=new servicePublication();
echo $_GET["id_pub"];
if (isset($_GET["id_pub"])){

    $crud->supprimer_publication_admin($_GET["id_pub"]);


}

?>
