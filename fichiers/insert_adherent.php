
<?php
    require_once('Adhérents.php');
    $us=new adherent(NULL,$_POST['nom'],$_POST['prenom'],$_POST['ville']);
    $res=$us->existadherent();
    $row=$res->fetch_array(MYSQLI_NUM);
    if($row[0]==0)
    {
    $us->insertadherent();
    header('location:insert_adherent.html');
    }
    else
    {
	echo "Adherent existe déja";
    }
?>