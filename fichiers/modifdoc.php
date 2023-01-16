<head>
    <link rel="stylesheet" href="css/insertion.css">
    <style>
        .formulaire fieldset{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>modifier les documents</h1>
    <div class="formulaire">
    <form action="modification_doc.php" method="post">
        <table>
        <tr>
                <td><fieldset><legend>Code de la document</legend><input name="code" type="hidden" value="<?php echo$_GET['code']?>"><?php echo$_GET['code']?></fieldset></td>
            </tr>
            <tr>
                <td><fieldset><legend>Titre de la document</legend><input name="titre" type="text" value="<?php echo$_GET['titre']?>"></fieldset></td>
            </tr>
            <tr>
                <td><fieldset><legend>Etat de la document</legend><input name="etat" type="text" value="<?php echo$_GET['etat']?>"></fieldset></td>
            </tr>
        </table>
        <button class="submit">Modifier</button>
    </form>
    </div>
</body>