<?php
require_once('Adhérents.php');
$us=new adherent($_GET['id']);
$us-> suppadherent();
header('Location:list_adherent.php');
?>