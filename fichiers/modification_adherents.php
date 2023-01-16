<?php
require_once('Adhérents.php ');
$us=new adherent($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['ville']);
$us->modifadherent();
header('location:list_adherent.php ');
?>