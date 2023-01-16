
<?php
    require_once('Emprunts.php');
    $us=new emprunt($_POST['id_adh'],$_POST['code_doc'],$_POST['dateEmprunt'],$_POST['dateretour']);
    if (!Empty($_POST['id_adh'])&&!Empty($_POST['code_doc'])&&!Empty($_POST['dateEmprunt']))
    {
        if (Empty($_POST['dateretour'])) {
            $us->insertempruntencours();
            header('location:insert_emprunt00.php');    
        }
        $us->insertemprunt();
        header('location:insert_emprunt00.php');
    }
    else 
    {
        header('location:insert_emprunt00.php');
        
    }
?>