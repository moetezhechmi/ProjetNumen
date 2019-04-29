
<?PHP
include "../../../cores/promotionC.php";
$promotion1C=new PromotionC();
$listePromotions=$promotion1C->rechercherListePromotions($_POST["search"]);


//var_dump($listeEmployes->fetchAll());
?>
                <table class="table">
<tr>
<td>Id_produit</td>
<td>Pourcentage</td>
<td>Debut</td>
<td>Fin</td>
<td>Action</td>
</tr>

<?PHP
foreach($listePromotions as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id_produit']; ?></td>
  <td><?PHP echo $row['pourcentage']; ?></td>
  <td><?PHP echo $row['date_debut']; ?></td>
  <td><?PHP echo $row['date_fin']; ?></td>
  <td><form method="POST" action="supprimerPromotion.php">
  <input type="submit" name="supprimer" value="supprimer" class="form-control">
  <input type="hidden" value="<?PHP echo $row['id_produit']; ?>" name="id_produit">
  </form>
  </td>
  </tr>
  <?PHP
}
?>
</table>