
<head>
        <link rel="stylesheet" href="css/affichage.css">
        <style>
        table tr td {
        width: 200px;
        text-align: center;
        }
        form {
        }

        </style>
</head>
<body>
<h1>Listes des Emprunts</h1>
<?php
require_once('emprunts.php');
    $us=new emprunt();
    $result=$us->listempruntencours();
    echo"Liste des Emprunts en cours  <br>
    <table border='2'><tr><td>id de l'adherent</td><td>code de la document</td><td>Date de Emprunt</td><td>Date de retour</td><td>Modifier</td></tr>";     
    while($row=$result->fetch_array(MYSQLI_ASSOC))
    {
            echo "  <tr>
                    <td>$row[idAdherent]</td><td>$row[code]</td><td>$row[dateEmprunt]</td><td>En cours ...</td>
                    <td><a href='modifemp.php?id=$row[idAdherent]&code=$row[code]&dateemp=$row[dateEmprunt]'><img src='css/edit.png'></a></td>
                    </tr>";      
    }
    $result->close();
    echo"</table><br>
    Liste des Emprunts terminer <br>";
    $result=$us->listemprunt();
    echo"<table border='2'><tr><td>id de l'adherent</td><td>code de la document</td><td>Date de Emprunt</td><td>Date de retour</td></tr>";     
    while($row=$result->fetch_array(MYSQLI_ASSOC))
    {
            echo "  <tr>
                    <td>$row[idAdherent]</td><td>$row[code]</td><td>$row[dateEmprunt]</td><td>$row[dateRetour]</td>
                    </tr>";      
    }
    $result->close();
    echo"</table><br>";
?>
        <a class="back"  href="accueil.php">X</a>
</body>
