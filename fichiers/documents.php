<?php
class document{
	public $document_code;
	public $document_titre;
	public $document_etat;
function __construct()
{
   $num=func_num_args();
   switch($num)
   {
    case 1:
        //un seul paramétre passé
        $this->document_code=func_get_arg(0);
        break;
    case 2:
         //deux paramétres pass�s
        $this->document_code=func_get_arg(0);
        $this->document_titre=func_get_arg(1);
        break;
    case 3:
        //deux paramétres pass�s
        $this->document_code=func_get_arg(0);
        $this->document_titre=func_get_arg(1);
        $this->document_etat=func_get_arg(2);
        break;
    default:
   }
}
function existdoc()
{
	require_once('config.php');
	require_once('error_handler.php');
   $mysqli=new mysqli(db_host,db_user,db_password,db_database);
	$query='SELECT count(*) from `document` WHERE `document`.`titre`= '."'".$this->document_titre."'".' and `document`.`etat`= '."'".$this->document_etat."'".'  ';
	$res=$mysqli->query($query);
	return $res;
}	

function insertdocument()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$req='insert into `document` values(NULL,'.'"'.$this->document_titre.'"'.','."'".$this->document_etat."'".')';
$mysqli->query($req);															
$mysqli->close();
}
function suppdocument()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$req='delete from `document` where code ='.$this->document_code;
$mysqli->query($req);
$mysqli->close();
}
function listdocument()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$query='SELECT * FROM `document` order by etat ';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}

function getdocumentbytitre()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$query='SELECT * FROM document where titre='.'"'.$_POST['rech1'].'"'.' order by etat ';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}

function getdocumentbyauteur()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$query='SELECT * FROM document d , livre l where d.code=l.code and l.auteur='."'".$_POST['rech2']."'".' ';
$result=$mysqli->query($query);
return $result;
$mysqli->close();
}

function modifdocument()
{
require_once('config.php');
require_once('error_handler.php');
$mysqli=new mysqli(db_host,db_user,db_password,db_database);
$query='UPDATE `document` SET `titre` = '.'"'.$this->document_titre.'"'.' , `etat` = '.'"'.$this->document_etat.'"'.'  WHERE `document`.`code`=' .$this->document_code;
$mysqli->query($query);
}

}
