<HTML>
<head>
</head>
<body>
<?PHP

include "../core/servicePublication.php";






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
            header('Location: ../AdminLTE-2.4.5/afficheeeegeRec.php');


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
            header('Location: ../AdminLTE-2.4.5/afficheeeegeRec.php');

        }








    }
}

?>
</body>
</HTMl>