


<?php
include "../core/serviceReclamation.php";

$crud= new serviceReclamation();


//echo"<table border=1>";
//echo" <tr>";

//echo "</tr>";
$res=$crud->afficherReclamation();
foreach ($res as $row)
{
    echo "<br>";
    echo" <td> Id_reclamation </td>";
    echo "</tr>";
    echo" <br>";
    echo "<td>".$row['id_reclamation']."</td>";
    echo "</tr>";
    echo" <tr>";
    echo "<br>";
    echo" <td> Type_reclamation </td>";
    echo "</tr>";
    echo "<br>";
    echo" <tr>";
    echo "<td>".$row['type_reclamation']."</td>";
    echo "</tr>";
    echo "<br>";
    echo" <tr>";
    echo" <td> Contenu_reclamation </td>";
    echo "</tr>";
    echo "<br>";
    echo" <tr>";
    echo "<td>".$row['contenu_reclamation']."</td>";
    echo "</tr>";
    echo "<br>";
    echo" <tr>";
    echo" <td> Auteur_reclamation </td>";
    echo "</tr>";
    echo "<br>";
    echo" <tr>";
    echo "<td>".$row['auteur_reclamation']."</td>";
    echo "</tr>";
    echo "<br>";
    echo" <tr>";
    echo '<td><a href="modifierReclamation.php?id_reclamation='.$row['id_reclamation'].'">Modifier</a></td>';
    echo '<td><a href="supprimerReclamation.php?id_reclamation='.$row['id_reclamation'].'">Supprimer</a></td>';
    echo "</tr>";
}
?>