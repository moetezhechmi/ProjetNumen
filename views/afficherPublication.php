


<?php
include "../core/servicePublication.php";

$crud= new servicePublication();
$db = config::getConnexion();









if(isset($_GET['t'],$_GET['id_pub']) AND !empty($_GET['t']) AND !empty($_GET['id_pub'])) {
    $db = config::getConnexion();

    $getid = (int) $_GET['id_pub'];
    $gett = (int) $_GET['t'];
    $sessionid = 1;
    $check = $db->prepare('SELECT id_pub FROM publication WHERE id_pub = ?');
    $check->execute(array($getid));
    if($check->rowCount() == 1) {
        if($gett == 1) {
            $check_like = $db->prepare('SELECT id_like_pub FROM likes WHERE id_like_pub = ? AND id_like_client = ?');
            $check_like->execute(array($getid,$sessionid));
            $del = $db->prepare('DELETE FROM dislikes WHERE id_dislike_pub = ? AND id_dislike_client = ?');
            $del->execute(array($getid,$sessionid));
            if($check_like->rowCount() == 1) {
                $del = $db->prepare('DELETE FROM likes WHERE id_like_pub = ? AND id_like_client = ?');
                $del->execute(array($getid,$sessionid));
            } else {
                $ins = $db->prepare('INSERT INTO likes (id_like_pub, id_like_client) VALUES (?, ?)');
                $ins->execute(array($getid, $sessionid));
            }

        } elseif($gett == 2) {
            $check_like = $db->prepare('SELECT id_dislike_pub FROM dislikes WHERE id_dislike_pub = ? AND id_dislike_client = ?');
            $check_like->execute(array($getid,$sessionid));
            $del = $db->prepare('DELETE FROM likes WHERE id_like_pub = ? AND id_like_client = ?');
            $del->execute(array($getid,$sessionid));
            if($check_like->rowCount() == 1) {
                $del = $db->prepare('DELETE FROM dislikes WHERE id_dislike_pub = ? AND id_dislike_client = ?');
                $del->execute(array($getid,$sessionid));
            } else {
                $ins = $db->prepare('INSERT INTO dislikes (id_dislike_pub, id_dislike_client) VALUES (?, ?)');
                $ins->execute(array($getid, $sessionid));
            }
        }


        $likes = $db->prepare('SELECT id_like_pub FROM likes WHERE id_like_pub = ?');
        $likes->execute(array($id_like_pub));
        $likes = $likes->rowCount();
        $dislikes = $db->prepare('SELECT id_dislike_pub FROM dislikes WHERE id_dislike_pub = ?');
        $dislikes->execute(array($id_dislike_pub));
        $dislikes = $dislikes->rowCount();








    }
}


















//echo"<table border=1>";
//echo" <tr>";

//echo "</tr>";
$res=$crud->afficherPublication();
foreach ($res as $row)
{
 /*   echo "<br>";
    echo" <td> Id_pub </td>";
    echo "</tr>";
    echo" <br>";
    echo "<td>".$row['id_pub']."</td>";
    echo "</tr>";
    echo" <tr>";
    echo "<br>";
    echo" <td> Titre_pub </td>";
    echo "</tr>";
 */


    echo" <tr>";
    echo" <td> Auteur_pub </td>";
    echo "</tr>";
    echo "<br>";
    echo" <tr>";
    echo "<td>".$row['auteur_pub']."</td>";
    echo "</tr>";


    echo "<br>";
    echo "<br>";

    echo" <tr>";
    echo "<td>".$row['titre_pub']."</td>";
    echo "</tr>";
    echo "<br>";
 //   echo" <tr>";
//    echo" <td> Contenu_pub </td>";
  //  echo "</tr>";
    echo "<br>";
    echo" <tr>";
    echo "<td>".$row['contenu_pub']."</td>";
    echo "</tr>";
    echo "<br>";

    echo "<br>";
    echo" <tr>";
    echo '<td><a href="modifierPublication.php?id_pub='.$row['id_pub'].'">Modifier  </a></td>';
    echo "<br>";
    echo '<td><a href="supprimerPublication.php?id_pub='.$row['id_pub'].'">Supprimer  </a></td>';
    echo "<br>";
    echo '<td><a href="reagirPublication.php?t=1&id_pub='.$row['id_pub'].'">Like  </a></td>';
    echo '<td><a href="reagirPublication.php?t=2&id_pub='.$row['id_pub'].'">Dislike </a></td>';
    echo "<br>";
    echo "<br>";



    echo "</tr>";
}
?>