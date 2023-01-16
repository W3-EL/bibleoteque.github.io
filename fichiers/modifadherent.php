<head>
    <link rel="stylesheet" href="css/insertion.css">
    <style>
        .formulaire fieldset{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>modifier les adherents</h1>
    <div class="formulaire">
    <form action="modification_adherents.php" method="post">
        <table>
        <tr>
            <td><fieldset><legend>Id de l'adherent</legend><input name="id" type="hidden" value="<?php echo$_GET['id']?>"><?php echo$_GET['id']?></fieldset></td>
        </tr>
        <tr>
            <td><fieldset><legend>Nom de l'adherent</legend><input name="nom" type="text" value="<?php echo$_GET['nom']?>"></fieldset></td>
        </tr>
        <tr>
            <td><fieldset><legend>Prenom de l'adherent</legend><input name="prenom" type="text" value="<?php echo$_GET['prenom']?>"></fieldset></td>
        </tr>
        <tr>
            <td><fieldset><legend>Ville de l'adherent</legend><input name="ville" type="text" value="<?php echo$_GET['ville']?>"></fieldset></td>
        </tr>
        </table>
        <button class="submit">Modifier</button>
    </form>
    </div>
</body>