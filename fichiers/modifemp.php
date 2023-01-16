<head>
    <link rel="stylesheet" href="css/insertion.css">
    <style>
        .formulaire fieldset{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>modifier les Emprunts</h1>
    <div class="formulaire">
    <form action="modification_Emprunts.php" method="post">
        <table>
        <tr>
                <td><fieldset><legend>Id de l'adherent</legend><input name="id" type="hidden" value="<?php echo$_GET['id']?>"><?php echo$_GET['id']?></fieldset></td>
            </tr>
            <tr>
                <td><fieldset><legend>code de la document</legend><input name="code" type="hidden" value="<?php echo$_GET['code']?>"><?php echo$_GET['code']?></fieldset></td>
            </tr>
            <tr>
                <td><fieldset><legend>Date de l'Emprunt:</legend><input name="dateemp" type="hidden" value="<?php echo$_GET['dateemp']?>"><?php echo$_GET['dateemp']?></fieldset></td>
            </tr>
            <tr>
                <td><fieldset><legend>Date de retour</legend><input name="dateretour" type="date"></fieldset></td>
            </tr>
        </table>
        <button class="submit">Modifier</button>
    </form>
    </div>
</body>