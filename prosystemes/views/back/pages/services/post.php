<?PHP
include "../../../cores/installationC.php";
$installation1C=new InstallationC();
if(isset($_POST['search']) and !empty($_POST['search']))
{
  $listeInstallations=$installation1C->rechercherListeInstallations($_POST['search']);
}
else
{
$listeInstallations=$installation1C->afficherInstallations();
}
?>
 <table class="table">
  <tr>
<td>Numero d'installaion</td>
<td>id client</td>
<td>Nb Produits</td>
<td>Progres</td>
<td>Prix</td>
<td>date debut</td>
<td>date_fin</td>
<td colspan="2">Action</td>
</tr>

<?PHP
foreach($listeInstallations as $row){
  ?>
  <tr>
  <td><?PHP echo $row['numero_inst']; ?></td>
  <td><?PHP echo $row['id_client']; ?></td>
  <td><?PHP echo $row['nombre_produit']; ?></td>
  <td><?PHP echo $row['progres']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['date_debut']; ?></td>
  <td><?PHP echo $row['date_fin']; ?></td>
  <td><form method="POST" action="supprimerInstallation.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['numero_inst']; ?>" name="numero_inst">
  </form>
  </td>
  </tr>
  <?PHP
}
?>
</table>
