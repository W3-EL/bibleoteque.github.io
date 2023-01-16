
<?php
    require_once('documents.php');
    $us=new document(NULL,$_POST['titre'],$_POST['etat'],);
    $res=$us->existdoc();
    $row=$res->fetch_array(MYSQLI_NUM);
    if($row[0]==0)
    {
    $us->insertdocument();
    header('location:insert_doc.html');
    }
    else
    {
	echo "Document existe déja";
    }
?>