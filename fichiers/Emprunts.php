<?php
class emprunt{
	public $emprunt_idAdherent;
	public $emprunt_code;
	public $emprunt_dateEmprunt;
	public $emprunt_dateRetour;
function __construct()
{
   $num=func_num_args();
   switch($num)
   {
    case 1:
        //un seul paramétre passé
        $this->emprunt_idAdherent=func_get_arg(0);
        break;
    case 2:
        //un seul paramétre passé
        $this->emprunt_idAdherent=func_get_arg(0);
        $this->emprunt_code=func_get_arg(1);
        break;    
    case 3:
         //deux paramétres pass�s
        $this->emprunt_idAdherent=func_get_arg(0);
        $this->emprunt_code=func_get_arg(1);
        $this->emprunt_dateEmprunt=func_get_arg(2);
        break;
    case 4:
        //deux paramétres pass�s
        $this->emprunt_idAdherent=func_get_arg(0);
        $this->emprunt_code=func_get_arg(1);
        $this->emprunt_dateEmprunt=func_get_arg(2);
        $this->emprunt_dateRetour=func_get_arg(3);
        break;
    default:
   }
}

function existadh()
{
    require_once('adhérents.php');
    require_once('config.php');
	require_once('error_handler.php');
    $mysqli=new mysqli(db_host,db_user,db_password,db_database);
    $us=new adherent();
    $result=$us->listadherent();
    echo"<SELECT name='id_adh'><OPTION VALUE='choisir l'adherent' >choisir l'adherent";
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
    echo"<OPTION  VALUE='$row[idAdherent]'>$row[idAdherent]";
    }
    echo" </SELECT>";

}

function existdoc()
{
    require_once('documents.php');
    require_once('config.php');
	require_once('error_handler.php');
    $mysqli=new mysqli(db_host,db_user,db_password,db_database);
    $us=new document();
    $result=$us->listdocument();
    echo"<SELECT name='code_doc'><OPTION VALUE='choisir la document' >choisir la document";
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
    echo"<OPTION  VALUE='$row[code]'>$row[code]";
    }
    echo" </SELECT>";
}	

function insertemprunt()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$req='insert into `emprunt` values('.$this->emprunt_idAdherent.','.$this->emprunt_code.', DATE('.'"'.$this->emprunt_dateEmprunt.'"'.'),DATE('.'"'.$this->emprunt_dateRetour.'"'.'))';
$mysqli->query($req);															
$mysqli->close();
}

function insertempruntencours()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$req='insert into `emprunt` values('.$this->emprunt_idAdherent.','.$this->emprunt_code.', DATE('.'"'.$this->emprunt_dateEmprunt.'"'.'),"00-00-0000")';
$mysqli->query($req);															
$mysqli->close();
}

function listempruntencours()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$query='SELECT * FROM `emprunt` where dateRetour = "00-00-0000" order by dateEmprunt';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}
function listemprunt()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$query='SELECT * FROM `emprunt` where dateRetour != "00-00-0000" order by dateEmprunt';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}

function modifemprunt()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$query='UPDATE `emprunt` SET `dateRetour` = '.'"'.$this->emprunt_dateRetour.'"'.' where idAdherent= '.'"'.$this->emprunt_idAdherent.'"'.' and code = '.'"'.$this->emprunt_code.'"'.' and dateEmprunt ='.'"'.$this->emprunt_dateEmprunt.'"'.'';
$mysqli->query($query);
}

}
