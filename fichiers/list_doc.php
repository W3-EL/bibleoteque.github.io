<head>
    <link rel="stylesheet" href="css/affichage.css">
</head>
<body>
    <h1>Liste des documents</h1>
    <form action="" method="post">
    <div class="rech">
        <input name="rech1" type="text" value="" placeholder="Recherche par titre ">
        <input name="rech2" type="text" value="" placeholder="Recherche par auteur ">
        <button><img src="css/search.png" width="14px"></button>
    </div>

<?php
    require_once('documents.php');
    $us=new document();
    if(!Empty($_POST['rech1']) && Empty($_POST['rech2'])){
        $result=$us->getdocumentbytitre();  
        echo" <table border='2'><tr><td>code</td><td>titre</td><td>etat</td><td>Modifier</td><td>Supprimer</td></tr>";     
        while($row=$result->fetch_array(MYSQLI_ASSOC))
        {
                echo "  <tr>
                        <td>$row[code]</td><td>$row[titre]</td><td>$row[etat]</td>
                        <td><a href='modifdoc.php?code=$row[code]&titre=$row[titre]&etat=$row[etat]'><img src='css/edit.png'></a></td>
                        <td><a href='supprimerdoc.php?code=$row[code]'><img src='css/trash.png'></a></td>
                        </tr>";      
        }
        $result->close();
        echo"</table><br>";
    }
    if(!Empty($_POST['rech2']) && Empty($_POST['rech1']) ){
        $result=$us->getdocumentbyauteur();  
        echo" <table border='2'><tr><td>code</td><td>titre</td><td>etat</td><td>Modifier</td><td>Supprimer</td></tr>";     
        while($row=$result->fetch_array(MYSQLI_ASSOC))
        {
                echo "  <tr>
                        <td>$row[code]</td><td>$row[titre]</td><td>$row[etat]</td>
                        <td><a href='modifdoc.php?code=$row[code]&titre=$row[titre]&etat=$row[etat]'><img src='css/edit.png'></a></td>
                        <td><a href='supprimerdoc.php?code=$row[code]'><img src='css/trash.png'></a></td>
                        </tr>";      
        }
        $result->close();
        echo"</table><br>";
    }
    if (Empty($_POST['rech2']) && Empty($_POST['rech1']) ){
        $result=$us->listdocument();
        echo" <table border='2'><tr><td>code</td><td>titre</td><td>etat</td><td>Modifier</td><td>Supprimer</td></tr>";     
        while($row=$result->fetch_array(MYSQLI_ASSOC))
        {
                echo "  <tr>
                        <td>$row[code]</td><td>$row[titre]</td><td>$row[etat]</td>
                        <td><a href='modifdoc.php?code=$row[code]&titre=$row[titre]&etat=$row[etat]'><img src='css/edit.png'></a></td>
                        <td><a href='supprimerdoc.php?code=$row[code]'><img src='css/trash.png'></a></td>
                        </tr>";      
        }
        $result->close();
        echo"</table><br>";
    }

?>
        <a class="back"  href="accueil.php">X</a>
</form>
</body>