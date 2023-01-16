<?php
    require_once('Emprunts.php');
    $us=new emprunt();
?>
<head><link rel="stylesheet" href="css/insertion.css"></head>
<body>
    <h1>Ajouter une Emprunt</h1>
    <div class="formulaire" style="height:70%;" >
    <form action="insert_emprunt.php" method="post">
        <table>
            <tr>
                <td><fieldset><legend>id de l'adherent</legend><?php $result=$us->existadh(); ?></fieldset></td>
            </tr>
            <tr>
                <td><fieldset><legend>code de la document</legend><?php     $result=$us->existdoc(); ?></fieldset></td>
            </tr>
            <tr>
                <td><fieldset><legend>date de l'Emprunt</legend><input name="dateEmprunt" type="date"></fieldset></td>
            </tr>
            <tr>
                <td><fieldset><legend>date de retour</legend><input name="dateretour" type="date"></fieldset></td>
            </tr>
        </table>
        <button class="submit">AJOUTER</button>
        <a class="back"  href="accueil.php">X</a>
    </form>
    </div>
</body>