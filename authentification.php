<?php  
if(!Empty($_POST['login']) && !Empty($_POST['mdp'])) 
{
    $link = mysqli_connect('127.0.0.1', 'root', '', 'bibliotheque');
    if (!$link)
    die('Echec de connexion au serveur de base de données : ' . mysqli_connect_error() . '('.mysqli_connect_errno() . ') ');
    if ($result = mysqli_query($link, "SELECT * from  admin where login='".$_POST['login']."' AND mdp='".$_POST['mdp']."' ;")){

            while($row = mysqli_fetch_array($result)){
                if(($_POST['login'] !== $row["login"])) { 
                echo "Mauvais login !"; 
                } 
                if($_POST['mdp'] !== $row["mdp"]) { 
                echo "Mauvais password !"; 
                }
                else{ 
                    session_start();
                    $_SESSION['login'] = $row["login"];
                    header('location:fichiers/accueil.php');
                }
            }
    $query="SELECT * FROM  admin" ;
    mysqli_query($link,$query);
} 
} 
elseif(Empty($_POST['login']) && Empty($_POST['mdp']))
{
echo 'Veuillez inscrire vos identifiants svp !'; 
}


?>
<head><link rel="stylesheet" href="fichiers/css/authentification.css"></head>
<body>
<div class="formulaire">
    <form action="" method="post">
        <table >
            <tr>
                <td><fieldset><legend>login</legend><input type="text" name="login"></fieldset></td>
            </tr>
            <tr>
                <td><fieldset><legend>Mot de passe</legend><input type="password" name="mdp"></fieldset></td>
            </tr>
        </table>
        <input class="submit" type="submit" value="login">
    </form>
</div>
</body>


