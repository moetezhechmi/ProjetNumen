<?PHP
include "employeC.php";
$employe1C=new commandeC();
$listeEmployes=$employe1C->afficherCommandes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id Commande</td>
<td>id Client</td>
<td>id Produit</td>
<td>date Livraison</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['idC']; ?></td>
	<td><?PHP echo $row['idClient']; ?></td>
	<td><?PHP echo $row['idP']; ?></td>
	<td><?PHP echo $row['dateL']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idC']; ?>" name="idC">
	</form>
	</td>
	<td><a href="modifierEmploye.php?nom=<?PHP echo $row['idC']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


