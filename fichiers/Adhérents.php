<?php
class adherent{
	public $adherent_id;
	public $adherent_nom;
	public $adherent_prenom;
	public $adherent_ville;
function __construct()
{
   $num=func_num_args();
   switch($num)
   {
    case 1:
        //un seul paramétre passé
        $this->adherent_id=func_get_arg(0);
        break;
    case 2:
         //deux paramétres pass�s
        $this->adherent_id=func_get_arg(0);
        $this->adherent_nom=func_get_arg(1);
        break;
    case 3:
        //deux paramétres pass�s
        $this->adherent_id=func_get_arg(0);
        $this->adherent_nom=func_get_arg(1);
        $this->adherent_prenom=func_get_arg(2);
        break;
    case 4:
        //deux paramétres pass�s
        $this->adherent_id=func_get_arg(0);
        $this->adherent_nom=func_get_arg(1);
        $this->adherent_prenom=func_get_arg(2);
        $this->adherent_ville=func_get_arg(3);
        break;
    default:
   }
}
function existadherent()
{
	require_once('config.php');
	require_once('error_handler.php');
   $mysqli=new mysqli(db_host,db_user,db_password,db_database);
	$query='SELECT count(*) from `adherent` WHERE `adherent`.`nom`= '."'".$this->adherent_nom."'".' and `adherent`.`prenom`= '."'".$this->adherent_prenom."'".'  ';
	$res=$mysqli->query($query);
	return $res;
}	
function insertadherent()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$req='insert into `adherent` values(NULL,'."'".$this->adherent_nom."'".','."'".$this->adherent_prenom."'".','."'".$this->adherent_ville."'".')';
$mysqli->query($req);															
$mysqli->close();
}
function suppadherent()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$req='DELETE adherent FROM adherent LEFT JOIN emprunt ON adherent.idAdherent=emprunt.idAdherent where adherent.idAdherent ='."'".$this->adherent_id."'".'  ';
$mysqli->query($req);
$mysqli->close();
}
function listadherent()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$query='SELECT * FROM `adherent` ';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}

function modifadherent()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$query='UPDATE `adherent` SET `nom` = '."'".$this->adherent_nom."'".', `prenom` = '."'".$this->adherent_prenom."'".', `ville` = '."'".$this->adherent_ville."'".' WHERE `adherent`.`idAdherent`='."'".$this->adherent_id."'".' ';
$mysqli->query($query);
}

}
