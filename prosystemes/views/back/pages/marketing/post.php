 <?PHP
include "../../../cores/promotionC.php";
$evenement1C=new EvenementC();
if(isset($_POST['search']) && !empty($_POST['search']))
{
$listeEvenements=$evenement1C->rechercherListeEvenements($_POST["search"]);  
}
else {$listeEvenements=$evenement1C->afficherEvenements();}

//var_dump($listeEmployes->fetchAll());
?>
               <table class="table" id="a">
<tr>
<td>Nom</td>
<td>Description</td>
<td>Debut</td>
<td>Fin</td>
<td>Ouverture</td>
<td >Action</td>
</tr>

<?PHP
foreach($listeEvenements as $row){
  ?>
  <tr>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><?PHP echo $row['date_debut']; ?></td>
  <td><?PHP echo $row['date_fin']; ?></td>
  <td><?PHP echo $row['ouverture']; ?></td>
  <td><form method="POST" action="supprimerEvenement.php">
  <input type="submit" name="supprimer" value="supprimer" class="form-control">
  <input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
  </form>
  </td>
  </tr>
  <?PHP
}
?>

</table>