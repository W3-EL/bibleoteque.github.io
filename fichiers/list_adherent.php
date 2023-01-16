<head>
    <link rel="stylesheet" href="css/affichage.css">
</head>
<body>
    <h1>Liste des adhérents</h1>
<?php
    require_once('Adhérents.php');
    $us=new adherent();
    $result=$us->listadherent();
    echo"<table border='2'><tr><td>id</td><td>nom</td><td>prenom</td><td>ville</td><td>Modifier</td><td>Supprimer</td></tr>";     
    while($row=$result->fetch_array(MYSQLI_ASSOC))
    {
            echo "  <tr>
                    <td>$row[idAdherent]</td><td>$row[nom]</td><td>$row[prenom]</td><td>$row[ville]</td>
                    <td><a href='modifadherent.php?id=$row[idAdherent]&nom=$row[nom]&prenom=$row[prenom]&ville=$row[ville]'><img src='css/edit.png'></a></td>
                    <td><a href='supprimeradherent.php?id=$row[idAdherent]'><img src='css/trash.png'></a></td>
                    </tr>";      
    }
    $result->close();
    echo"</table><br>";
?>
        <a class="back"  href="accueil.php">X</a>
</body>