<?php
require_once('Emprunts.php ');
$us=new emprunt($_POST['id'], $_POST['code'], $_POST['dateemp'], $_POST['dateretour']);
$us->modifemprunt();
header('location:list_emprunt.php ');
?>