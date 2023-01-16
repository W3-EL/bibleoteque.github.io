<?php
require_once('documents.php ');
$us=new document($_POST['code'], $_POST['titre'], $_POST['etat']);
$us->modifdocument();
header('location:list_doc.php ');
?>