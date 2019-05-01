<?php
session_start();
$_session = array();
session_destroy();
header('Location: http://localhost/b/views/page/loginAdmin.php');
?>