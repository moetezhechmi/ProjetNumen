<?PHP
include "employeC.php";
$employe1C=new EvenementC();
$listeEmployes=$employe1C->afficherEvenements();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Description</td>
<td>Debut</td>
<td>Fin</td>
<td>Ouverture</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['date_debut']; ?></td>
	<td><?PHP echo $row['date_fin']; ?></td>
	<td><?PHP echo $row['ouverture']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
	</form>
	</td>
	<td><a href="modifierEmploye.php?nom=<?PHP echo $row['nom']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


