<?PHP
include "employeC.php";
$employe1C=new factureC();
$listeEmployes=$employe1C->afficherFactures();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id Facture</td>
<td>id Commande</td>
<td>prix</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['idF']; ?></td>
	<td><?PHP echo $row['idC']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idF']; ?>" name="idF">
	</form>
	</td>
	<td><a href="modifierEmploye.php?nom=<?PHP echo $row['idF']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


