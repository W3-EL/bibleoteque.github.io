<?php
require_once('documents.php');
$us=new document($_GET['code']);
$us-> suppdocument();
header('Location:list_doc.php');
?>