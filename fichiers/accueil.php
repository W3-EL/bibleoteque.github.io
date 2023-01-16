<?php 
session_start(); 
if(empty($_SESSION['login'])) { 
    header('Location:../authentification.php'); 
    exit(); 
} 
?> 
<head> 
<title>Administration</title> 
</head> 
<link rel="stylesheet" href="css/accueil.css">
<body> 
<?php 
echo '<h1>Bienvenue ', $_SESSION['login'];
echo '</h1>' 
?> 
<div class="container">
    <div class="box">
        <input type="submit" value="Adherent">
        <div class="lien">
            <a href="insert_adherent.html"><div>Insertion</div></a>
            <a href="list_adherent.php"><div>affichage</div></a>
        </div>
    </div>
    <div class="box">
        <input type="submit" value="Documents">
        <div class="lien">
            <a href="insert_doc.html"><div>Insertion</div></a>
            <a href="list_doc.php"><div>affichage</div></a>
        </div>
    </div>
    <div class="box">
        <input type="submit" value="Emprunt">
        <div class="lien">
            <a href="insert_emprunt00.php"><div>Insertion</div></a>
            <a href="list_emprunt.php"><div>affichage</div></a>
        </div>
    </div>
</div>
</body> 
</html> 