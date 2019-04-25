<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>affichage stock</title>
  </head>
  <body>
    <?php
include"config.php";
include"stock.php";
$c=new config();
$conn=$c->getConnection();
$e=new stock(69,255,"aa",22);
$e1=new stock(252,55,"zz",14);
$resultat=$e->afficher($conn);
$e1->afficher($conn);

?>


    <table border="1">
      <tr>
        <td>quantite</td>
        <td>unite</td>
        <td>description</td>
        <td>codeprod</td>
      </tr>
      <tr>
        <?php
foreach ($resultat as $res) {

  ?>

<tr>

  
  <td><?php echo $res['quantite']; ?></td>
  <td><?php echo $res['unite']; ?></td>
    <td><?php echo $res['description']; ?></td>
  <td><?php echo $res['codeprod']; ?></td>
</tr>
<?php
}
 ?>
      </tr>
    </table>
    <a href="stock.html">Ajouter dans le stock</a></td>
    </fieldset>
  </body>
</html>
