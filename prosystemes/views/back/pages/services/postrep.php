<?PHP
include "../../../cores/reparationC.php";
$reparation1C=new reparationC();
if(isset($_POST['search']) and !empty($_POST['search']))
{
  $listereparations=$reparation1C->rechercherListeReparations($_POST['search']);
}
else
{
$listereparations=$reparation1C->afficherReparations();
}
?>
 <table class="table">
<tr>
<td>Numero de reparation</td>
<td>id client</td>
<td>id Produits</td>
<td>Nb pannes</td>
<td>Progres</td>
<td>Prix</td>
<td>responsable</td>
<td>delai</td>
<td colspan="2">Action</td>
</tr>

<?PHP
foreach($listereparations as $row){
  ?>
  <tr>
  <td><?PHP echo $row['numero_rep']; ?></td>
  <td><?PHP echo $row['id_client']; ?></td>
  <td><?PHP echo $row['id_produit']; ?></td>
  <td><?PHP echo $row['nb_panne']; ?></td>
  <td><?PHP echo $row['progres']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['responsable']; ?></td>
  <td><?PHP echo $row['delai']; ?></td>
  <td><form method="POST" action="supprimerReparation.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['numero_rep']; ?>" name="numero_rep">
  </form>
  </td>
  </tr>
  <?PHP
}
?>
</table>



