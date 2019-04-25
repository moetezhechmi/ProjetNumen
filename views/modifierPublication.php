
<?PHP

include "../core/servicePublication.php";
/*

if (isset($_GET['id_pub'])){
    $ser=new servicePublication();
    $result=$ser->recuperer($_GET['id_pub']);
    foreach($result as $row){
        $id_pub=$row['id_pub'];
        $titre_pub=$row['titre_pub'];
        $contenu_pub=$row['contenu_pub'];
        $auteur_pub=$row['auteur_pub'];

        ?>

        <form method="POST">
            <table>
                <caption>Modifier Client</caption>
                <tr>
                    <td>Id_pub</td>
                    <td><input type="number" name="id_pub" value="<?PHP echo $id_pub ?>" ></td>
                </tr>
                <tr>
                    <td>Titre_pub</td>
                    <td><input type="text" name="titre_pub" value="<?PHP echo $titre_pub ?>"></td>
                </tr>
                <tr>
                    <td>Contenu_pub</td>
                    <td><input type="text" name="contenu_pub" value="<?PHP echo $contenu_pub ?>"></td>
                </tr>
                <tr>
                    <td>Auteur_pub</td>
                    <td><input type="number" name="auteur_pub" value="<?PHP echo $auteur_pub ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="modifier" value="modifier"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id_pub'];?>"></td>
                </tr>
            </table>
        </form>
        <?PHP
    }
} */
if (isset($_POST['modifier'])){
    $ser=new servicePublication();

    $pub=new publication($_POST['id_pub'],$_POST['contenu_pub'],$_POST['titre_pub'],$_POST['auteur_pub']);
    $ser->modifier_publication($pub,$_POST['id_ini']);
    echo $_POST['id_ini'];

}
?>
