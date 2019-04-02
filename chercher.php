<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>chercher</title>
</head>
<body>
<?php
	include "config.php";
	include "produit.php";
	$c=new config();
	$conn=$c->getConnection();
	$e=new produit(2486,"IBM","noir","ordinateur","2019-05-20");
	$resultat=$e->afficher($conn);
	
?>

<form name="Form2" method="POST" onsubmit="chercher.php">
	<fieldset>

		Rechercher <input type="number" name="recherch"><input type="submit" name="chercher" value="chercher"></br>
		<table border="2">
			<tr>
				<td> Code Produit </td>	<td> Marque </td>	<td> Couleur </td>	<td> Type </td>	<td>Date</td>
				<td>supprimer Produit</td>	<td>Modifier Produit</td>
			</tr>
			<?php 
			
if((!isset($_POST['chercher'])) || ((isset($_POST['chercher']) && (!isset($_POST['recherch']))
   ))) {

			foreach ($resultat as $res){
			?>
			<tr>
				<td><?php echo $res['codeProd'];?></td>
				<td><?php echo $res['marque'];?></td>
				<td><?php echo $res['couleur'];?></td>
				<td><?php echo $res['typee'];?></td>
				<td><?php echo $res['dateC'];?></td>
				<td><a href="sprod.html">Supprimer</a></td>
				<td><a href="mprod.html">Modifier</a></td>
			</tr>
			<?php
			}
		}
		else
		{
			if(($_POST['recherch'])!=null){
			$mouhib=$e->rechercher($_POST['recherch'],$conn);
			foreach ($mouhib as $res){
			?>
			<tr>
				<td><?php echo $res['codeProd'];?></td>
				<td><?php echo $res['marque'];?></td>
				<td><?php echo $res['couleur'];?></td>
				<td><?php echo $res['typee'];?></td>
				<td><?php echo $res['dateC'];?></td>
				<td><a href="sprod.html">Supprimer</a></td>
				<td><a href="mprod.html">Modifier</a></td>
			</tr>
			<?php
		}
		}
	}
		?>

			
</table>
		

		
	</fieldset>
</form>
</body>
</html>