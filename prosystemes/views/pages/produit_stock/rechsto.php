<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>chercher</title>
</head>
<body>
<?php
	include "config.php";
	include "stock.php";
	$c=new config();
	$conn=$c->getConnection();
	$e=new stock(2486,25,"aa",22);
	$resultat=$e->afficher($conn);
	
?>

<form name="Form2" method="POST" onsubmit="rechsto.php">
	<fieldset>

		Rechercher <input type="number" name="recherch"><input type="submit" name="chercher" value="chercher"></br>
		<table border="2">
			<tr>
				<td> Quantite </td>	<td> Unite </td>	<td> Description </td>	<td> Code Produit </td>	
				<td>supprimer Stock</td>	<td>Modifier Stock</td>
			</tr>
			<?php 
			
if((!isset($_POST['chercher'])) || ((isset($_POST['chercher']) && (!isset($_POST['recherch']))
   ))) {

			foreach ($resultat as $res){
			?>
			<tr>
				<td><?php echo $res['quantite'];?></td>
				<td><?php echo $res['unite'];?></td>
				<td><?php echo $res['description'];?></td>
				<td><?php echo $res['codeprod'];?></td>
				<td><a href="sstock.html">Supprimer</a></td>
				<td><a href="mstock.html">Modifier</a></td>
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
				<td><?php echo $res['quantite'];?></td>
				<td><?php echo $res['unite'];?></td>
				<td><?php echo $res['description'];?></td>
				<td><?php echo $res['codeprod'];?></td>
				<td><a href="sstock.html">Supprimer</a></td>
				<td><a href="mstock.html">Modifier</a></td>
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